<?php

use App\Denouncer;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DenouncerTest extends TestCase
{
	/** @test */
	function can_get_fullname()
	{
	    $denouncer = factory(Denouncer::class)->make([
	    	'firstname' => 'Abel',
	    	'lastname' => 'Barrientos',
	    ]);

	    $this->assertEquals('Abel Barrientos', $denouncer->fullname);
	}
}
