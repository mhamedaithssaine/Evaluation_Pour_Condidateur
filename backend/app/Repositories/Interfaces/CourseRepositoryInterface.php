<?php

namespace App\Repositories\Interfaces;

interface CourseRepositoryInterface
{
    public function getAllCourses();
    public function getCourseDetails($id);
}
