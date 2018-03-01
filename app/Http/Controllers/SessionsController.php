<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{

        public function __construct()
        {

                $this->middleware('guest',['except' => 'destroy']);

        }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    
    public function create()
    {
        return view('sessions.create');
    }


    /**
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

            if(! Auth::attempt(['email' => $request->input('email'),'password'=>$request->input('password')])) {

                return back()->withErrors([

                    'message' => 'Please check your creditals and try again '

                    ]);
            }
                
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
             
        auth()->logout();

        return redirect()->home();
    }
}
