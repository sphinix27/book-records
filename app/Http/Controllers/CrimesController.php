<?php

namespace App\Http\Controllers;

use App\Crime;
use Illuminate\Http\Request;

class CrimesController extends Controller
{

	public function index()
	{
	    $crimes = Crime::all();
	    return view('crimes.index', ['crimes' => $crimes]);
	}

    public function create()
    {
        return view('crimes.create');
    }


    public function store()
    {
        $this->validate(request(), [
            'article' => ['required', 'numeric'],
            'subsection' => ['present'],
            'name' => ['required'],
        ]);
        Crime::create(request()->all());
        return redirect('crimes');
    }

    public function show($id)
    {
        $crime = Crime::findOrFail($id);
        return view('crimes.show', ['crime' => $crime]);
    }

    public function edit($id)
    {
        $crime = Crime::findOrFail($id);
        return view('crimes.edit', ['crime' => $crime]);
    }


    public function update($id)
    {
        $this->validate(request(), [
            'article' => ['required', 'numeric'],
            'subsection' => ['present'],
            'name' => ['required'],
        ]);
        $crime = Crime::findOrFail($id);
        $crime->update(request()->only(['article', 'subsection', 'name']));
        return redirect('crimes');
    }
}
