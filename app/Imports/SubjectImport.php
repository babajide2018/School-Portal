<?php

namespace App\Imports;

use App\Models\Classes;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SubjectImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

    $class_id = Classes::where('class_category', $row['subject_category'])->select('id')->first();

   //dd($class_id);



        /*upload classes to class table*/
        Subject::create([
            'subject_name'     => $row['subject_name'],
            'class_id'    => $class_id->id,
            'subject_category' => $row['subject_category'],
            'subject_teacher'    => $row['subject_teacher'],
        ]);
    }
}
