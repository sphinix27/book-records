<?php

namespace App\Http\Controllers;

use App\Record;
use App\Denounced;
use App\Denouncer;
use App\Crime;
use App\State;
use Illuminate\Http\Request;

class RecordsController extends Controller
{

	public function index()
	{
		$records = Record::all();
	    return view('records.index', ['records' => $records]);
	}


	public function create()
	{
		$denouncers = Denouncer::all();
		$denounceds = Denounced::all();
		$crimes = Crime::all();
		$states = State::all();
	    return view('records.create', [
	    	'denouncers' => $denouncers,
	    	'denounceds' => $denounceds,
	    	'crimes' => $crimes,
	    	'states' => $states,
	    ]);
	}


	public function store()
	{
		$this->validate(request(), [
			'fiscode' => ['required'],
			'denouncer_id' => ['required'],
			'denounced_id' => ['required'],
			'crime_id' => ['required'],
			'state_id' => ['required'],
			'observation' => ['present']
		]);
	    Record::create(request()->all());
	    return redirect('records');
	}

    public function show($id)
    {
    	$record = Record::findOrFail($id);
    	return view('records.show', ['record' => $record]);
    }
}
