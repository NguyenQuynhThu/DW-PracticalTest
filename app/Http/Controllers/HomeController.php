<?php


namespace App\Http\Controllers;


use App\Student;
use Illuminate\Http\Request;

class HomeController
{
    public function submitForm()
    {
        return view('welcome');
    }

    public function saveForm(Request $request)
    {
        $student = new Student();
        $student->name=$request->get("name");
        $student->email=$request->get("email");
        $student->phone=$request->get("phone");
        $student->feedback=$request->get("feedback");
        $student->save();

        return response()->json("Successfully!", 200);
    }
}
