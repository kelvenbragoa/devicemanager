<?php

use App\Http\Controllers\CardController;
use App\Mail\NotificationMail;
use App\Models\Delivery;
use App\Models\User;
use App\Notifications\Device;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $delivery = Delivery::find(3);
    // // User::find(1)->notify(new Device($delivery));
    // $users = User::all();

    // Notification::send($users, new Device($delivery));
});

Route::get('sendmail', function () {
    Mail::to('kelvenbragoa@hotmail.com')->send(new NotificationMail());
});

Route::get('/internal-card',[CardController::class,'internal']);
Route::get('/external-card',[CardController::class,'external']);
Route::get('/ict',[CardController::class,'ict']);