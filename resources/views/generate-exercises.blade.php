@extends('templates.main-view')

@section('content')

    <div class="card">
        <h1 class="card-header">Generate Exercises</h1>
        <div class="card-body">
            <p class="text-primary">To generate your exercises, please select the topics you want to practice:</p>
            @include('forms.exercises-form')
        </div>
    </div>

@endsection