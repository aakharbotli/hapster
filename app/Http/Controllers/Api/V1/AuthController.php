<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginUserRequest;
use App\Http\Requests\Auth\RegisterUserRequest;
use App\Http\Traits\Responsable;
use App\Models\User;
use Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use RateLimiter;

class AuthController extends Controller
{
    use Responsable;


    public function register(RegisterUserRequest $request): JsonResponse
    {
        $user = User::create($request->validated());

        return $this->respondSuccess([
            'user' => $user,
            'access_token' => $user->createToken('MyApp')->accessToken
        ]);

    }

    /**
     * Login api
     *
     * @return Response
     */
    public function login(LoginUserRequest $request): JsonResponse
    {

        $user = User::where('email', $request->login)
            ->orWhere('username', $request->login)
            ->first();

        if (!$user || !\Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'login' => 'wrong credentials',
            ]);
        }

        Auth::login($user, $request->boolean('remember'));

        return $this->respondSuccess([
            'user' => $user,
            'access_token' => $user->createToken('MyApp')->accessToken,
        ]);
    }


    public function logout()
    {
        Auth::guard('api')->user()->tokens()->delete();

        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }
}
