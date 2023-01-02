<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    //


    public function dashboard(){

        /*get the user gender*/
        $user_details = Teacher::select('gender')->where('user_id', Auth::user()->id)->get();
        foreach ($user_details as $userdetail){
            $gender = $userdetail->gender;
        }
        if ($gender == 'MALE'){
            $avatar_path = 'images/avatar/male-avatar.png';
        }elseif  ($gender == 'FEMALE') {
            $avatar_path = 'images/avatar/female-avatar.png';
        }


        /*get current term*/
       $settings = DB::table('settings')->latest('id')->first();

       /*get teacher's class*/
        $teacher_class = Teacher::where('user_id', Auth::user()->id)->select('class')->first();

        $get_teacher_class = $teacher_class->class;

        /*get number of students*/
        $students_count = Student::all()->where('class', $teacher_class->class)->count();


        return view('teacher.dashboard', ([
            'avatar_path' => $avatar_path,
            'settings' => $settings,
            'students_count' => $students_count,
        ]));

    }


    public function studentList(){
        /*get the user gender*/
        $user_details = Teacher::select('gender')->where('user_id', Auth::user()->id)->get();

        foreach ($user_details as $userdetail){
            $gender = $userdetail->gender;
        }
        if ($gender == 'MALE'){
            $avatar_path = 'images/avatar/male-avatar.png';
        }
        if  ($gender == 'FEMALE') {
            $avatar_path = 'images/avatar/female-avatar.png';
        }

        /*get teacher's class*/
        $teacher_class = Teacher::where('user_id', Auth::user()->id)->select('class')->first();

        /*get the user gender*/
        $students = Student::where('class', $teacher_class->class)->get();




        return view('teacher.class-students', ([
            'students' => $students,
            'avatar_path' => $avatar_path,
        ]));
    }
    public function profile(){
        /*get the user gender*/
        $user_details = Teacher::select('gender')->where('user_id', Auth::user()->id)->get();

        foreach ($user_details as $userdetail){
            $gender = $userdetail->gender;
        }
        if ($gender == 'MALE'){
            $avatar_path = 'images/avatar/male-avatar.png';
        }
        if  ($gender == 'FEMALE') {
            $avatar_path = 'images/avatar/female-avatar.png';
        }


        $user = Teacher::where('user_id', Auth::user()->id)->first();


        return view('teacher.profile', ([
            'avatar_path' => $avatar_path,
            'user' => $user,
        ]));
    }

}
