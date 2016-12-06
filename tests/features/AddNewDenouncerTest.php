<?php

use App\User;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AddNewDenouncerTest extends TestCase
{
	use DatabaseMigrations;

    /** @test */
    function can_add_new_denouncer()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
        	 ->visit('/denouncers/create')
        	 ->type('Abel', 'firstname')
        	 ->type('Barrientos', 'lastname')
        	 ->type('5683688', 'ci')
        	 ->press('Save');

        $this->seeInDatabase('denouncers', [
        	'firstname' => 'Abel',
        	'lastname' => 'Barrientos',
        	'ci' => '5683688'
        ]);
    }

    /** @test */
    function validate_when_adding_a_new_denouncer()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->visit('/denouncers/create')
            ->press('Save');

        $this->see(trans('validation.required', ['attribute' => 'firstname', 'attribute' => 'lastname', 'attribute' => 'ci']));
    }
}
