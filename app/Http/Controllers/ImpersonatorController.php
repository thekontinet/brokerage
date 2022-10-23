<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImpersonatorController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => ['required', 'exists:users,id']
        ]);
        $id = auth()->id();
        auth('web')->loginUsingId($request->user_id);
        $request->session()->put('impersonator_id', $id);
        return redirect()->route('dashboard');
    }

    public function destroy(Request $request)
    {
        if (!session('impersonator_id')) {
            return abort(401, 'Invalid Request');
        }
        auth('web')->loginUsingId(session('impersonator_id'));
        session()->forget('impersonator_id');
        return redirect()->route('dashboard');
    }
}
