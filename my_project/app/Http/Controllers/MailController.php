<?php

namespace App\Http\Controllers;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendemail(){
        $to="yt.test0707@gmail.com";
        $sub="Test mail";
        $msg="This is a test mail";
        Mail::to($to)->send(new WelcomeEmail($msg,$sub));
        return "email sent";
    }
}
