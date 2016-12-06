<?php

use App\State;
use Carbon\Carbon;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StateTest extends TestCase
{
    /** @test */
    function can_get_formatted_date()
    {
        $state = factory(State::class)->make([
        	'created_at' => Carbon::parse('2016-12-06 11:26:00'),
        ]);

        $date = $state->formatted_date;

        $this->assertEquals('11:26 am - 6 Dec 2016', $date);
    }
}
