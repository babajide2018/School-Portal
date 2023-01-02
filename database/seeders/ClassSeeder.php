<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        Classes::create([
            'class_name' => 'Prep One',
            'class_category' => 'Prep',
            'class_total' => 'null',
            'class_teacher' => 'null',
        ],
        [
            'class_name' => 'Prep Two',
            'class_category' => 'Prep',
            'class_total' => 'null',
            'class_teacher' => 'null',
        ],
        [
            'class_name' => 'Nursery One',
            'class_category' => 'Nursery',
            'class_total' => 'null',
            'class_teacher' => 'null',
        ],
        [
            'class_name' => 'Nursery Two',
            'class_category' => 'Nursery',
            'class_total' => 'null',
            'class_teacher' => 'null',
        ],
        [
            'class_name' => 'Basic One',
            'class_category' => 'Basic',
            'class_total' => 'null',
            'class_teacher' => 'null',
        ],
        [
            'class_name' => 'Basic Two',
            'class_category' => 'Basic',
            'class_total' => 'null',
            'class_teacher' => 'null',
        ],
        [
            'class_name' => 'Basic Three',
            'class_category' => 'Basic',
            'class_total' => 'null',
            'class_teacher' => 'null',
        ],
        [
            'class_name' => 'Basic Four',
            'class_category' => 'Basic',
            'class_total' => 'null',
            'class_teacher' => 'null',
        ],
        [
            'class_name' => 'Basic Five',
            'class_category' => 'Basic',
            'class_total' => 'null',
            'class_teacher' => 'null',
        ],
        [
            'class_name' => 'JSS One',
            'class_category' => 'Junior Secondary School',
            'class_total' => 'null',
            'class_teacher' => 'null',
        ],
        [
            'class_name' => 'JSS Two',
            'class_category' => 'Junior Secondary School',
            'class_total' => 'null',
            'class_teacher' => 'null',
        ],
        [
            'class_name' => 'JSS Three',
            'class_category' => 'Junior Secondary School',
            'class_total' => 'null',
            'class_teacher' => 'null',
        ],
        [
            'class_name' => 'SSS One',
            'class_category' => 'Senior Secondary School',
            'class_total' => 'null',
            'class_teacher' => 'null',
        ],
            [
            'class_name' => 'SSS Two',
            'class_category' => 'Senior Secondary School',
            'class_total' => 'null',
            'class_teacher' => 'null',
        ],
            [
            'class_name' => 'SSS Three',
            'class_category' => 'Senior Secondary School',
            'class_total' => 'null',
            'class_teacher' => 'null',
        ]
        );





    }
}
