<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Student;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF(Request $request)
    {



        /*get result*/
        $results = Result::where('admission_no', $request->admission_no)->get();



        $class_teacher_img = $request->class_teacher;
        $name = $request->name;
        $gender = $request->gender;
        $class = $request->class;
        $admission_no = $request->admission_no;

        $dob = Student::where('admission_no', $request->admission_no)->select('dob')->first();


        $date_of_birth = $dob->dob;



        $pdf = PDF::loadView('report-card.report-card', ([
            'name' => $name,
            'gender' => $gender,
            'class' => $class,
            'admission_no' => $admission_no,
            'results' => $results,
            'dob' => $dob,
            'date_of_birth' => $date_of_birth,
            'class_teacher_img' => $class_teacher_img,
        ]));

        return $pdf->download('report-card.pdf');
    }
}
