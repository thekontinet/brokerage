<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::all();

        return view('admin.plan.index', compact('plans'));
    }

    public function create()
    {
        return view('admin.plan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required'],
            'type' => ['required'],
            'price' => ['required', 'numeric'],
            'percentage' => ['required', 'numeric'],
            'extra' => ['required'],
        ]);

        Plan::create($data);

        return to_route('admin.plans.index')->banner('Done: New plan added');
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();

        return to_route('admin.plans.index')->banner('Plan Deleted');
    }
}
