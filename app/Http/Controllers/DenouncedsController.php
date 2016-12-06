<?php

namespace App\Http\Controllers;

use App\Denounced;
use Illuminate\Http\Request;

class DenouncedsController extends Controller
{
    public function index()
    {
    	$denounceds = Denounced::all();
        return view('denounceds.index', ['denounceds' => $denounceds]);
    }


    public function create()
    {
        return view('denounceds.create');
    }


    public function store()
    {
        $this->validate(request(), [
            'firstname' => ['required'],
            'lastname' => ['required'],
            'ci' => ['required'],
        ]);
        Denounced::create(request()->all());
        return redirect('denounceds');
    }

    public function show($id)
    {
        $denounced = Denounced::findOrFail($id);
        return view('denounceds.show', ['denounced' => $denounced]);
    }


    public function edit($id)
    {
        $denounced = Denounced::findOrFail($id);
        return view('denounceds.edit', ['denounced' => $denounced]);
    }


    public function update($id)
    {
        $this->validate(request(), [
            'firstname' => ['required'],
            'lastname' => ['required'],
            'ci' => ['required'],
        ]);
        $denounced = Denounced::findOrFail($id);
        $denounced->update(request()->all());
        return redirect('denounceds');
    }
}
