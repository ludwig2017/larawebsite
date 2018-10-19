<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request) {
		$this->validate($request, [
			'name' => 'required',
			'email' => 'required',
			'message' => 'required'
		]);
		
		// Create New Message
		$message = new Message;
		$message->name = $request->input('name');
		$message->email = $request->input('email');
		$message->message = $request->input('message');

		// Create New Message
		$message->save();

		// Redirect
		return redirect('/messages')->with('success', 'Message Sent');
	}

	public function getMessages() {
		$messages = Message::all();

		return view('messages')->with('messages', $messages);
	}
}
