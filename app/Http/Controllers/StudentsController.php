<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    //

    public function addData(){
        DB::table("students")->insert([
            [
                "name"=> "Fatima",
                "lastName"=> "Sharifi",
                "date-of-birth"=> "2000-09-25",
                "gender"=> "f",
                "age"=> 25
            ],
            [
                "name"=> "Roqia",
                "lastName"=> "Ghulami",
                "date-of-birth"=> "2002-08-15",
                "gender"=> "f",
                "age"=> 23
            ],
            [
                "name"=> "Mohommad",
                "lastName"=> "Mohammadi",
                "date-of-birth"=> "2004-09-22",
                "gender"=> "m",
                "age"=> 21
            ],
            [
                "name"=> "Soraya",
                "lastName"=> "Qurbani",
                "date-of-birth"=> "1999-09-25",
                "gender"=> "f",
                "age"=> 26
            ],
        ]);
        return "Data Inserted Successfully";
    }

    public function fetchData(){
    //   $allStudent =   DB::table("students")->limit(3)->get();
    //   return $allStudent;

     $sortedstudent =  DB::table("students")->orderBy("score", "desc")->get();
      return $sortedstudent;
     //   where, order by, limit, count, max, min , asc, desc
    } 
    public function update(){
        DB::table("students")->where("score", "<", 20)->update([
            "lastName"=> "Failure",
            
        ]);
        return "updated successfully";
    }
    public function delete(){
        DB::table("students")->where("score","<", 10)->delete();
        return "deleted successfully";
    }

}
