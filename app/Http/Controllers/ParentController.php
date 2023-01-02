<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Parents;
use App\Models\Result;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ParentController extends Controller
{
    //


    public function dashboard(){
        /*get the user gender*/


        //dd(Auth::user()->id);

        if (Auth::user() == ''){
            return redirect()->route('login')->with('error', 'Sorry, your session has expired. Kindly Login again');
        }
            $avatar_path = 'images/avatar/male-avatar.png';

            $children = Student::where('parent', Auth::user()->name)->get();
            /*get child's age*/

        /*format the date*/

        return view('parent.dashboard', ([
            'avatar_path' => $avatar_path,
            'children' => $children,
            //'age' => $age,
        ]));
    }

    public function childResult(){

        $avatar_path = 'images/avatar/male-avatar.png';


        return view('parent.child-result', ([
            'avatar_path' => $avatar_path,
        ]));
    }



    public function viewResult(Request $request){

        /*get result*/
        $results = Result::where('admission_no', $request->admission_no)->get();

        $get_class = Result::where('admission_no', $request->admission_no)->select('class')->first();

        $class = $get_class->class;
        $get_teacher_img = Teacher::where('class', $class)->select('image')->first();

        $teacher_img = $get_teacher_img->image;



        return view('parent.child-result', ([
            'results' => $results,
            'teacher_img' => $teacher_img,

        ]));

    }



    public function profile(){
        /*get the user gender*/
        $user = Parents::where('user_id', Auth::user()->id)->first();
        return view('parent.profile', ([
            'user' => $user,
        ]));
    }

    public function profileUpdate(Request $request){

    $fullname = $request->fullname;
    $father_phone = $request->father_phone;
    $mother_phone = $request->mother_phone;
    $email = $request->email;
    $password = $request->password;
    $c_password = $request->c_password;


    if ($request->password == ''){
        $user = Parents::where('user_id', Auth::user()->id)->first()->update([
            'parent_name' => $fullname,
            'father_phone' => $father_phone,
            'mother_phone' => $mother_phone,
        ]);
    }else{
        $user = Parents::where('user_id', Auth::user()->id)->first()->update([
            'parent_name' => $fullname,
            'father_phone' => $father_phone,
            'mother_phone' => $mother_phone,
        ]);
        $credentials = User::where('id', Auth::user()->id)->first()->update([
            'email' => $email,
            'password' => Hash::make($password)
            ]);
    }





        return redirect()->back()->with('success','Profile updated successfully');
    }
}
