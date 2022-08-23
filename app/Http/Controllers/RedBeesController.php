<?php

namespace App\Http\Controllers;

use App\Models\RedBees;
use Illuminate\Http\Request;

class RedBeesController extends Controller
{

    
    public function index()
    {
        
    }
    
    
    // public function create()
    // {
    //    return view('redbees.contact');
    // }

   
    // public function store(Request $request)
    // {
    //     RedBees::create($request->all());
    //     return redirect()->route('contact.store');
    // }

    public function show(RedBees $redBees)
    {
        //
    }

    
    public function edit(RedBees $redBees)
    {
        //
    }

   
    public function update(Request $request, RedBees $redBees)
    {
        //
    }

   
    public function destroy(RedBees $redBees)
    {
        //
    }
}
