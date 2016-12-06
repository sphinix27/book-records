@extends('_layouts.master')

@section('body')

<form action="/states" method="POST">
	{{ csrf_field() }}
	<div>
		<label class="label">Name</label>
		<p class="control">
			<input class="input" type="text" placeholder="Name" name="name">
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
		  <button class="button is-link">Cancel</button>
		</p>
	</div>
</form>
@endsection