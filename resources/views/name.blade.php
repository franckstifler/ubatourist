@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            @if ($username == 'verdiane')
                <p>A special hello from verdiane!!!</p>
            @endif
            <h3>Hello my friend {{ $username }}</h3>
            @foreach ($numbers as $number)
                <h3>{{ $number }}</h3>
            @endforeach
        </div>

    </div>
@endsection