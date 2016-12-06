<?php

use App\User;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AddNewCrimeTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function can_add_new_crime()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
        	 ->visit('/crimes/create')
        	 ->type('123', 'article')
        	 ->type('', 'subsection')
        	 ->type('sedicion', 'name')
        	 ->press('Save');

        $this->seeInDatabase('crimes', [
        	'article' => '123',
        	'subsection' => '',
        	'name' => 'sedicion'
        ]);
    }

    /** @test */
    function validate_when_adding_a_new_crime()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->visit('/crimes/create')
            ->press('Save');

        $this->see(trans('validation.required', ['attribute' => 'article', 'attribute' => 'name']));
    }

    /** @test */
    function validate_article_must_be_numeric()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->visit('/crimes/create')
            ->type('abas', 'article')
            ->press('Save');

        $this->see(trans('validation.numeric', ['attribute' => 'article']));
    }
}
