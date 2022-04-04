<?php

namespace App\Http\Controllers;

use App\Models\states;
use Illuminate\Http\Request;

class statescontroller extends Controller
{
     
    public function index()
    {
        $states = states::all();
      return view ('state')->with('states', $states);
        
    }

    public function create()
    {  return view('states.create');
        
    }

    
    public function store(Request $request)
    {$input = $request->all();
        states::create($input);
        return redirect('states')->with('flash_message', 'states Addedd!'); 
        
    }

    
    public function show($id)
    { $states = states::find($id);
        return view('statess.show')->with('statess', $states);
        //
    }

    
}
