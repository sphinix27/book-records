<?php

use App\Denouncer;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewDenouncersTest extends TestCase
{
	use DatabaseMigrations;

    /** @test */
    function can_view_a_denouncer()
    {
        $denouncer = factory(Denouncer::class)->create(['firstname' => 'Abel', 'lastname' => 'Barrientos', 'ci' => '5683688']);

        $this->visit('/denouncers/'.$denouncer->id)
        	 ->seeInElement('#denouncer','Abel Barrientos')
        	 ->seeInElement('#ci', '5683688');
    }

    /** @test */
    function can_view_all_denouncers()
    {
        $denouncers = factory(Denouncer::class, 3)->create();
        $this->assertEquals(3, count($denouncers));

        $this->visit('/denouncers')        	 
        	 ->seeInElement('#denouncers', $denouncers->first()->fullname);
    }
}
