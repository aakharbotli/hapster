<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCapturerORAdminRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Traits\Responsable;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends ApiController
{
    use Responsable;
    public function index(){
        return User::all();
    }

    public function createCapturerOrAdmin(CreateCapturerORAdminRequest $request){
        $user = new User($request->except('avatar'));
        if ($request->hasFile('avatar'))
        $user->avatar = Storage::disk('public')->put('users', $request->file('avatar'));

        return $this->respondSuccess($user,[],201);
    }


    public function createTrainer(CreateCapturerORAdminRequest $request){
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
