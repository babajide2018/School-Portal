<?php

namespace App\Http\Controllers;

use App\Imports\ClassesImport;
use App\Imports\ResultImport;
use App\Imports\StudentImport;
use App\Imports\SubjectImport;
use App\Models\Classes;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
//use App\Exports\UsersExport;
use App\Imports\TeacherImport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class MyController extends Controller
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function importTeachers()
    {
        return view('import');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new TeacherImport,request()->file('file'));

        return back();
    }
     /**
     * @return \Illuminate\Support\Collection
     */
    public function importclassess()
    {
        return view('class-import');
    }


    /**
     * @return \Illuminate\Support\Collection
     */
    public function importClassFunction()
    {
        Excel::import(new ClassesImport(),request()->file('file'));

        return back();
    }     /**
     * @return \Illuminate\Support\Collection
     */
    public function importSubjects()
    {
        return view('subject-import');
    }



    /**
     * @return \Illuminate\Support\Collection
     */
    public function importSubjectFunction()
    {
        Excel::import(new SubjectImport,request()->file('file'));

        return back();
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function importStudents()
    {
        return view('student-import');
    }



    /**
     * @return \Illuminate\Support\Collection
     */
    public function importStudentFunction()
    {

        Excel::import(new StudentImport(),request()->file('file'));

        return back()->with('success', 'Students uploaded successfully');
    }







    public function importResult()
    {


        /*get the user gender*/
        $user_details = Teacher::select('gender')->where('user_id', Auth::user()->id)->get();
        foreach ($user_details as $userdetail) {
            $gender = $userdetail->gender;
        }
        if ($gender == 'MALE') {
            $avatar_path = 'images/avatar/male-avatar.png';
        }
        if ($gender == 'FEMALE') {
            $avatar_path = 'images/avatar/female-avatar.png';
        }


        $subjects = Subject::all();
        $classes = Classes::all();

        return view('admin.upload-result', ([
            'avatar_path' => $avatar_path,
            'subjects' => $subjects,
            'classes' => $classes,
        ]));
    }



    /**
     * @return \Illuminate\Support\Collection
     */
    public function importResultFunction(Request $request)
    {

        $class = $request->class;
        $subject = $request->subject;

        Excel::import(new ResultImport($class, $subject),request()->file('file'));

        return back()->with('success', 'Result Uploaded Successfully');
    }



}
