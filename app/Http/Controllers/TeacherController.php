<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::with('subjects')->get(); // Fetch teachers
        return view('teachers.index', compact('teachers')); // Pass 'teachers'
    }

        public function show($id)
    {
        $teacher = Teacher::with('subjects')->findOrFail($id);
        return view('teachers.show', compact('teacher'));
    }
}

