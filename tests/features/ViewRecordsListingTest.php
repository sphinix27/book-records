<?php

use App\Crime;
use App\Denouncer;
use App\Denounced;
use App\State;
use App\Record;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewRecordsListingTest extends TestCase
{
	use DatabaseMigrations;

    /** @test */
    function user_can_view_a_record_listing()
    {
        // Arrange
    	// Create a crime
    	$crime = Crime::create([
    		'article' => '123',
    		'subsection' => null,
    		'name' => 'sedicion'
    	]);
    	// Create a denouncer
    	$denouncer = Denouncer::create([
    		'firstname' => 'Abel',
    		'lastname' => 'Barrientos',
    		'ci' => '5683688'
    	]);
    	// Create a denounced
    	$denounced = Denounced::create([
    		'firstname' => 'Miguel',
    		'lastname' => 'Taborga',
    		'ci' => '1234567'
    	]);
    	// Create a state
    	$state = State::create([
    		'name' => 'imputacion'
    	]);
    	// Create a record
    	$record = Record::create([
    		'fiscode' => 'FIS 1600023',
    		'denouncer_id' => $denouncer->id,
    		'denounced_id' => $denounced->id,
    		'crime_id' => $crime->id,
    		'state_id' => $state->id,
    		'observation' => null
    	]);

        // Act
    	// View the record listing
    	$this->visit('/records/'.$record->id);

        // Assert
        // See the record details
        $this->see('FIS 1600023');
        $this->see($record->denouncer()->first()->ci);
        $this->see($record->denounced()->first()->ci);
        $this->see($record->crime()->first()->article);
        $this->see($record->state()->first()->name);
    }

    /** @test */
    function user_can_view_all_records_listing()
    {
		$records = factory(Record::class, 2)->create();

		$recordOneFisCode = $records->first()->fiscode;
		$recordTwoFisCode = $records->last()->fiscode;

    	$this->assertEquals(2, count($records));

    	$this->visit('/records')
    		 ->see($recordOneFisCode)
    		 ->see($recordTwoFisCode);
    }
}
