<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function createCookie(Request $request): Response
    {
        return response("Ok", 200)
            ->cookie('User-Id', 'galihroswandi', 1000, '/')
            ->cookie('Is-Member', 'true', 1000, '/');
    }

    public function getCookie(Request $request): JsonResponse
    {
        return response()
            ->json([
                "userId" => $request->cookie('User-Id', 'guest'),
                "isMember" => $request->cookie('Is-Member', 'false'),
            ]);
    }
}