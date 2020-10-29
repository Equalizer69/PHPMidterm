@extends("home")


@section("content")
<table border="1">
	

	<tr>
		<td>id</td>
		<td>title</td>
		<td>is published</td>
		<td></td>
	</tr>


	@foreach($articles as $article)


	<tr>
		<td>{{ $article->id }}</td>
		<td>{{ $article->title }}</td>
		<td>{{ $article->is_published }}</td>
		<td>
			<a href="/edit/{{ $article->id }}">რედაქტირება</a>
		</td>
	</tr>

	@endforeach

</table>
@endsection