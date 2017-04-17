@extends('layouts.base')



@section('content')
        <div class="jumbotron">
            <h5>Welcome back, {{ ucfirst(Auth::user()->name) }}</h5>
            <p>Jot your note today</p>
            <p>
                <a class="btn btn-lg btn-primary" href="{{route('notebooks.index')}}" role="button">{{ ucfirst(Auth::user()->name) }}'s NoteBooks</a>
            </p>
        </div>
    </div>
    <!-- /container -->

@endsection