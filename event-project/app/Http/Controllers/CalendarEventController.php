<?php

namespace App\Http\Controllers;

use App\Models\Event as ModelsEvent;
use Google\Client;
use Google\Service\Calendar;
use Google\Service\Calendar\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Google\Client as GoogleClient;

class CalendarEventController extends Controller
{
    public function addEventToGoogleCalendar($eventId)
    {
        $eventInfo = ModelsEvent::find($eventId);
        $user = Auth::user();

        // Check if we have an access token
        if ($user->token) {
            $client = new GoogleClient();
            $client->setAccessToken($user->token);
            // Refresh the token if it's expired.
            if ($client->isAccessTokenExpired()) {
                if ($user->refreshToken) {
                    $client->fetchAccessTokenWithRefreshToken($user->refreshToken);
                    // Save the new access token to the user
                    $user->token = $client->getAccessToken();
                    $user->save();
                } else {
                    // Redirect the user to the OAuth consent process to get a new refresh token
                    return redirect('/auth/google/redirect');
                }
            }

            $calendarService = new Calendar($client);
            $startDateTime = new \DateTime($eventInfo->start_date);
            $endDateTime = (new \DateTime($eventInfo->start_date))->modify('+1 day');


            // $eventinfo = $request->all();
            // dd($eventinfo);
            // Create a new event
            $event = new Event([
                'summary' => $eventInfo->title,
                'description' => $eventInfo->description,
                'start' => [
                    'dateTime' => $startDateTime->format(\DateTime::RFC3339),
                    'timeZone' => 'America/Los_Angeles', // Timezone
                ],
                'end' => [
                    //end time is start time + 1 day
                    'dateTime' => $endDateTime->format(\DateTime::RFC3339),
                    'timeZone' => 'America/Los_Angeles', // Timezone
                ],
                // ... Additional event parameters
            ]);

            $calendarEvent = $calendarService->events->insert('primary', $event);

            if ($calendarEvent) {
                return redirect()->back()->with('success', 'Event added to Google Calendar');
            } else {
                return redirect()->back()->with('error', 'Error adding event to Google Calendar');
            }
        } else {
            return redirect()->route('auth/login')->withErrors('You need to log in with Google first.');
        }
    }
}
