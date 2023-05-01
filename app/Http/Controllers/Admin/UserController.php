<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $users = User::with('wallet')->paginate(20);
        return view('admin.user.index', compact('users'));
    }

    public function edit(User $user){
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, User $user){
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'ignore_kyc' => ['nullable', 'numeric']
        ]);

        $user->update($data);

        return back()->banner('User account updated successfully');
    }

    public function show(User $user){
        return view('profile.show', compact('user'));
    }

    public function destroy(User $user){
        $user->delete();
        return to_route('admin.users.index');
    }
}
