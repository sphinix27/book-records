@extends('_layouts.master')

@section('body')

<h1 id="denounced">{{ $denounced->fullname }}</h1>
<h2 id="ci">{{ $denounced->ci }}</h2>

@endsection