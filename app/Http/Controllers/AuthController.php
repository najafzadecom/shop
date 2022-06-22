<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function attempt(Request $request): \Illuminate\Http\JsonResponse
    {
        if (auth()->attempt($request->only(['email', 'password']))) {
            return response()->json(['success' => true, 'data' => auth()->user()]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(): \Illuminate\Http\JsonResponse
    {
        auth()->logout();
        return response()->json(['success' => true]);
    }

}
