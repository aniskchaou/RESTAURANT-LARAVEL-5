<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Message;
use App\Http\Controllers\Controller;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msgs = Message::all();  
  
        return view('admin.pages.message.index', compact('msgs'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.message.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([  
            'name'=>'required', 
            'email'=>'required', 
            'telephone'=>'required', 
            'message'=>'required',  
        ]);  
  
        $msg = new Message;  
        $msg->name =  $request->get('name');
        $msg->email =  $request->get('email');
        $msg->telephone =  $request->get('telephone');
        $msg->message =  $request->get('message');
        $msg->save();
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
        $msg= Message::find($id);  
     return view('admin.pages.message.edit', compact('msg')); 
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
        $request->validate([  
            'name'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'message'=>'required',  
             
        ]);  
  
        $msg = Message::find($id);  
        $msg->name =  $request->get('name');
        $msg->email =  $request->get('email');
        $msg->telephone =  $request->get('telephone');
        $msg->message =  $request->get('message');    
        $msg->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $msg=Message::find($id);  
        $msg->delete();
    }
}
