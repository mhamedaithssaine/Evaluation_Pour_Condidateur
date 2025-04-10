<?php

namespace App\services;

use App\Repositories\Interfaces\CourseRepositoryInterface;


class CourseServices
{
    protected $courseRepo;

    public function __construct(CourseRepositoryInterface $courseRepo)
    {
        $this->courseRepo = $courseRepo;
        
    }

    // list course 

    public function listCourses(){
        return $this->courseRepo->getAllCourses();
    }

    // Show course detaille

    public function courseDetailes ($id) {
        return $this->courseRepo->getCourseDetails($id);
    }

    public function subscribeToCourse($courseId, $user) {
        if ($user->courses()->where('course_id', $courseId)->exists()) {
            throw new \Exception("Deja inscrit a ce cours");
        }
    
        $user->courses()->attach($courseId, ['progress' => 0]);
        return ['message' => 'Inscription reussie'];
    }
}

