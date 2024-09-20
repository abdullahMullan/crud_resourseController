<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=student::all();
        // return $data;
    return view('student.index',['data'=>$data]);
    // return view('student.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('student.creat_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        student::create($request->all());
        return redirect('student')->with('success','your data added');
                                //  or
        // return redirect()->route('student.index')->with('success','your data added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $student)
    {
        $student=student::find($student);
        return view('student.show',['data'=>$student]);
        // return view('student.show',['data'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        return view('student.edit',['data'=>$student]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        $student->update($request->all());
        return redirect('student')->with('success','student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
    $student->delete();
    return redirect('student')->with('success','student deleted successfully');

    }
}
