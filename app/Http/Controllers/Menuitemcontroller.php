<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Menuitemcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('common.sidebar');
    }

    public function getMenuitem(){
 
        $employees = Menuitem::orderby('id','asc')->select('*')->get(); 
         
        // Fetch all records
        $response['data'] = $employees;
    
        return response()->json($response);
      }
    
      public function getMenuitembyid(Request $request){
    
         $id = $request->id;
    
         $employees = Menuitem::select('*')->where('id', $userid)->get();
    
         // Fetch all records
         $response['data'] = $employees;
    
         return response()->json($response);
      }
     
}
