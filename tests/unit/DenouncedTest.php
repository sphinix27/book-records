<?php
use App\Denounced;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DenouncedTest extends TestCase
{
    /** @test */
	function can_get_fullname()
	{
	    $denounced = factory(Denounced::class)->make([
	    	'firstname' => 'Abel',
	    	'lastname' => 'Barrientos',
	    ]);

	    $this->assertEquals('Abel Barrientos', $denounced->fullname);
	}
}
