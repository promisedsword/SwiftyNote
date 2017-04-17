@extends('layouts.base')
@section('content')

<div class="container">
<h1>Create Note</h1>


<form action ="{{route('notes.store')}}" method="POST">
{{csrf_field()}}
	<div class="form-group">
		<label for="title">Title</label>
		<input class = "form-control" type = "text" name = "title">
	</div>

	<div class="form-group">
		<label for="body">Body</label>
		<textarea class = "form-control" type = "text" name = "body"></textarea>
	</div>

	<input type="hidden" name="notebook_id" value="{{$id}}">

	<input class = "btn btn-primary" type="submit" value = "Done"></input>
	
</form>	
</div>

@endsection