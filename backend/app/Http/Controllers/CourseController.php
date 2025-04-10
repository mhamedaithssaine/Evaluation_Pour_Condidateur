<?php

namespace App\Http\Controllers;

use App\services\CourseServices;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    protected $courseService;

    public function __construct(CourseServices $courseService){
        $this->courseService=$courseService;
    }

    public function index() {
        return response()->json($this->courseService->listCourses());
    }

    public function show($id) {
        return response()->json($this->courseService->courseDetailes($id));
    }

}
