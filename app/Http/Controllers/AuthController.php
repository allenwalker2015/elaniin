<?php

namespace App\Http\Controllers;

use App\Http\Requests\JsonRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\UserCreationRequest;
use App\models\User;
use App\services\UsersService;
use Auth;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        return UsersService::login($request);
    }

    public function signup(UserCreationRequest $request)
    {

        return UsersService::registerNewUser($request);
    }

    public function logout(Request $request)
    {
        return UsersService::logoutUser($request->user());
    }

    public function user(Request $request)
    {
        return UsersService::getUser($request->user());
    }
}
