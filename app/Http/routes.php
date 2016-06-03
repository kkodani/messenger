<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('messenger');
});

Route::post('/sendMsg', function (Request $req) {


  $fromPhone = getenv("TWILIO_PHONE");
  $toPhone = $req -> phone;
  $messageBody = $req -> message;
  $client = new Services_Twilio(getenv("TWILIO_ACCOUNT_SID"), getenv("TWILIO_AUTH_TOKEN"));

  $message = $client->account->messages->create(array(
    "From" => "+" . $fromPhone,
    "To" => "+1" . $toPhone,
    "Body" => $messageBody,
  ));

  echo "Sent message!";
  return redirect('/');
});
