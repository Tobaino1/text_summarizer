<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project; //Model
use App\Help;

class AdminController extends Controller
{
   
   /**
     * Create a new controller instance.
     * authentication //to redirect unathorized access to login
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
  public function admin ()
   { 
       //using Project model to call/select all the records  
    $projects = Project::all();
    return view ('admin', ['projects' => $projects]);
   }
     //or use this return view function
    //return view('admin')->with(compact('projects'));


    public function request()
      { 
        $helps = Help::all();
        return view ('request', ['helps' => $helps]); 
      }
}



