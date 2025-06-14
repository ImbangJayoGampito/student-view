<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'id');
        $order = $request->get('order', 'asc');

        $subjects = \App\Models\Subject::withCount('students')
            ->orderBy($sort, $order)
            ->get();
        return view('subjects.index', compact('subjects', 'sort', 'order'));
    }
    public function show($id)
    {
        $subject = \App\Models\Subject::findOrFail($id);
        $students = $subject->students()->with('major')->get();
        $majors = $subject->students->pluck('major')->unique();

        return view('subjects.show', compact('subject', 'students', 'majors'));
    }
}
