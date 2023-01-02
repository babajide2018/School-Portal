<?php

namespace App\Imports;

use App\Models\Parents;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $string = Str::random(10);
        $parent_suggested_email = 'parent-'.$string.'@thecovenanttreasures.org';
        //dd($suggested_email);

        if (!DB::table('users')->where('email', '=', $parent_suggested_email)){


            /*upload student to users table*/
            User::create([
                'name'     => $row['name'],
                'email'    => 'student@ctis.com',
                'password' => Hash::make($row['mother_phone']) ?? 'admin',
                'account_type'    => 'student',
            ]);


            /*get user_id value*/
            $user_id = User::where('name', $row['name'])->select('id')->first();


            /*upload to student table*/
            Student::create([
                'name'     => $row['name'],
                'user_id'     => $user_id->id,
                'admission_no'     => $row['admission_no'],
                'gender'    => $row['gender'],
                'dob'    => $row['dob'],
                'class'    => $row['class'],
                'father_phone'    => $row['father_phone'],
                'mother_phone'    => $row['mother_phone'],
                'parent'    => $row['parent'],
            ]);

            /*upload parent to users table*/
            User::create([
                'name'     => $row['parent'],
                'email'    => $parent_suggested_email,
                'password' => Hash::make($row['mother_phone']) ?? 'admin',
                'account_type'    => 'parent',
            ]);
            /*upload parent to parent table*/

            /*get user_id value*/
            $parent_id = User::where('name', $row['parent'])->select('id')->first();

            Parents::create([
                'parent_name'     => $row['parent'],
                'user_id'     => $parent_id->id,
                'email'     => $parent_suggested_email,
                'father_phone'     => $row['father_phone'],
                'mother_phone'     => $row['mother_phone']
            ]);
        }else{



            $string = Str::random(11);
            $new_parent_suggested_email = 'parent-'.$string.'@thecovenanttreasures.org';
            //dd($suggested_email);


            /*upload student to users table*/
            User::create([
                'name'     => $row['name'],
                'email'    => 'student@ctis.com',
                'password' => Hash::make($row['mother_phone']) ?? 'admin',
                'account_type'    => 'student',
            ]);


            /*get user_id value*/
            $user_id = User::where('name', $row['name'])->select('id')->first();


            /*upload to student table*/
            Student::create([
                'name'     => $row['name'],
                'user_id'     => $user_id->id,
                'admission_no'     => $row['admission_no'],
                'gender'    => $row['gender'],
                'dob'    => $row['dob'],
                'class'    => $row['class'],
                'father_phone'    => $row['father_phone'],
                'mother_phone'    => $row['mother_phone'],
                'parent'    => $row['parent'],
            ]);

            /*upload parent to users table*/
            User::create([
                'name'     => $row['parent'],
                'email'    => $new_parent_suggested_email,
                'password' => Hash::make($row['mother_phone']) ?? 'admin',
                'account_type'    => 'parent',
            ]);
            /*upload parent to parent table*/

            /*get user_id value*/
            $parent_id = User::where('name', $row['parent'])->select('id')->first();

            Parents::create([
                'parent_name'     => $row['parent'],
                'user_id'     => $parent_id->id,
                'email'     => $new_parent_suggested_email,
                'father_phone'     => $row['father_phone'],
                'mother_phone'     => $row['mother_phone']
            ]);
        }



    }
}
