<?php

namespace App\Http\Controllers;

use App\Models\LaravelUser;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(): JsonResponse
    {
        return response()->json(['hello_world' => 'Welcome to the API'], Response::HTTP_CREATED);
    }

    public function listUsers(): JsonResponse
    {
        $usersData = [];
        LaravelUser::all()->each(function (LaravelUser $user) use (&$usersData) {
            $usersData[] = [
                'name' => $user->name,
                'email' => $user->email
            ];
        });

        return response()->json($usersData, Response::HTTP_OK);
    }
}
