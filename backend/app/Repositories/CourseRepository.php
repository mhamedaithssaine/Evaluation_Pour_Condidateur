<?php

namespace App\Repositories;

use App\Models\Course;
use App\Repositories\Interfaces\CourseRepositoryInterface;

class CourseRepository implements CourseRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        
    }


    public function getAllCourses(){
        $course = Course::get();
        return $course;

    }


    public function getCourseWithModules($id){
      
      $courseDetaille = Course::findOrFail($id);
      return $courseDetaille;
    }
}
