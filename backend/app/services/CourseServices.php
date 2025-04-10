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
}

