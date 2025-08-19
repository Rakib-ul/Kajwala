<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribers,email|max:100'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->with('newsletter_error', $validator->errors()->first('email'))
                        ->withInput();
        }

        Subscriber::create(['email' => $request->email]);

        return redirect()->back()
                    ->with('newsletter_success', 'Thank you for subscribing!');
    }
}