<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Requests\UserRequest;
use App\Http\Resources\AffiliateCreditResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Lang;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Requests\UserUpdateRequest;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function register(UserRequest $request)
    {
        $input = $request->all();
        $input['filiate_code'] = substr(md5(rand(100, 200) . microtime(true)), 0, 6);

        $model = User::create($input);

        $credentials = request(['email', 'password']);

        if(!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json([
            'access_token' => $token,
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'data' => new UserResource($model)
        ]);
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        $credentials = $this->credentials($request);
        $token = JWTAuth::attempt($credentials);

        return $token ?
            ['token' => $token] :
            response()->json(['error' => Lang::get('auth.failed')], 400);
    }

    public function logout()
    {
        auth('api')->logout();
        return response()->json([],204);
    }

    public function refresh()
    {
        $token = auth('api')->refresh();
        return ['token' => $token];
    }

    public function me()
    {
        $user = auth('api')->user();
        return new UserResource($user);
    }

    public function update(UserUpdateRequest $request)
    {
        $user  = auth()->user();
        $user->update( $request->all() );
        return new UserResource($user);
    }

    public function affiliateCredits()
    {
        $user = auth('api')->user();
        $credits = $user->credits()->orderBy('id', 'desc')->get();

        return AffiliateCreditResource::collection($credits);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function username()
    {
        return 'email';
    }
}
