<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\stage;
use App\Models\college;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CollegeController extends Controller
{
   
    public function add(){
        $co=college::all();
        return view ('college.addcollege',compact('co'));
    }
    public function show(){
        $college=college::all();
        $x=stage::all();
        
        return view ('college.stages',compact('college','x'));
    }
    public function addcollege(request $request){
        $co=college::all();
        college::create([
            'collegename' => $request->name,
            'description' => $request->description,

        ]);

        return  redirect()->back();

    }

    public function deletecollege($id){
        
        college::where('id',$id)->delete();

        return  redirect()->back();
    }
    public function deletestage($id){
        
        stage::where('id',$id)->delete();

        return  redirect()->back();
    }

    public function addstage(request $request ){
        $x=stage::all();
        $college=college::all();
        $co=college::where('id',$request->college)->get("collegename");
       $c=stage::create([
            'stage' => $request->stage,
            'college_id' => $request->college,
            'college_name' => $co['0']->collegename,

        ]);
        return  redirect()->back();

    }


    public function showstudent( ){
        $xx=stage::all();
        $college=college::all();
        return view('college.showstudent',compact('xx','college'));
    }
}
