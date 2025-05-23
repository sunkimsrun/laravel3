<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i<50; $i++){
            //Create new 50 students
            DB::table('students')->insert([
                'name' => 'Student ' . $i,
                'age' => rand(10, 20),
                'email' => 'student' . $i . '@rupp.edu.kh',
            ]);
        }

        for ($i=0; $i<10; $i++){
            //Create new 10 teachers
            DB::table('teachers')->insert([
                'name' => 'Teacher ' . $i,
                'subject' => 'Subject ' . $i,
                'email' => 'teacher' . $i . '@rupp.edu.kh',
            ]);
        }
    }
}
