<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function update(Request $request, Supplier $supplier){
        $fields = $request->validate([
            'company_name' => 'integer',
            'address' => 'string',
            'phone' => 'string',
            'contact_person' => 'string',
        ]);

        $supplier->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'Supplier with ID#' . $supplier->id . 'has been update.'
        ]);

    }

    public function store(Request $request, Supplier $supplier){
        $fields = $request->validate([
            'company_name' => 'required|integer',
            'address' => 'required|string',
            'phone' => 'required|string',
            'contact_person' => 'required|string',
        ]);

        $fields['sale_id'] = $request->filled('sale_id') ? $request->input('sale_id') : null;

        $supplier = $supplier->create($fields);



        return response()->json([
            'status' => 'OK',
            'Supplier' => $supplier,
            'message' => 'Supplier with ID#' . $supplier->id . 'has been update.'
        ]);

    }

    public function destroy(Supplier $supplier) {
        $details = $supplier->name;
        $supplier->delete();

        return response()->json([
            'status' => 'OK',
            'message' => "The Supplier  $details has been deleted."
        ]);
    }

    public function index() {
        $supplier = Supplier::orderBy('company_name')->get();

        return response()->json($supplier);
    }

    public function view(Supplier $supplier) {

        return response()->json($supplier);
    }
}
