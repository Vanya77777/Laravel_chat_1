<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Events\NewMessage;

class ChatController extends Controller
{
    public function index()
    {
        $messages=Message::all();
        return view('chat',compact('messages'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
      $message=Message::create($request->all());
      //Event::fire(new NewMessage($message));
      
         event(new NewMessage($message));
      return redirect()->back();
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
