@extends('_layouts.master')

@section('body')

<h1 id="name">{{ $crime->name }}</h1>
<h2 id="article">{{ $crime->article }}</h2>
<h3 id="subsection">{{ $crime->subsection }}</h3>

@endsection