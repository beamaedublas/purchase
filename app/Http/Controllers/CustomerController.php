<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function update(Request $request, Customer $customer){
        $fields = $request->validate([
            'name' => 'string',
            'address' => 'string',
            'phone' => 'string',
            'balance' => 'decimal',
        ]);

        $customer->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'User with ID#' . $customer->id . 'has been update.'
        ]);

    }

    public function store(Request $request, Customer $customer){
        $fields = $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'balance' => 'required|decimal',
        ]);

        $fields['phone'] = $request->filled('phone') ? $request->input('phone') : null;

        $customer = $customer->create($fields);



        return response()->json([
            'status' => 'OK',
            'customer' => $customer,
            'message' => 'customer with ID#' . $customer->id . 'has been update.'
        ]);

    }

    public function destroy(Customer $customer) {
        $details = $customer->name;
        $customer->delete();

        return response()->json([
            'status' => 'OK',
            'message' => "The user  $details has been deleted."
        ]);
    }

    public function index() {
        $customer = Customer::orderBy('name')->get();

        return response()->json($customer);
    }

    public function view(Customer $customer) {

        return response()->json($customer);
    }
}
