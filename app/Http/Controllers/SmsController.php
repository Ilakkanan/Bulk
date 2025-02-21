<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SmsController extends Controller
{
    public function sendBulkSms(Request $request)
    {
        // Ensure $recipients is always an array
        $recipients = (array) $request->input('recipients'); // Cast it to an array if it's a string
        $message = $request->input('message');

        $twilioSid = config('services.twilio.sid');
        $twilioToken = config('services.twilio.auth_token');
        $twilioPhoneNumber = config('services.twilio.phone_number');

        $client = new Client($twilioSid, $twilioToken);

        foreach ($recipients as $recipient) {
            $client->messages->create(
                $recipient,
                [
                    'from' => $twilioPhoneNumber,
                    'body' => $message,
                ]
            );
        }

        return response()->json(['message' => 'SMS sent successfully!']);
    }
}
