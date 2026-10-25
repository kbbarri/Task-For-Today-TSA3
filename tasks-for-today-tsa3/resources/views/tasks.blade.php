@extends('layouts.app')

@section('title', 'Task List - Tasks for Today')

@section('content')

<div class="page-heading">
    <div>
        <p class="eyebrow">TASK MANAGEMENT</p>
        <h1>All Tasks</h1>
        <p class="subtitle">
            View all scheduled tasks.
        </p>
    </div>

    <div class="task-count">
        <strong>{{ $tasks->count() }}</strong>
        <span>Total Tasks</span>
    </div>
</div>

@if ($tasks->isEmpty())
    <div class="empty-state">
        <h2>No Tasks Found</h2>
        <p>There are no tasks available.</p>
    </div>
@else
    <div class="table-wrapper">
        <table class="task-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>

                        <td class="task-title">
                            {{ $task->title }}
                        </td>

                        <td>
                            <span class="status {{ $task->status }}">
                                {{ ucfirst($task->status) }}
                            </span>
                        </td>

                        <td>
                            {{ $task->task_date->format('M d, Y') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

@endsection