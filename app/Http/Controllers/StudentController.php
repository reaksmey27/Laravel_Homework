<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of students
     */
    public function index()
    {
        // Better than all() for real apps
        $students = Student::orderBy('id', 'desc')->paginate(10);

        return view('students.list', compact('students'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store new student
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|string|max:20',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')
            ->with('success', 'Student created successfully!');
    }

    /**
     * Show edit form
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update student
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'required|string|max:20',
        ]);

        $student->update($validated);

        return redirect()->route('students.index')
            ->with('success', 'Student updated successfully!');
    }

    /**
     * Delete student
     */
    public function destroy(Student $student)
    {
        $student->destoy();

        return redirect()->route('students.index')
            ->with('success', 'Student deleted successfully!');
    }
}