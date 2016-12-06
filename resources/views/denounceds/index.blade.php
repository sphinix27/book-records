@extends('_layouts.master')

@section('body')

<ul id="denounceds">
	@foreach($denounceds as $denounced)
	<li>
		<h1>{{ $denounced->fullname }}</h1>
		<p>{{ $denounced->ci }}</p>
	</li>
	@endforeach
</ul>

@endsection