<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'students_count');
        $order = $request->get('order', 'desc');

        $majors = \App\Models\Major::withCount('students')
            ->orderBy($sort, $order)
            ->get();

        return view('majors.index', compact('majors', 'sort', 'order'));
    }
    function show($id)
    {
        $major = \App\Models\Major::findOrFail($id);
        $students = $major->students()->with('subjects')->get();
        return view('majors.show', compact('major', 'students'));
    }
}
