@extends('_layouts.master')

@section('body')

<h1 id="denouncer">{{ $denouncer->fullname }}</h1>
<h2 id="ci">{{ $denouncer->ci }}</h2>

@endsection