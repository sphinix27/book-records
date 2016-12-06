<?php

namespace App\Http\Controllers;

use App\State;

use Illuminate\Http\Request;

class StatesController extends Controller
{
    
    public function index()
    {
        $states = State::all();
        return view('states.index', ['states' => $states]);
    }

    public function create()
    {
        return view('states.create');
    }


    public function store()
    {
        $this->validate(request(), [
            'name' => ['required'],
        ]);
        State::create(request()->only(['name']));
        return redirect('states');
    }

    public function show($id)
    {
     	$state = State::findOrFail($id);
     	return view('states.show', ['state' => $state]);
    }

    public function edit($id)
    {
        $state = State::findOrFail($id);
        return view('states.edit', ['state' => $state]);
    }


    public function update($id)
    {
        $this->validate(request(), [
            'name' => ['required'],
        ]);
        $state = State::findOrFail($id);
        $state->update(request()->only(['name']));
        return redirect('states');
    }
}
