<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\internship;
class PagesController extends Controller
{
    public function viewHomePage(){
        $total_internships = internship::count();
        return view('home')->with(['total'=>$total_internships]);
    }
    public function viewDashboardPage(){
        $totalBreda = internship::where('plaats', 'Breda')->count();
        $totalOosterhout = internship::where('plaats', 'Oosterhout')->count();
        $totalRoosendaal = internship::where('plaats', 'Roosendaal')->count();
        $totalEttenleur = internship::where('plaats', 'Etten-Leur')->count();
        return view('dashboard')->with(['totalBreda'=>$totalBreda])->with(['totalOosterhout'=>$totalOosterhout])->with(['totalRoosendaal'=>$totalRoosendaal])->with(['totalEttenleur'=>$totalEttenleur]);
    }
    public function viewCreatePage(){
        return view('create');
    }
    

   
}
    


