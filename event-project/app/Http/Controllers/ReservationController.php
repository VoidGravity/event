<?php

namespace App\Http\Controllers;

use App\Mail\ticket;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Stripe\Stripe;
use Stripe\Webhook;

class ReservationController extends Controller
{
    public function showSucess(Request $request)
    {
        Log::info('Payment success', $request->all());


        return view('front.success');
    }
    public function showFail(Request $request)
    {
        Log::info('Payment failure', $request->all());

        return view('front.fail');
    }
    public function handleWebhook(Request $request)
    {
        Log::info('handleWebhook');

        Stripe::setApiKey(config('stripe.sk'));

        $payload = $request->getContent();
        $sig_header = $request->header('Stripe-Signature');
        $event = null;

        try {
            $event = Webhook::constructEvent(
                $payload,
                $sig_header,
                config('stripe.webhook_secret')
            );
        } catch (\Exception $e) {
            Log::info('Webhook received1');
            return response()->json(['error' => 'Webhook Error: ' . $e->getMessage()], 400);
        }
        Log::info('Webhook received2');
        if ($event->type == 'checkout.session.completed') {
            Log::info('CHECKOUT SESSION CONDIOTION WAS MET');
            $session = $event->data->object;

            Reservation::create([
                // 'event_id' => 1,
                // 'user_id' => 1,
                // 'stripe_payment_intent_id' => 1,
                'event_id' => $session->metadata->event_id,
                'user_id' => $session->metadata->user_id,
                'stripe_payment_intent_id' => $session->payment_intent,
            ]);
            log::info('Reservation created');
            //send email
            $userid = $session->metadata->user_id;
            $user = User::find($userid);
            if (!$user) {
                Log::error("User not found with ID: $userid");
            }
            $eventid = $session->metadata->event_id;
            $Reservation = Reservation::where('stripe_payment_intent_id', $session->payment_intent)->first();
            $ReservationId = $Reservation->id;

            $userEmail = User::find($userid)->email;
            Log::info('User id ' . $userid);
            Log::info('Event id ' . $eventid);
            Log::info('Reservation id ' . $ReservationId);
            Mail::to($userEmail)->send(new ticket($userid, $eventid, $ReservationId));
            Log::info('Email sent to ' . $userEmail);
        }

        return response()->json(['status' => 'success']);
    }
}
