<?php

use App\User;
use App\Denounced;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditDenouncedTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function can_edit_a_denounced()
    {
        $user = factory(User::class)->create();

        $denounced = factory(Denounced::class)->create();

        $this->actingAs($user)
        	 ->visit('/denounceds/'.$denounced->id.'/edit')
        	 ->see($denounced->firstname)
        	 ->see($denounced->lastname)
        	 ->see($denounced->ci)
        	 ->type('Abel', 'firstname')
        	 ->type('Barrientos', 'lastname')
        	 ->type('5683688', 'ci')
        	 ->press('Save');

        $this->seeInDatabase('denounceds', [
        	'firstname' => 'Abel',
        	'lastname' => 'Barrientos',
        	'ci' => '5683688'
        ]);
    }

    /** @test */
    public function validate_when_editing_denounced()
    {
        $user = factory(User::class)->create();

        $denounced = factory(Denounced::class)->create();

        $this->actingAs($user)
            ->visit('/denounceds/'.$denounced->id.'/edit')
            ->see($denounced->firstname)
        	->see($denounced->lastname)
        	->see($denounced->ci)
        	->type('', 'firstname')
        	->type('', 'lastname')
        	->type('', 'ci')
            ->press('Save');

        $this->see(trans('validation.required', ['attribute' => 'firstname', 'attribute' => 'lastname', 'attribute' => 'ci']));
    }
}
