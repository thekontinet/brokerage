<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImpersonatorController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => ['required', 'exists:users,id']
        ]);
        $user = User::find($request->user_id);
        Auth::user()->impersonate($user);
        return redirect()->route('dashboard');
    }

    public function destroy(Request $request)
    {
        $user_id = session('impersonator_id');
        session()->forget(['impersonate', 'impersonator_id']);
        auth('web')->loginUsingId($user_id, true);
        return redirect()->route('dashboard');
    }
}
