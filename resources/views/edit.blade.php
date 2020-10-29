@extends("home")



@section("content")


<form method="post">

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	<div>
		<input type="text" name="title" value="{{ $article->title }}">
	</div>
	<div>
		<textarea name="body">{{ $article->body }}</textarea>
	</div>
	<div>
		<select name="is_published">
			@if ($article->is_published)
				<option value="1" selected>გამოქვეყნება</option>
				<option value="0">დამალვა</option>
			@else
				<option value="0" selected>დამალვა</option>
				<option value="1">გამოქვეყნება</option>
			@endif

		</select>
	</div>

	@csrf

	<div>
		<button name="submit">
			განახლება
		</button>
	</div>

</form>

@endsection