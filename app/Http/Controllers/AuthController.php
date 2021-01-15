<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserCreationRequest;
use App\models\User;
use App\services\ProductsService;
use Auth;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        return ProductsService::login($request);
    }

    public function signup(UserCreationRequest $request)
    {

        return ProductsService::registerNewUser($request->all());
    }

    public function logout(Request $request)
    {
        return ProductsService::logoutUser($request->user());
    }

    public function user(Request $request)
    {
        return ProductsService::logoutUser($request->user());
    }

    public function delete($request)
    {
        return ProductsService::deleteUser($request->user());
    }
}
