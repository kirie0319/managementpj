<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function  create(Request $request)
    {
        $user = User::create($request->all());
        return response()->json([
            'user' => $user
        ]);
    }
}
