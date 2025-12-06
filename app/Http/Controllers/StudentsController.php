<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentsAddRequest;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use NunoMaduro\Collision\Adapters\Phpunit\Style;

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
    
    public function getData (Request $request){
        $students =  Students::where($request->search, function($query) use($request){
            return  $query->whereAny([
              "name",
              "lastName",
              "age",
              "date_of_birth"
            ],'LIKE','%'.$request->search.'%');
         })->paginate(10);
    }

    public function fetchStudents(Request $request){
     $students =  Students::when($request->search, function($query) use($request){
         $query->where("name", 'LIKE','%'.$request->search.'%');
     })->paginate(15);
      return  view('Student.home', compact('students'));
    }
    public function create(StudentsAddRequest $request){
    
        $student =   new Students();
        $student->name =$request->name;
        $student->lastName = $request->lastname;
        $student->score = $request->score;
        $student->age= $request->age;
        $student->gender= $request->gender;
        $student->save();
        return redirect("student");
    }
    public function fetchData(){
      $students =   Students::all();
      return $students;

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
     public function update($id){
        $student = Students::findOrFail($id);
         return view('Student.update', compact('student'));
        }
      public function Edit(Request $request, $id){
        $student = Students::findOrFail($id);
         $student->name = $request->name;
         $student->lastName = $request->lastname;
         $student->score = $request->score;
         $student->age = $request->age;
         $student->gender =$request->gender;
         $student->update();
         return redirect("student");
      }
    
    public function destroy(Request $request, $id){
      Students::findOrFail($id)->delete();
      return redirect("student");
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
