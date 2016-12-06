<?php

use App\User;
use App\State;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditStateTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function can_edit_a_state()
    {
        $user = factory(User::class)->create();

        $state = factory(State::class)->create();

        $this->actingAs($user)
        	 ->visit('/states/'.$state->id.'/edit')
        	 ->see($state->name)
        	 ->type('ACUSACION', 'name')
        	 ->press('Save');

        $this->seeInDatabase('states', [
        	'name' => 'ACUSACION',
        ]);
    }

    /** @test */
    function validate_when_editing_state()
    {
        $user = factory(User::class)->create();

        $state = factory(State::class)->create();

        $this->actingAs($user)
            ->visit('/states/'.$state->id.'/edit')
        	->see($state->name)
        	->type('', 'name')
            ->press('Save');

        $this->see(trans('validation.required', ['attribute' => 'name']));
    }
}
