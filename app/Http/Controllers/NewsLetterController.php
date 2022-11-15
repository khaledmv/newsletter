<?php

namespace App\Http\Controllers;

use App\Events\UserSubscribers;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function index(Request $request){
        $request->validate([
            // 'email' => 'required|unique:newsletters,email'
            'email' => 'required'
        ]);

        event(new UserSubscribers($request->input('email')));
        return back();
    }
}
