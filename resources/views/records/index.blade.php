@extends('_layouts.master')

@section('body')
<br>
	<p class="control">
		<a href="/records/create" class="button is-outlined">
			<span class="icon">
			  <i class="fa fa-plus-circle"></i>
			</span>
			<span>New</span>
		</a>	
	</p>
<table class="table">
  <thead>
    <tr>
      <th>N°</th>
      <th>Fis</th>
      <th>Denouncer</th>
      <th>Denounced</th>
      <th>Crime</th>
      <th>State</th>
      <th>Observation</th>
      <th>Links</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($records as $record)
    <tr>
      <td>{{ $record->id }}</td>
      <td>{{ $record->fiscode }}</td>
      <td>{{ $record->denouncer()->first()->fullname }}</td>
      <td>{{ $record->denounced()->first()->fullname }}</td>
      <td>{{ $record->crime()->first()->name }}</td>
      <td>{{ $record->state()->first()->name }}</td>
      <td>{{ $record->observation }}</td>
      <td class="is-icon">
        <a href="/records/{{ $record->id }}">
          <i class="fa fa-eye"></i>
        </a>
        <a href="/records/{{ $record->id }}/edit">
          <i class="fa fa-edit"></i>
        </a>
      </td>
    </tr>    
    @endforeach
  </tbody>
</table>
@endsection