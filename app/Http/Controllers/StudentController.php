<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    // Student Index Table
    public function index()
    {
        $student = Student::all();
        return view('student.index', compact('student'));
    }

    // Create Student Data
    public function create()
    {
        return view('student.create');
    }

    // Store Data
    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone_no = $request->input('phone_no');
        $student->address = $request->input('address');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/image/', $filename);
            $student->image = $filename;
        }
        $student->save();
        return redirect()->back()->with('status', 'Student Data Added Successfully!');
    }

    // Edit Data
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    // Update Student Data
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone_no = $request->input('phone_no');
        $student->address = $request->input('address');
        if($request->hasFile('image'))
        {
            $destination = 'uploads/image/'. $student->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/image/', $filename);
            $student->image = $filename;
        }
        $student->update();
        return redirect()->back()->with('status', 'Student Data Updated Successfully!');
    }

    // Delete Student Data
    public function destroy($id)
    {
        $student = Student::find($id);
        $destination = 'uploads/image/'. $student->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $student->delete();
        return redirect()->back()->with('status', 'Student Data Deleted Successfully!');
    }
}
