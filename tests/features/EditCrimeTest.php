<?php

use App\User;
use App\Crime;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditCrimeTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function can_edit_a_crime()
    {
        $user = factory(User::class)->create();

        $crime = factory(Crime::class)->create();

        $this->actingAs($user)
        	 ->visit('/crimes/'.$crime->id.'/edit')
        	 ->see($crime->article)
        	 ->see($crime->subsection)
        	 ->see($crime->name)
        	 ->type('123', 'article')
        	 ->type('bis', 'subsection')
        	 ->type('sedicion', 'name')
        	 ->press('Save');

        $this->seeInDatabase('crimes', [
        	'article' => '123',
        	'subsection' => 'bis',
        	'name' => 'sedicion'
        ]);
    }

    /** @test */
    function validate_when_editing_crime()
    {
        $user = factory(User::class)->create();

        $crime = factory(Crime::class)->create();

        $this->actingAs($user)
            ->visit('/crimes/'.$crime->id.'/edit')
            ->see($crime->article)
        	->see($crime->name)
        	->type('', 'article')
        	->type('', 'name')
            ->press('Save');

        $this->see(trans('validation.required', ['attribute' => 'article', 'attribute' => 'name']));
    }
}
