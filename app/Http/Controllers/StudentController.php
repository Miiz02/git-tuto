<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $student;

    public function __construct()
    {
        // Use the correct model name
        $this->student = new Student();
    }

    public function index()
    {
        // Retrieve all students
        $response['student'] = $this->student->all();
        return view('student.index')->with($response);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Display create form
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'nama_pelajar' => 'required',
        'ndp' => 'required',
        'kursus' => 'required',
        'sesi_kemasukan' => 'required',
        'no_tel' => 'required',
        'alamat' => 'required',
        'emel' => 'required',
    ]);

    // Create the student
    Student::create($request->all());

    return redirect()->back()->with('success', 'Student added successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $response['student'] = $this->student->find($id);
        return view('student.edit')->with($response);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = $this->student->find($id);

        $student->update($request->all());
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = $this->student->find($id);
        $student->delete();
        return redirect()->route('student.index');
    }
}
