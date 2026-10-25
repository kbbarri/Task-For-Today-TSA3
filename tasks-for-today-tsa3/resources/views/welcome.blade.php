@extends('layouts.app')

@section('title', 'Welcome - Tasks for Today')

@section('content')

<div class="page-heading">
    <div>
        <p class="eyebrow">TASK MANAGEMENT</p>
        <h1>Today's Tasks</h1>
        <p class="subtitle">
            {{ \Carbon\Carbon::parse($today)->format('F d, Y') }}
        </p>
    </div>

    <div class="task-count">
        <strong>{{ $tasks->count() }}</strong>
        <span>Tasks Today</span>
    </div>
</div>

@if ($tasks->isEmpty())
    <div class="empty-state">
        <h2>No Tasks Today</h2>
        <p>You have no tasks scheduled for today.</p>
    </div>
@else
    <div class="task-grid">
        @foreach ($tasks as $task)
            <div class="task-card">
                <div class="task-card-top">
                    <span class="task-id">
                        Task #{{ $task->id }}
                    </span>

                    <span class="status {{ $task->status }}">
                        {{ ucfirst($task->status) }}
                    </span>
                </div>

                <h2>{{ $task->title }}</h2>

                <p class="date">
                    {{ $task->task_date->format('F d, Y') }}
                </p>
            </div>
        @endforeach
    </div>
@endif

@endsection