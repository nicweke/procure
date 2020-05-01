<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResentOTPRequest;

class ResendOTPController extends Controller
{
    public function resend(ResentOTPRequest $request)
    {
        auth()->user()->sendOTP($request->via);
        return back()->with('Message', 'Your new OTP has been sent, please check your email !');
    }
}
