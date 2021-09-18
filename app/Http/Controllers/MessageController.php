<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Message;
use App\User;

class MessageController extends Controller
{
    function show(){
    return view('message');
    }
    //
}
