<?php

namespace App\Http\Controllers;

use App\Mail\PoliceLoginLink;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class addPoliceAccount extends Controller
{
    public function addPoliceAccount(Request $request)
    {
        // Logic to add police account

        // Retrieve supervisor email from the request or another source
        $supervisorEmail = $request->input('email'); // Adjust this according to your form input

        // Generate login link
        $loginLink = 'http://127.0.0.1:8000/login';

        // Send email with login link
        Mail::to($supervisorEmail)->send(new PoliceLoginLink($loginLink));

        // Return response or redirect
    }
}

