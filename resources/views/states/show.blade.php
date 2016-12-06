@extends('_layouts.master')

@section('body')
<br>
<div class="card">
  <div class="card-content">
    <div class="media">
      <div class="media-content">
        <p class="title is-5">State</p>
        <p class="subtitle is-6">{{ $state->id }}</p>
      </div>
    </div>

    <div class="content">
      Name: {{ $state->name }}
      <br>
      <small>{{ $state->formatted_date }}</small>
    </div>
  </div>
</div>
@endsection