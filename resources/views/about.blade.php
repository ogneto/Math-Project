@extends('templates.main-view')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h1 class="h3 mb-0">About the Project</h1>
        </div>
        <div class="card-body">
            <p class="lead">Welcome to the Math Exercises Generator!</p>
            <p>
                I know this project is very simple, but it was made to keep my Laravel practices up to date and to keep practicing web development concepts.
            </p>
            <p>
                It helps me practice key concepts like routing, controller logic, form validation, and Blade templates.
            </p>
            <hr>
            <a href="{{ route('generate-exercises') }}" class="btn btn-outline-primary">
                Go to Exercises Generator
            </a>
        </div>
    </div>
@endsection
