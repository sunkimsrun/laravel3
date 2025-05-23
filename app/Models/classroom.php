<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Classroom
{
    // Students
    public static function getStudents()
    {
        return DB::table('students')->get();
    }

    public static function getStudentById($id)
    {
        return DB::table('students')->where('id', $id)->first();
    }

    public static function createStudent($name, $age)
    {
        $id = DB::table('students')->insertGetId([
            'name' => $name,
            'age' => $age,
            'email' => $name . '@rupp.edu.kh'
        ]);
        return DB::table('students')->where('id', $id)->first();
    }

    public static function updateStudent($id, $name, $age, $email)
    {
        DB::table('students')->where('id', $id)->update([
            'name' => $name,
            'age' => $age,
            'email'=> $email
        ]);
        return DB::table('students')->where('id', $id)->first();
    }

    public static function deleteStudentById($id)
    {
        return DB::table('students')->where('id', $id)->delete();
    }

    // Teachers
    public static function getTeachers()
    {
        return DB::table('teachers')->get();
    }

    public static function getTeacherById($id)
    {
        return DB::table('teachers')->where('id', $id)->first();
    }

    public static function createTeacher($name, $subject)
    {
        $id = DB::table('teachers')->insertGetId([
            'name' => $name,
            'subject' => $subject,
            'email' => $name . '@rupp.edu.kh'
        ]);
        return DB::table('teachers')->where('id', $id)->first();
    }

    public static function updateTeacher($id, $name, $subject)
    {
        DB::table('teachers')->where('id', $id)->update([
            'name' => $name,
            'subject' => $subject
        ]);
        return DB::table('teachers')->where('id', $id)->first();
    }

    public static function deleteTeacherById($id)
    {
        return DB::table('teachers')->where('id', $id)->delete();
    }
}
