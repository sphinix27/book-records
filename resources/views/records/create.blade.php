@extends('_layouts.master')

@section('body')
<br>
<div class="box">
<form action="/records" method="POST">
	{{ csrf_field() }}
	<div>
		<label class="label">Fis Code</label>
		<p class="control">
			<input class="input" type="text" placeholder="Fis Code" name="fiscode" value="{{ old('fiscode') }}">
		</p>
		<label class="label">Denouncer</label>
		<p class="control">
		  <span class="select">
		    <select name="denouncer_id">
		    	<option>Select a Denouncer</option>
		      @foreach($denouncers as $denouncer)
		      	<option value="{{ $denouncer->id }}">{{ $denouncer->fullname }}</option>
		      @endforeach
		    </select>
		  </span>
		</p>
		<label class="label">Denounced</label>
		<p class="control">
		  <span class="select">
		    <select name="denounced_id">
		      <option>Select a Denounced</option>
		      @foreach($denounceds as $denounced)
		      	<option value="{{ $denounced->id }}">{{ $denounced->fullname }}</option>
		      @endforeach
		    </select>
		  </span>
		</p>
		<label class="label">Crime</label>
		<p class="control">
		  <span class="select">
		    <select name="crime_id">
		      <option>Select a Crime</option>
		      @foreach($crimes as $crime)
		      	<option value="{{ $crime->id }}">{{ $crime->name }}</option>
		      @endforeach
		    </select>
		  </span>
		</p>
		<label class="label">State</label>
		<p class="control">
		  <span class="select">
		    <select name="state_id">
		      <option>Select a State</option>
		      @foreach($states as $state)
		      	<option value="{{ $state->id }}">{{ $state->name }}</option>
		      @endforeach
		    </select>
		  </span>
		</p>
		<label class="label">Observation</label>
		<p class="control">
			<input class="input" type="text" placeholder="Observation" name="observation" value="{{ old('observation') }}">
		</p>

		@if (count($errors) > 0)
        <div class="notification is-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
        @endif

		<p class="control">
		  <button class="button is-primary">Save</button>
		  <a class="button is-link" href="{{ url()->previous() }}">Cancel</a>
		</p>
	</div>
</form>
</div>
@endsection