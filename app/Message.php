<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    static public function save_new($request)
    {
        $message = new self();
        $message->name = $request['name'];
        $message->email = $request['email'];
        $message->subject = $request['subject'];
        $message->message = $request['message'];
        $message->save();
    }
}
