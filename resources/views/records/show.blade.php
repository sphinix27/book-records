@extends('_layouts.master')

@section('body')
<br>
<div class="card column is-half is-offset-one-quarter">
  <div class="card-content">
    <div class="media">
      <div class="media-content">
        <p class="title is-5">Record</p>
        <p class="subtitle is-6">{{ $record->id }}</p>
      </div>
    </div>

    <div class="content">
      <h1>{{ $record->fiscode }}</h1>
	  <p>{{ $record->denouncer()->first()->ci }}</p>
	  <p>{{ $record->denounced()->first()->ci }}</p>
	  <p>{{ $record->crime()->first()->article }}</p>
	  <p>{{ $record->state()->first()->name }}</p>
      <br>
    </div>
  </div>
</div>

@endsection