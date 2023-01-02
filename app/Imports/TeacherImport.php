<?php

namespace App\Imports;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TeacherImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        /*upload to users table*/
        User::create([
            'name'     => $row['name'],
            'email'    => $row['email'],
            'password' => Hash::make($row['phone']),
            'account_type'    => 'teacher',
        ]);


        /*get user_id value*/
        $user_id = User::where('name', $row['name'])->select('id')->first();


        /*upload to teachers table*/
        Teacher::create([
            'name'     => $row['name'],
            'user_id'     => $user_id->id,
            'gender'    => $row['gender'],
            'class'    => $row['class'],
            'phone'    => $row['phone'],
            'email'    => $row['email'],
        ]);
    }
}
