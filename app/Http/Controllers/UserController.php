<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\User\ShowRequest;
use App\Http\Resources\UserResource;


class UserController extends Controller
{
    //
    public function show(ShowRequest $request, $userId)
    {
        $user = User::find($userId);

        return new UserResource($user);
        // return response()->json($users);
    }
}
