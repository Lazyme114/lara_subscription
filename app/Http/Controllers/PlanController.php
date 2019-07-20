<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::latest()->get();
        return view('plans.index', compact('plans'));
    }

    public function create()
    {
        return view('plans.create');
    }

    public function store(Request $request)
    {
        $data = $this->formData($request);

        Plan::create($data);

        return redirect()->route('plans.index')->with('alert-success', 'Plan Successfully Created!!');
    }

    public function edit($id)
    {
        $plan = Plan::findOrFail($id);
        return view('plans.edit', compact('plan'));
    }

    public function update(Request $request, $id)
    {
        $plan = Plan::findOrFail($id);
        $data = $this->formData($request);

        $plan->update($data);

        return redirect()->route('plans.index')->with('alert-success', 'Plan Successfully Updated!!');
    }

    public function destroy($id)
    {
        $plan = Plan::findOrFail($id);
        $plan->delete();
        return redirect()->route('plans.index')->with('alert-success', 'Plan Successfully Deleted!!');
    }



    private function formData($request)
    {
        return $request->validate([
            'name' => 'required',
            'duration_type' => 'required',
            'price' => 'required|integer',
            'status' => 'required'
        ]);
    }
}
