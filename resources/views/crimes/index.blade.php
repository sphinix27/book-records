@extends('_layouts.master')

@section('body')

	<div id="crimes">
	@foreach($crimes as $crime)
	<div class="box">
	  <article class="media">
	    <div class="media-content">
	      <div class="content">
	        <p>
	          <strong>Artícle {{ $crime->article }}</strong> <small>{{ $crime->subsection }}</small>
	          <br>
	          {{ $crime->name }}
	        </p>
	      </div>
	      <nav class="level">
	        <div class="level-left">
	          <a class="level-item" href="/crimes/{{ $crime->id }}/edit" title="Edit">
	            <span class="icon is-small"><i class="fa fa-edit"></i></span>
	          </a>
	        </div>
	      </nav>	      
	    </div>
	  </article>
	</div>
	@endforeach
	</div>

@endsection