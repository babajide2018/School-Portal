<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Parents;
use App\Models\Result;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function index(){

        return view('admin.index');
    }



    public function login(){

        return view('admin.administrator-login');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();


        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }



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

        /*count students*/
        $no_of_students = Student::all()->count();


        /*count parents*/
        $no_of_parents = Parents::all()->count();

        /*count teachers*/
        $no_of_teachers = Teacher::all()->count();



        //dd($gender);
        return view('admin.dashboard', ([
            'avatar_path' => $avatar_path,
            'no_of_students' => $no_of_students,
            'no_of_parents' => $no_of_parents,
            'no_of_teachers' => $no_of_teachers,

        ]));

    }



    public function employeeList(){


        /*get the user gender*/
        $employees = Teacher::all();

       foreach ($employees as $employee){
           if($employee->gender == 'MALE'){
               $employee_avatar = 'images/avatar/male-avatar.png';
           }
           if($employee->gender == 'FEMALE'){
               $employee_avatar = 'images/avatar/female-avatar.png';
           }

       }






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






        return view('admin.employee-list', ([
            'avatar_path' => $avatar_path,
            'employee_avatar' => $employee_avatar,
            'employees' => $employees,
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

        /*get the user gender*/
        $students = Student::all();

        /*get the user gender*/
        $employees = Teacher::all();


        return view('admin.student-list', ([
            'students' => $students,
            'avatar_path' => $avatar_path,
        ]));
    }



    public function parentList(){
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



        /*get the user gender*/
        $parents = Parents::all();

        return view('admin.parent-list', ([
            'parents' => $parents,
            'avatar_path' => $avatar_path,
        ]));
    }


    public function resultList(){
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

        /*get the user result*/
        $results = Result::all();

        return view('admin.result-list', ([
            'results' => $results,
            'avatar_path' => $avatar_path,
        ]));
    }


    public function sendBulkSms(){

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

        return view('admin.send-bulk-sms', ([
            'avatar_path' => $avatar_path,
        ]));
    }




















    public function logout(){

        Auth::logout();
        return redirect()->route('login')->with('warning', 'You have been logged out');
    }

}
