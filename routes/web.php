<?php

use Illuminate\Support\Facades\Route;
/* use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'message'=>'required',
    ]);

    Mail::raw(
        "From:{$request->name} ({$request->email})
        \n\n{$request->message}",
        function ($mail) {
            $mail->to('info@mulokoziwillium@gmail.com')->subject('subject('School Website Contact Message');
        }
    );
    return back()->with('success','Message sent successfully.');
});
*/ 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
