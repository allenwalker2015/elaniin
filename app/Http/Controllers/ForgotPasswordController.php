<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\SendResetMailRequest;
use App\services\UsersService;

class ForgotPasswordController extends Controller
{
    public function sendResetEmail(SendResetMailRequest $request)
    {
        return UsersService::sendResetPasswordMail($request->only('email'));
    }

    public function resetForm()
    {
        return view('password.index');
    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        return UsersService::resetPassword($request->only('email', 'token', 'password'));
    }

}
