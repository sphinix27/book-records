@extends('_layouts.master')

@section('body')
<br>
<div class="card column is-half is-offset-one-quarter">
  <div class="card-content">
    <div class="media">
      <div class="media-content">
        <p class="title is-5">Crime</p>
        <p class="subtitle is-6">{{ $crime->id }}</p>
      </div>
    </div>

    <div class="content">
      <p id="name">Name: {{ $crime->name }}</p>
      <p id="article">Article: {{ $crime->article }}</p>
      <p>Subsection: {{ $crime->subsection }}</p>
      <br>
    </div>
  </div>
</div>

@endsection