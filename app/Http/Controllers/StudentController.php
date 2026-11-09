<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        return view('students');
    }

    public function section(string $section): View
    {
        $sections = [
            'courses' => 'My Courses',
            'schedule' => 'Schedule',
            'grades' => 'Grades',
            'messages' => 'Messages',
        ];

        abort_unless(isset($sections[$section]), 404);

        return view('student-section', [
            'activePage' => $section,
            'pageTitle' => $sections[$section],
        ]);
    }
}
