<?php

namespace App\Http\Controllers;

use App\Student;
use App\Grade;
use App\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function getStudent($id)
    {
        $students = Student::all()->where('group_id', $id)->sortBy("surname");
        return view('student', ['students' => $students, 'group_id'=>$id]);
    }

    public function storeStudent($id)
    {
        $student = new student;
        $student->name = request('nameI');
        $student->surname = request('surnameI');
        $student->email = request('emailI');
        $student->phone = request('phoneI');
        $student->group_id = $id;
        $student->save();

        return back();
    }

    public function GetUpdateStudent($id)
    {
        $student = Student::find($id);
        $groups = Group::all();
        return view('update-student', ['groups' => $groups,'student'=>$student, 'id' => $id]);
    }

    public function updateStudent(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->get('nameI');
        $student->surname = $request->get('surnameI');
        $student->email = $request->get('emailI');
        $student->phone = $request->get('phoneI');
        if($request->get('groupIdI') != null){
            $student->group_id = $request->get('groupIdI');
        }
        $student->save();
        return redirect(route('student', $student->group_id));
    }

    public function destroyStudent($id)
    {
        $grades = Grade::all();
        foreach ($grades as $grade ) {
            if($grade->student_id == $id){
                Grade::find($grade->id)->delete();
            }
        }
        Student::find($id)->delete();
        return back();
    }
}
