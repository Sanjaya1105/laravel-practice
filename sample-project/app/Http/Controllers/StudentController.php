<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        return view('student.index');
    }

    public function store(Request $request)
    {
        
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = bcrypt($request->password);
        $student->save();

        return "sucess";
    }
}
