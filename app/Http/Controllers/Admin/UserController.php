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

    public function show(User $user){
        return view('profile.show', compact('user'));
    }
}
