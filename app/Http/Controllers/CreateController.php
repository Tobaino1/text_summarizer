<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  //use for passing/sending data to the server
use App\Project; //add the model that was created i.e Project

class CreateController extends Controller
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

    public function create ()
    {
        return view ('create');
    }

    
    //creating method
    public function add (Request $request)
    {
        
       // validating form input
        $this->validate($request, [
            'title' =>'required',
            'specification' => 'required',
            'result' => 'required'
        ]);
            //saving the data
            $projects = new Project;
            $projects-> title = $request->input('title');
            $projects-> specification = $request->input('specification');
            $projects-> result = $request->input('result');
            $projects->save();
        return redirect ('admin')->with('success', 'Project saved successfully!') ;
    }

        //updating method
    public function update($id)
    {
        //getting and passing the data by id
        $projects = Project::find($id); 
        return view ('update_admincrud', ['projects' => $projects]);
    }

        public function edit (Request $request, $id)
    {
       // validating form input
       $this->validate($request, [
        'title' =>'required',
        'specification' => 'required',
        'result' => 'required'
    ]);
    
    //get data in array n display
    $data = array (
        'title' => $request->input('title'),
        'specification' => $request->input('specification'),
         'result' => $request->input('result')
    );
    //update data by id n redirect
    Project::where('id', $id)->update($data);
    return redirect ('admin')->with('success', 'Project Updated successfully!') ;
    }

    //read method
    public function read (Request $request, $id)
    {
        $projects = Project::find($id); 
        return view ('read_admincrud', ['projects' => $projects]);
  }

  //delete method
        public function delete (Request $request, $id)
        {
            Project::where('id', $id)->delete();
    return redirect ('admin')->with('success', 'Project Deleted successfully!') ;
        }
}
