<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberInvite;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    public function sendInvite($email)
    {
        Mail::to($email)->send(new SubscriberInvite(
            inviterName: auth()->user()->name,
            inviteUrl: route('register')  // Assuming you have a registration route
        ));

        return back()->with('success', 'Invitation sent successfully!');
    }
}
