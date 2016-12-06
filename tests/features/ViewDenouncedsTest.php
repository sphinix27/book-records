<?php
use App\Denounced;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewDenouncedsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function can_view_a_denounced()
    {
        $denounced = factory(Denounced::class)->create(['firstname' => 'Abel', 'lastname' => 'Barrientos', 'ci' => '5683688']);

        $this->visit('/denounceds/'.$denounced->id)
        	 ->seeInElement('#denounced','Abel Barrientos')
        	 ->seeInElement('#ci', '5683688');
    }

    /** @test */
    function can_view_all_denounceds()
    {
        $denounceds = factory(Denounced::class, 3)->create();
        $this->assertEquals(3, count($denounceds));

        $this->visit('/denounceds')        	 
        	 ->seeInElement('#denounceds', $denounceds->first()->fullname);
    }
}
