<?php

namespace App\Http\Controllers;

use App\Group;
use App\Lecture;
use App\Student;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GroupController extends Controller
{
    public function getGroup()
    {
        $groups = Group::all()->sortBy("name");

        return view('group', ['groups' => $groups]);
    }

    public function storeGroup(Request $request)
    {
        $group = new Group;
        $group->name = request('nameI');
        $group->save();

        return redirect(route('group'));
    }

    public function GetUpdateGroup($id)
    {
        $group = Group::find($id);
        return view('update-group', ['group' => $group, 'id' => $id]);
    }

    public function updateGroup(Request $request, $id)
    {
        $group = Group::find($id);
        $group->name = $request->get('nameI');
        $group->save();

        return redirect(route('group'));
    }

    public function destroyGroup($id)
    {
        $students = Student::all();
        foreach ($students as $student ) {
            if($student->group_id == $id){
                app('App\Http\Controllers\StudentController')->destroyStudent($student->id);
            }
        }
        Group::find($id)->delete();
        return redirect(route('group'));
    }
}
