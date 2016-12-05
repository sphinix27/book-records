<table>
@foreach($records as $record)
	<td>
		<tr>{{ $record->fiscode }}</tr>
	</td>
@endforeach
</table>