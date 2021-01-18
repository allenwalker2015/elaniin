<?php


namespace App\services;

use App\Http\Requests\ResetPasswordRequest;
use App\models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class UsersService
{

    public static function login($request)
    {
        $cred = ['email' => $request->email, 'password' => $request->password];
        if (!Auth::attempt($cred))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');

        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($token->expires_at)->toDateTimeString()
        ]);
    }

    public static function registerNewUser($data)
    {
        User::store($data);
        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }

    public static function logoutUser($user)
    {
        $user->token()->revoke();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    public static function getUser($user)
    {
        return response()->json($user);
    }

    public static function deleteUser($user)
    {
        $user->delete();
        return response()->json([
            'message' => 'Successfully deleted'
        ]);
    }

    public static function listUsers()
    {
        return response()->json(User::paginate(10));
    }

    public static function updateUser($data, User $user)
    {
        $user->fill($data)->update();
        return response()->json($user);
    }

    public static function sendResetPasswordMail($credentials)
    {
        Password::sendResetLink($credentials);
        return response()->json(["message" => 'Reset password link sent on your email.']);
    }public static function resetPassword($credentials)
    {
        $reset_password_status = Password::reset($credentials, function ($user, $password) {
            $user->password = $password;
            $user->save();
        });

        if ($reset_password_status === Password::INVALID_TOKEN) {
            return response()->json(["msg" => "Invalid token provided"], 400);
        }

        return response()->json(["msg" => "Password has been successfully changed"]);
    }
}
