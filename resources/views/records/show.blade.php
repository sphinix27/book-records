<h1>{{ $record->fiscode }}</h1>
<p>{{ $record->denouncer()->first()->ci }}</p>
<p>{{ $record->denounced()->first()->ci }}</p>
<p>{{ $record->crime()->first()->article }}</p>
<p>{{ $record->state()->first()->name }}</p>