@extends('layouts.app')

@section('title', 'About - Tasks for Today')

@section('content')

<div class="page-heading">
    <div>
        <p class="eyebrow">ABOUT THE PROJECT</p>
        <h1>About the System</h1>
        <p class="subtitle">
            Learn more about Tasks for Today.
        </p>
    </div>
</div>

<div class="about-card">
    <h2>Tasks for Today Management System</h2>

    <p>
        Tasks for Today is a task management web application
        developed using the Laravel framework.
    </p>

    <p>
        The system displays tasks scheduled for the current day,
        provides a complete task list, and shows user profile
        information.
    </p>

    <p>
        It uses SQLite, Laravel Eloquent models, database
        migrations, seeders, and Blade templates.
    </p>

    <div class="developer">
        <span>DEVELOPED BY</span>
        <strong>Khallid B. Barri</strong>
        <p>Web Application Developer</p>
    </div>
</div>

@endsection