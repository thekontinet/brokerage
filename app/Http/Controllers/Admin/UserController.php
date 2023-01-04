<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

//TODO: Write test for this controller
class UserController extends Controller
{
    public function index(){
        $users = User::with('wallet')->paginate(20);
        return view('admin.user.index', compact('users'));
    }

    public function show(User $user){
        return view('profile.show', compact('user'));
    }

    public function update(User $user){
        $user->disable(!$user->is_blocked);
        return redirect()->route('admin.users.index');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('admin.users.index')->banner('Account Deleted');
    }
}
