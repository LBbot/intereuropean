<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Mail\ContactMail;

Route::get('/', function () {
    return view('index');
});

Route::post('/', function (Request $request) {
    // Mail::send(new ContactMail($request));
    return redirect()->back()->with('message', 'Thanks for your message!');
});
