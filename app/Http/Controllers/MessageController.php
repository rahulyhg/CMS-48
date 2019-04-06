<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();

        return view('message.index', compact('messages'));
    }

    /**
     * Create a resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Message::create($request);
    }

    /**
     * Display the specified resource.
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    { // Check if it is route model binding
        return view('message.show', compact('message'));
    }


    public function destroy($id)
    { // Admin only
        //
    }
}
