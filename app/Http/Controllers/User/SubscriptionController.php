<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('user.subscription.index');
    }
}
