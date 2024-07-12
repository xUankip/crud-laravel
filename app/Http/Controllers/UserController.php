<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest() -> paginate(5);
        return view('index', compact('users'));
    }
    public function create()
    {
        return view('users.create');
    }
    public function save(Request $request)
    {
        $data = $request->all();
        //mã hóa password
        $data ['password'] = Hash::make($request -> password);
        User::create($data);
        echo "Created User";
    }
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }
    public function update(User $user, Request $request)
    {
        $user -> update($request->all());
        return redirect() -> route('users.index') -> with('success', 'User updated successfully');
    }
}
