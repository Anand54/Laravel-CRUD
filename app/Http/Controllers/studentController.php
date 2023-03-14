<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index(){
       $data = Student::get(); 
       return view('student-list',compact('data'));  
    }

    public function addStudent(){
        return view('add-student');
    }

    public function saveStudent(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required|min:10|max:10|unique:students',
            'address' => 'required'
        ]);

        // dd($request->all());
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        $address=$request->address;

        $stu = new student();
        $stu->name=$name;
        $stu->email=$email;
        $stu->phone=$phone;
        $stu->address=$address;
        $stu->save();

        return redirect()->back()->with('success','Student added successfully');
    }


     public function editStudent($id){
        $data = Student::where('id','=',$id)->first();
        return view('edit-student', compact('data')); 
     }

     public function updateStudent(Request $request){
            $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required'
        ]);
        $id = $request->id;
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        $address=$request->address;
        
        Student::where('id','=',$id)->update(['name'=>$name,'email'=>$email,'phone'=>$phone,'address'=>$address]);
         return redirect()->back()->with('success','Student Updated successfully');
     }


        public function deleteStudent($id){
        Student::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Student Deleted successfully'); 
        }
}
