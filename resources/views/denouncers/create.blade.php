@extends('_layouts.master')

@section('body')

<form action="/denouncers" method="POST">
	{{ csrf_field() }}
	<div>
		<label class="label">First Name</label>
		<p class="control">
			<input class="input" type="text" placeholder="First Name" name="firstname">
		</p>
		<label class="label">Last Name</label>
		<p class="control">
			<input class="input" type="text" placeholder="Last Name" name="lastname">
		</p>
		<label class="label">CI</label>
		<p class="control">
			<input class="input" type="text" placeholder="CI" name="ci">
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
@endsection