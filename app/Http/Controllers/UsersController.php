<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\UserCreationRequest;
use App\Http\Requests\UserUpdateRequest;
use App\models\User;
use App\services\UsersService;
use Auth;
use Illuminate\Http\Request;


class UsersController extends Controller
{

    public function create(UserCreationRequest $request)
    {
        return UsersService::registerNewUser($request->all());
    }

    public function read(Request $request)
    {
        return UsersService::getUser($request->user());
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        return UsersService::updateUser($request->only('name', 'phone', 'birthday'), $user);
    }

    public function delete(User $user)
    {
        return UsersService::deleteUser($user);
    }

    public function list()
    {
        return UsersService::listUsers();
    }
}
