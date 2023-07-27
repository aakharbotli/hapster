<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        return User::all();
    }

    public function store(CreateUserRequest $request){
        $user = User::create($request->except('avatar'));
        return response()->json($user, 201);
    }

    public function update(UpdateUserRequest $request,User $user){
        $user->update($request->except('avatar'));
        return response()->json($user, 200);
    }

    public function delete(User $user){
        $user->delete();
        return response()->json(null, 204);
    }
}
