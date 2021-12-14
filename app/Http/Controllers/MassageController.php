<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MassageController extends Controller
{
    public function sendMessage(Request $request)
    {
        
        broadcast(new NewMessage($user, $message))->toOthers();
    }
}
