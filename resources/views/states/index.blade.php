@extends('_layouts.master')

@section('body')
<br>	
	<p class="control">
		<a href="/states/create" class="button is-outlined">
			<span class="icon">
			  <i class="fa fa-plus-circle"></i>
			</span>
			<span>New</span>
		</a>	
	</p>
	@foreach($states as $state)
	<div class="card is-fullwidth" id="states">
	  <header class="card-header">
	    <p class="card-header-title">
	      State: {{ $state->id }}
	    </p>
	    <a class="card-header-icon">
	      <i class="fa fa-angle-down"></i>
	    </a>
	  </header>
	  <div class="card-content">
	    <div class="content">
	      {{ $state->name }}
	      <br>
	      <small>{{ $state->formatted_date }}</small>
	    </div>
	  </div>
	  <footer class="card-footer">
	    <a class="card-footer-item" href="/states/{{ $state->id }}">Show</a>
	    <a class="card-footer-item" href="/states/{{ $state->id }}/edit">Edit</a>
	  </footer>
	</div>
	<br>
	@endforeach
@endsection