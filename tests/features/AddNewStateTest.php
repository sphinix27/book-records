<?php

use App\User;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AddNewStateTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function can_add_new_state()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
        	 ->visit('/states/create')
        	 ->type('RECHAZO', 'name')
        	 ->press('Save');

        $this->seeInDatabase('states', [
        	'name' => 'RECHAZO',
        ]);
    }

    /** @test */
    function validate_when_adding_a_new_state()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->visit('/states/create')
            ->press('Save');

        $this->see(trans('validation.required', ['attribute' => 'name']));
    }
}
