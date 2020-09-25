<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('store');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'subject' => 'required|string',
            'phone' => 'required|string',
            'info' => 'nullable|string',
        ]);
        Message::create($data);
        return ['code' => 200];
    }


    public function destroy(Message $message)
    {
        $message->delete();
        return back()->withMessage('Deleted');
    }
}
