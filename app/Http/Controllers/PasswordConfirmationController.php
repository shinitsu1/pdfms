<?php

namespace App\Http\Controllers;
use App\Models\ConfirmationToken;


use Illuminate\Http\Request;
use App\Models\Supervisors; // Adjust the namespace based on your folder structure

class PasswordConfirmationController extends Controller
{
    public function confirm($token)
    {
        $confirmationToken = ConfirmationToken::where('confirmation_tokens', $token)->first();

        if ($confirmationToken) {
            $supervisor = Supervisors::find($confirmationToken->user_id);

            if ($supervisor) {
                // Logic to handle supervisor confirmation

                // For example, if confirming, update the supervisor's confirmation status
                $supervisor->confirmed = true;
                $supervisor->save();

                // Delete the confirmation token after successful confirmation
                $confirmationToken->delete();

                // Redirect the user to the dashboard or display a success message
                return redirect()->route('dashboard')->with('success', 'Password Changed Successfully!');
            }
        }

        // Handle the case when no supervisor or token is found
        // Redirect or display an error message
        return redirect()->route('error')->with('error', 'Invalid Token');
    }
}
