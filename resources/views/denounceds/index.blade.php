@extends('_layouts.master')

@section('body')
<br>
	<div id="denounceds">
	<p class="control">
		<a href="/denounceds/create" class="button is-outlined">
			<span class="icon">
			  <i class="fa fa-plus-circle"></i>
			</span>
			<span>New</span>
		</a>	
	</p>
	@foreach($denounceds as $denounced)
	<div class="box">
	  <article class="media">
	    <div class="media-content">
	      <div class="content">
	        <p>
	          <strong>Denounced: </strong> {{ $denounced->id }}
	          <br>
	          <p>Fullname: {{ $denounced->fullname }}</p>
	          <p>CI: {{ $denounced->ci }}</p>
	        </p>
	      </div>
	      <nav class="level">
	        <div class="level-left">
	          <a class="level-item" href="/denounceds/{{ $denounced->id }}" title="Show">
	            <span class="icon is-small"><i class="fa fa-eye"></i></span>
	          </a>
	          <a class="level-item" href="/denounceds/{{ $denounced->id }}/edit" title="Edit">
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