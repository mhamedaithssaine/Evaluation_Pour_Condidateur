<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'id' => 1,
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('Mhamed@1'),
        ]);

        $courses = Course::factory(3)->create();

        foreach ($courses as $course) {
         
            $course->users()->attach($user->id, [
                'progress' => rand(0, 100),
            ]);
        }
    }
}
