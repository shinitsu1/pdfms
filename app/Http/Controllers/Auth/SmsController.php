<?php

namespace App\Http\Controllers;

use Twilio\Rest\Client;
use Illuminate\Http\Request;
use Twilio\TwiML\VoiceResponse;



class SmsController extends Controller
{
    public function sendSMS(Request $request)
    {
        $sid    = config('services.twilio.sid');
        $token  = config('services.twilio.token');
        $twilio = new Client($sid, $token);

        // Get user input
        $to      = $request->input('to');
        $message = $request->input('message');

        try {
            // Send SMS
            $twilio->messages->create(
                $to,
                [
                    'from' => config('services.twilio.phone_number'),
                    'body' => $message,
                ]
            );

            return response()->json(['success' => true, 'message' => 'SMS sent successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}



