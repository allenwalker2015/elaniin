<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserCreationRequest;
use App\models\User;
use App\services\ProductsService;
use Auth;
use Illuminate\Http\Request;


class UsersController extends Controller
{

    public function create(UserCreationRequest $request)
    {
        return ProductsService::registerNewUser($request->all());
    }

    public function read(Request $request)
    {
        return ProductsService::logoutUser($request->user());
    }

    public function update(Request $request, User $user)
    {
        return ProductsService::updateUser($user);
    }

    public function delete(User $user)
    {
        return ProductsService::deleteUser($user);
    }

    public function list()
    {
        return ProductsService::listUsers();
    }
}
