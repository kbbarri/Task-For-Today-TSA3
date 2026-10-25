<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $yesterday = Carbon::today()->subDay()->toDateString();
        $today = Carbon::today()->toDateString();
        $tomorrow = Carbon::today()->addDay()->toDateString();

        DB::table('tasks')->insert([
            [
                'title' => 'Review class notes',
                'status' => 'completed',
                'task_date' => $yesterday,
            ],
            [
                'title' => 'Organize school files',
                'status' => 'pending',
                'task_date' => $yesterday,
            ],
            [
                'title' => 'Complete Laravel activity',
                'status' => 'pending',
                'task_date' => $today,
            ],
            [
                'title' => 'Study web development',
                'status' => 'pending',
                'task_date' => $today,
            ],
            [
                'title' => 'Review database concepts',
                'status' => 'completed',
                'task_date' => $today,
            ],
            [
                'title' => 'Prepare project documentation',
                'status' => 'pending',
                'task_date' => $today,
            ],
            [
                'title' => 'Submit school requirements',
                'status' => 'pending',
                'task_date' => $tomorrow,
            ],
            [
                'title' => 'Prepare for next class',
                'status' => 'pending',
                'task_date' => $tomorrow,
            ],
        ]);
    }
}