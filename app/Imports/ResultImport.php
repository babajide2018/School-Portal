<?php

namespace App\Imports;

use App\Models\Parents;
use App\Models\Result;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ResultImport implements ToModel, WithHeadingRow
{

    public function  __construct($class, $subject)
    {
        $this->class= $class;
        $this->subject= $subject;

    }




    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {


        //dd($this->class);
        Result::create([
            'class'     => $this->class,
            'subject'     => $this->subject,
            'admission_no'     => $row['admission_no'],
            'name'     => $row['name'],
            'gender'     => $row['gender'],
            'assignment'     => $row['assignment'],
            'test'     => $row['test'],
            'exam'     => $row['exam'],
            'total'     => $row['total'],
            'session'     => $row['session'] ?? '2022/2023' ,
            'term'     => $row['term'] ?? 'First Term',
            'remark'     => $row['remark'] ?? '',
        ]);

    }
}
