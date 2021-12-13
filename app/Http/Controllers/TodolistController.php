<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;
use App\Http\Controllers\TodolistController;
class TodolistController extends Controller
{
    
    public function index()
    {
	$todolists= Todolist::all();
   // return view('home' , compact('todolists'));  
   // return view('employee.index', ['employees' => $employees]);
    //return view('pages.index', ['employees' => Employee::all()]);
    //return view('home')->with(['todolists' => $todolists]);	
	return view('home', ['todolists' => $todolists]);
	//return view('home')->with('todolists', $todolists);
	   //
    }

   
    public function store(Request $request)
    {
        $data = $request ->validate([
		
		'content' => 'required'
		
		]);
		
		Todolist::create($data);
		return back();
		//
    }
    public function destroy(todolist $todolist)
    {
      $todolist->delete();
      return back();	  
		//
    }
   
    
}
