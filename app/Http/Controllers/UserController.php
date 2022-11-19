<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $client = new Client();
            $request = new Request('GET', 'http://mmb.karbh.com/api/v1/categories');
            $res = $client->sendAsync($request)->wait();
            $data = $res->getBody();
           
            $user = User::all();
            $client = new Client();
            $request = new Request('GET', 'http://mmb.karbh.com/api/v1/categories');
            $res = $client->sendAsync($request)->wait();
            $data =  $res->getBody();
             $data = json_decode($data);

            return view('index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $validated = $request->validate([
            'name'  =>  'required',
            'mobile' => 'required|max:11',
            'password' => 'required',
        ]);
        $validated['password']=Hash::make($validated['password']);
            User::create($validated);
            return redirect()->back()->withSucess('sign up sucessfully');

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
    public function destroy($id)
    {
        //
    }
}
