<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    
    public function index()
    {
        
    }

   
    public function create()
    {
        


        return view('register.create');


    }

    public function store()
    {
        //Validation
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'

            ]);
        //Create and save the user
        $user = User::create(request(['name','email','password']));
        //Sign them in
        auth()->login($user);


        return redirect()->home();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {


    }
}
