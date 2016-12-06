@extends('_layouts.master')

@section('body')
<br>
	<div id="denouncers">
	<p class="control">
		<a href="/denouncers/create" class="button is-outlined">
			<span class="icon">
			  <i class="fa fa-plus-circle"></i>
			</span>
			<span>New</span>
		</a>	
	</p>
	@foreach($denouncers as $denouncer)
	<div class="box">
	  <article class="media">
	    <div class="media-content">
	      <div class="content">
	        <p>
	          <strong>Denounced: </strong> {{ $denouncer->id }}
	          <br>
	          <p>Fullname: {{ $denouncer->fullname }}</p>
	          <p>CI: {{ $denouncer->ci }}</p>
	        </p>
	      </div>
	      <nav class="level">
	        <div class="level-left">
	          <a class="level-item" href="/denouncers/{{ $denouncer->id }}" title="Show">
	            <span class="icon is-small"><i class="fa fa-eye"></i></span>
	          </a>
	          <a class="level-item" href="/denouncers/{{ $denouncer->id }}/edit" title="Edit">
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