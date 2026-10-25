<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Carbon;

class TaskController extends Controller
{
    // Welcome page - today's tasks only
    public function today()
    {
        $today = Carbon::today()->toDateString();

        $tasks = Task::whereDate('task_date', $today)
            ->orderBy('id')
            ->get();

        return view('welcome', compact('tasks', 'today'));
    }

    // Task List page - all tasks
    public function index()
    {
        $tasks = Task::orderBy('task_date', 'asc')
            ->orderBy('id')
            ->get();

        return view('tasks', compact('tasks'));
    }
}