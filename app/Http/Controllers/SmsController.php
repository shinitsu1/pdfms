<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function sms(){

        $basic  = new \Vonage\Client\Credentials\Basic("f4177a8e", "U1vQJb4POTvNviy4");
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("639427991764", 'FleetLink', 'hi po')
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";

        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }


    }
}
