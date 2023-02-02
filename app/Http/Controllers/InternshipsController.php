<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\internship;
use Illuminate\Support\Facades\Storage;



class InternshipsController extends Controller
{
    
    public function createInternship(Request $request){
        $request;
        $request->validate([
            "email"=>"required"
        ]); 
       
        $newInternship = new internship();
        $newInternship->naam = $request->input('naam');
        $newInternship->plaats = $request->input('plaats');
        $newInternship->telefoonnummer = $request->input('telefoonnummer');
        $newInternship->email = $request->input('email');
        $newInternship->save();


        return redirect() ->route('dashboard');
    }
    



    public function internshipViewList()
    {
        
        $internships = internship::all();
        return view('internship', compact('internships'));
    }
   
    
}
