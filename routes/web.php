<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'title'=>'This is the email title',
        'content'=>'This is the email content'
    ];

    Mail::send('emails.email', $data, function($message){
        $message->to('warwick.nortier@gmail.com', 'Warwick')->subject('This is the test subject');
    });
});
