<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $user = User::create($request->all());
        return response()->json([
            'user' => $user
        ]);
    }

    public function index()
    {
        $users = User::all();
        // dd($users);
        return response()->json([
            'data' => $users
        ]);
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return response()->json([
            'data' => $user
        ]);
    }
}
