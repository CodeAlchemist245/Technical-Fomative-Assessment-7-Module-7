<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email'
        ]);

        Customer::create($validated);

        return redirect('/customers/create');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);

        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email'
        ]);

        Customer::findOrFail($id)->update($validated);

        return back()->with('success', 'Customer saved successfully.');
    }
}