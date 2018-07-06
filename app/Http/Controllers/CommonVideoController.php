<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonVideoController extends Controller
{
    public function search(Request $request)
    {
        $param = $request->param;
        return $param;
    }

    public function slider()
    {
        return 'sliders';
    }

    public function message(Request $request)
    {
        $email = $request->email;
        $name = $request->name;
        $subject = $request->subject;
        $message = $request->message;
        return 'message';
    }

    public function updateViewed(Request $request)
    {
        $video_id = $request->id;
        return $video_id;
    }
}
