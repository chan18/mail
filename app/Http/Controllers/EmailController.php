<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{

    public function index()
    {
        return \View::make('welcome');;
    }

    // action method for handling the request.
    public function send(Request $request)
    {
        \Mail::send('welcome',['data'=>'data'],function ($message) {
            $message->from('me@mail.com','Chandra kanth');
            $message->to('chandu-43f79b@inbox.mailtrap.io');
        });
        
    }
}
