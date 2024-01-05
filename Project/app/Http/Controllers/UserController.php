<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showUsersWithRoleOne()
    {
        $users = User::where('role_user', 1)->get();
        return view('kdosen', ['users' => $users]);
    }
}
