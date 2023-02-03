<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderTour;
use Mail;

class SendMail extends Controller
{
    //
    function sendMail()
    {
        Mail::to('hieu745233@gmail.com')->send(new OrderTour());
        return redirect('/');
    }
}
