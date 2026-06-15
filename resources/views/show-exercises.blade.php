@extends('templates.main-view')

@section('content')
    <div class="card">
        <h1 class="card-header">Exercises</h1>
    </div>
    <br>
    <div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3 w-50">
        All the answers are available below the exercises! Thank you for using us!
    </div>
    <br>

    <div class="row">
        @foreach ($exercises as $exercise )
            <p class="ml-5">{{ $exercise['number'] }} ) {{ $exercise['exercise'] }}</p>
        @endforeach
    </div>
    <br>
    <div class="card">
        <h1 class="card-header">Answers</h1>
    </div>
    <br>
    @foreach ($exercises as $exercise)
        <p class="ml-5">{{ $exercise['number'] }} ) {{ $exercise['sollution'] }}</p>
    @endforeach
    <hr>

    <a href="{{ route('generate-exercises') }}" class="text-center" style="width: 100%; display: flex; justify-content: center;">
        <button type="button" class="btn btn-link">Generate new Exercises!</button>
    </a>
@endsection