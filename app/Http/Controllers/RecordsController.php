<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;

class RecordsController extends Controller
{

	public function index()
	{
		$records = Record::all();
	    return view('records.index', ['records' => $records]);
	}

    public function show($id)
    {
    	$record = Record::findOrFail($id);
    	return view('records.show', ['record' => $record]);
    }
}
