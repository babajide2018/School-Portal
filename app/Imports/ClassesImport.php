<?php

namespace App\Imports;

use App\Models\Classes;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ClassesImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        /*upload classes to class table*/
        Classes::create([
            'class_name'     => $row['class_name'],
            'class_category'    => $row['class_category'],
            'class_total' => $row['class_total'],
            'class_teacher'    => $row['class_total'],
        ]);
    }
}
