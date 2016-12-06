@extends('_layouts.master')

@section('body')

<form action="/crimes" method="POST">
	{{ csrf_field() }}
	<div>
		<label class="label">Article</label>
		<p class="control">
			<input class="input" type="text" placeholder="Article" name="article" value="{{ old('article') }}">
		</p>
		<label class="label">Subsection</label>
		<p class="control">
			<input class="input" type="text" placeholder="Subsection" name="subsection" value="{{ old('subsection') }}">
		</p>
		<label class="label">Name</label>
		<p class="control">
			<input class="input" type="text" placeholder="Name" name="name" value="{{ old('name') }}">
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