<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        Task::insert([
            [
                'title' => 'Finish TSA3',
                'status' => 'pending',
                'task_date' => now()->toDateString(),
            ],
            [
                'title' => 'Review Laravel',
                'status' => 'completed',
                'task_date' => now()->toDateString(),
            ],
            [
                'title' => 'Buy groceries',
                'status' => 'pending',
                'task_date' => now()->addDay()->toDateString(),
            ],
            [
                'title' => 'Exercise',
                'status' => 'pending',
                'task_date' => now()->addDay()->toDateString(),
            ],
            [
                'title' => 'Study PHP',
                'status' => 'completed',
                'task_date' => now()->subDay()->toDateString(),
            ],
            [
                'title' => 'Project Meeting',
                'status' => 'pending',
                'task_date' => now()->subDays(2)->toDateString(),
            ],
            [
                'title' => 'Database Review',
                'status' => 'completed',
                'task_date' => now()->addDays(3)->toDateString(),
            ],
            [
                'title' => 'Submit Assignment',
                'status' => 'pending',
                'task_date' => now()->addDays(5)->toDateString(),
            ]
        ]);
    }
}