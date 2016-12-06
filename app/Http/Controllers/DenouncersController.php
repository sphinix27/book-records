<?php

namespace App\Http\Controllers;

use App\Denouncer;
use Illuminate\Http\Request;

class DenouncersController extends Controller
{
    
    public function index()
    {
    	$denouncers = Denouncer::all();
        return view('denouncers.index', ['denouncers' => $denouncers]);
    }


    public function create()
    {
        return view('denouncers.create');
    }


    public function store()
    {
        $this->validate(request(), [
            'firstname' => ['required', 'min:2', 'max:30'],
            'lastname' => ['required', 'min:2', 'max:45'],
            'ci' => ['required', 'digits_between:7,9'],
        ]);
        Denouncer::create(request()->all());
        return redirect('denouncers');
    }

    public function show($id)
    {
        $denouncer = Denouncer::findOrFail($id);
        return view('denouncers.show', ['denouncer' => $denouncer]);
    }


    public function edit($id)
    {
        $denouncer = Denouncer::findOrFail($id);
        return view('denouncers.edit', ['denouncer' => $denouncer]);
    }


    public function update($id)
    {
        $this->validate(request(), [
            'firstname' => ['required', 'min:2', 'max:30'],
            'lastname' => ['required', 'min:2', 'max:45'],
            'ci' => ['required', 'digits_between:7,9'],
        ]);
        $denouncer = Denouncer::findOrFail($id);
        $denouncer->update(request()->all());
        return redirect('denouncers');
    }
}
