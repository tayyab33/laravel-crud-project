<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $data = Home::all();
        return view('home', compact('data'));
    }
  
    public function add(){
        return view('crud.add');
    }
    public function store(Request $data){
          $Home = new Home;
          $Home->name = $data->name;
          $Home->Class = $data->class;
          $Home->save();
          return redirect('/');
    }
    public function update($id){
         $Home = Home::where('id', $id)->first();
     return view('crud.update', compact('Home'));       
    }
      public function change(Request $request, $id){
          $Home = Home::find($id);
         $Home->name = $request->name;
         $Home->class = $request->class;
         $Home->save();    
          return redirect('/home');  
    }
     public function destroy($id)
    {
        $Home = Home::find($id);
        $Home->delete(); // Easy right?
 
        return redirect('/home')->with('success', ' removed.');  // -> resources/views/stocks/index.blade.php
    } 

}
