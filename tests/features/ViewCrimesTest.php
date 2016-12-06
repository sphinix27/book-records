<?php

use App\Crime;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewCrimesTest extends TestCase
{
   use DatabaseMigrations;

   	/** @test */
   	function can_view_a_crime()
   	{
    	$crime = factory(Crime::class)->create(['name' => 'sedicion', 'article' => '123']);

    	$this->visit('/crimes/'.$crime->id)
    		 ->seeInElement('#article', '123')
    		 ->seeInElement('#name', 'sedicion');
   	}

   	/** @test */
   	function can_view_all_crimes()
   	{
   	    $crimes = factory(Crime::class, 4)->create();
   	    $this->assertEquals(4, count($crimes));

   	    $this->visit('/crimes')
   	    	 ->seeInElement('#crimes', $crimes->last()->name);
   	}
}
