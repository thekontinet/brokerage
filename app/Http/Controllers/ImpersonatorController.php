<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImpersonatorController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => ['required', 'exists:users,id']
        ]);
        $request->session()->put(['impersonate' => $request->user_id, 'impersonator_id' => auth()->id()]);
        return Auth::loginUsingId($request->user_id);
        return redirect()->route('dashboard');
    }

    public function destroy(Request $request)
    {
        $user_id = session('impersonator_id');
        session()->forget(['impersonate', 'impersonator_id']);
        Auth::loginUsingId($user_id);
        return redirect()->route('dashboard');
    }
}
