<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class TestController extends Controller
{
    public function unsubscribe(Request $request, $user_id, $signature)
    {
        // Verify the signature
        dd("df");
        if (!$request->hasValidSignature()) {
            abort(404);
        }

        // Unsubscribe the user
        dd("users unsubscribe");

        // return view('unsubscribe');
    }
}