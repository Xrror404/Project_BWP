<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function showUsersWithRoleOne()
    {
        $users = User::where('role_user', 1)->get();
        return view('kdosen', ['users' => $users]);
    }

    public function create()
    {
        return view('tambahmhs');
    }

    // Handle the form submission

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'id_user' => 'required|max:10',
            'id_jurusan' => 'required|integer',
            'nama_user' => 'required|max:50',
            'email_user' => 'required|email|max:50',
            'nmrtlp' => 'nullable|max:12',
            'role_user' => 'required|integer',
            'user_username' => 'required|max:30',
            'user_password' => 'required|min:3',
            'user_added_date' => 'required|date',
        ]);

        // Hash the password
        $validatedData['user_password'] = Hash::make($validatedData['user_password']);

        // Create the user
        User::create($validatedData);

        // Redirect back or to another page
        return redirect()->route('create')->with('success', 'User created successfully!');
    }
}
