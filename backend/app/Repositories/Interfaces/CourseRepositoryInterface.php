<?php

namespace App\Repositories\Interfaces;

interface CourseRepositoryInterface
{
    public function getAllCourses();
    public function getCourseWithModules($id);
}
