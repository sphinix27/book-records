<?php

use App\State;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewStatesListingTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function can_view_a_state()
    {
        $state = factory(State::class)->create(['name' => 'RECHAZO']);

        $this->visit('/states/'.$state->id)
        	 ->seeInElement('#state','RECHAZO');
    }

    /** @test */
    function can_view_all_states()
    {
        $states = factory(State::class, 3)->create();
        $this->assertEquals(3, count($states));

        $this->visit('/states')        	 
        	 ->seeInElement('#states', $states->first()->name);
    }
}
