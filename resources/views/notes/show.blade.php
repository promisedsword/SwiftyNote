@extends('layouts.base')

@section('content')

	<div class="container">
		<div class="row">
		<h2 class="display-3">
			{{ucfirst($note->title)}}
		</h2>


		<div class="bodyu">
            {{$note->body}}
        </div>

		</div>
	</div>

@endsection