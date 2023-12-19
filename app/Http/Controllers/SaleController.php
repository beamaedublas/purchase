<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function update(Request $request, Sale $sale){
        $fields = $request->validate([
            'customer_id' => 'integer',
            'date' => 'date',
            'is_credit' => 'tinyinteger',
            'user_id' => 'integer',
        ]);

        $sale->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'User with ID#' . $sale->id . 'has been update.'
        ]);

    }

    public function store(Request $request, Sale $sale){
        $fields = $request->validate([
            'customer_id' => 'required|integer',
            'date' => 'required|date',
            'is_credit' => 'required|tinyinteger',
            'user_id' => 'required|integer',
        ]);

        $fields['user_id'] = $request->filled('user_id') ? $request->input('user_id') : null;

        $sale = $sale->create($fields);



        return response()->json([
            'status' => 'OK',
            'Sale' => $sale,
            'message' => 'Sale with ID#' . $sale->id . 'has been update.'
        ]);

    }

    public function destroy(Sale $sale) {
        $details = $sale->name;
        $sale->delete();

        return response()->json([
            'status' => 'OK',
            'message' => "The Sale  $details has been deleted."
        ]);
    }

    public function index() {
        $sale = Sale::orderBy('id')->orderBy('sale_id')->get();

        return response()->json($sale);
    }

    public function view(Sale $sale) {

        return response()->json($sale);
    }
}
