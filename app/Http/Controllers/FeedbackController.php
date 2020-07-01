<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Help;

class FeedbackController extends Controller
{
    //
    public function index()
    {
        return view('feedback_contact');
    }

    public function previous_proj ()
    { 
            //using Project model to call/select all the records  
         $projects = Project::all();
         return view ('previous_proj', ['projects' => $projects]);

    }


    public function help ()
    {
        return view ('help');
    }


    //method inserting help request
    public function insert_help (Request $request)
    {
        
       // validating form input
        $this->validate($request, [
            'title' =>'required',
            'requirement_aimobj' => 'required',
            'Methodology_technology' => 'required',
            'email' => 'required',
            'phone' => 'required'

        ]);
            //saving the data
            $helps = new Help;
            $helps-> title = $request->input('title');
            $helps-> requirement_aimobj = $request->input('requirement_aimobj');
            $helps-> Methodology_technology = $request->input('Methodology_technology');
            $helps-> email = $request->input('email');
            $helps-> phone = $request->input('phone');

            $helps->save();
        return redirect ('/')->with('success', 'Your request has been sent successfully!, we will get back to you') ;
    }
}
