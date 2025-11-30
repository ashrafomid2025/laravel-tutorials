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
      $students =   Students::all();
      return $students;

      //   $allStudent =   DB::table("students")->limit(3)->get();
    // score> 30
        // $students = Students::where("score",">",50)->where(function($query){
        //     $query->where("age","<",18)->orWhere("age",">",30);
        // })->get();
        // return $students;
        // score and age> 30
        // $students = Students::where("score","<",30)->orWhere("age",">",50)->get();
        //   text uppercase lowercase
        // query score => 
        // $students = Students::where("name","LIKE","%rn%")->orWhere("name","LIKE", "%RN%")->get();

        // $students = Students::whereAll(["score", "age"],"=",58)->get();
        
     //   where, order by, limit, count, max, min , asc, desc
    
      
    
    } 
    public function firstQuery(){
         $students =   Students::male()->get();
      return $students;
    }
    public function secondQuery(){
         $students =   Students::male()->get();
      return $students;
    }

    public function childLadies(){
        $females = Students::female()->where("age","<",18)->get(); 
       return $females;
    }
     public function YoungLadies(){
        $females = Students::female()->where(function($query){
            $query->where("age","<=",40)->where("age",">",18);
        })->get(); 
       return $females;
    }
     public function oldLadies(){
        $females = Students::female()->where("age",">",40)->get(); 
       return $females;
    }
    public function update(){
        $student = Students::find(2);
        $student->name = "Ali";
        $student->lastName = "Ahmadi";
        $student->update();
        return "updated successfully";
    }
    
    public function delete(){
      Students::findOrFail(2)->delete();
       
      return "One item deleted";
      
    }
    public function showDeletedData(){
       $students = Students::withTrashed()->get();
      return $students;
    }
    public function restoreData(){
        Students::withTrashed()->findOrFail(1)->restore();
        return "one item restored";
    }
}
