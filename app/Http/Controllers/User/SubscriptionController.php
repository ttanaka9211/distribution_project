<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        return view('user.subscription.index')->with([
            'intent' => $user->createSetupIntent(),
        ]);
    }
}
