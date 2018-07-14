<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class WelcomeController extends Controller
{
    public function clientCourses()
    {
        $courses = Course::latest()->publish()->paginate(10);
        return view('welcome', compact('courses'));
    }
    public function clientindex()
    {
        $courses = Course::latest()->publish()->get();
        return view('client.courses.index', compact('courses'));
    }

    public function show($course_slug)
    {
        $course= Course::where('slug', $course_slug)->firstOrFail();
        return view('client.courses.show');
    }
}
