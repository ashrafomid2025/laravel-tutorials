<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    //

    public function addData(){
        // eloquent orm object orinted relational mapping 
       $student =  new Students();
       $student->name = "tester";
       $student->lastName = "tester lastname";
       $student->score = 90;
       $student->save();
       return "added successfully";
        // DB::table("students")->insert([
        //     [
        //         "name"=> "Fatima",
        //         "lastName"=> "Sharifi",
        //         "date-of-birth"=> "2000-09-25",
        //         "gender"=> "f",
        //         "age"=> 25
        //     ],
        //     [
        //         "name"=> "Roqia",
        //         "lastName"=> "Ghulami",
        //         "date-of-birth"=> "2002-08-15",
        //         "gender"=> "f",
        //         "age"=> 23
        //     ],
        //     [
        //         "name"=> "Mohommad",
        //         "lastName"=> "Mohammadi",
        //         "date-of-birth"=> "2004-09-22",
        //         "gender"=> "m",
        //         "age"=> 21
        //     ],
        //     [
        //         "name"=> "Soraya",
        //         "lastName"=> "Qurbani",
        //         "date-of-birth"=> "1999-09-25",
        //         "gender"=> "f",
        //         "age"=> 26
        //     ],
        // ]);
        // return "Data Inserted Successfully";
    }

    public function fetchData(){
    //   $allStudent =   DB::table("students")->limit(3)->get();
    //   return $allStudent;

    $allStudents =  Students::orderBy("name", "asc")->all();
    return $allStudents;
     //   where, order by, limit, count, max, min , asc, desc
    } 
    public function update(){
        $student = Students::find(2);
        $student->name = "Ali";
        $student->lastName = "Ahmadi";
        $student->update();
        return "updated successfully";
    }
    public function delete(){
        DB::table("students")->where("score","<", 10)->delete();
        return "deleted successfully";
    }

}
