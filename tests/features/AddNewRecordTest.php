<?php

use App\User;
use App\Crime;
use App\Denouncer;
use App\Denounced;
use App\State;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AddNewRecordTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function can_add_new_record()
    {
        $user = factory(User::class)->create();
        factory(Crime::class)->create();
        factory(Denouncer::class)->create();
        factory(Denounced::class)->create();
        factory(State::class)->create();

        $this->actingAs($user)
        	 ->visit('/records/create')
        	 ->type('FIS 1600023', 'fiscode')
        	 ->select('1', 'denouncer_id')
        	 ->select('1', 'denounced_id')
        	 ->select('1', 'crime_id')
        	 ->select('1', 'state_id')
        	 ->type('None', 'observation')
        	 ->press('Save');

        $this->seeInDatabase('records', [
        	'fiscode' => 'FIS 1600023',
        	'denouncer_id' => 1,
        	'denounced_id' => 1,
        	'crime_id' => 1,
        	'state_id' => 1,
        	'observation' => 'None'
        ]);
    }

    /** @test */
    function validate_when_adding_a_new_record()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->visit('/records/create')
            ->press('Save');

        $this->see(trans('validation.required', ['attribute' => 'fiscode']))
        	 ->see(trans('validation.required', ['attribute' => 'denouncer id']))
        	 ->see(trans('validation.required', ['attribute' => 'denounced id']))
        	 ->see(trans('validation.required', ['attribute' => 'crime id']))
        	 ->see(trans('validation.required', ['attribute' => 'state id']));
    }

}
