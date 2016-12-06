<ul id="denouncers">
	@foreach($denouncers as $denouncer)
	<li>
		<h1>{{ $denouncer->fullname }}</h1>
		<p>{{ $denouncer->ci }}</p>
	</li>
	@endforeach
</ul>