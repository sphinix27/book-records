@extends('_layouts.master')

@section('body')
<br>
<div class="card column is-half is-offset-one-quarter">
  <div class="card-content">
    <div class="media">
      <div class="media-content">
        <p class="title is-5">Denounced</p>
        <p class="subtitle is-6">{{ $denouncer->id }}</p>
      </div>
    </div>

    <div class="content">
      <p id="denouncer">FirstName: {{ $denouncer->fullname }}</p>
      <p id="ci">CI: {{ $denouncer->ci }}</p>
      <br>
    </div>
  </div>
</div>

@endsection