<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService; // Make sure to import the UserService

class UserController extends Controller
{
    public function index(UserService $userService) {
        return $userService->listUsers();
    }

    public function first(UserService $userService) {
        return collect($userService->listUsers())->first();
    }

    public function show(UserService $userService, $id) {
        $user = collect($userService->listUsers())->filter(function ($item) use ($id) {
            return $item['id'] == $id; // If your key is 'ud', replace 'id' with 'ud'
        })->first();

        return $user;
    }
}
