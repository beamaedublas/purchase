<?php

namespace App\Http\Controllers;

use App\Models\SoldItem;
use Illuminate\Http\Request;

class SoldItemController extends Controller
{
    public function update(Request $request, SoldItem $soldItem){
        $fields = $request->validate([
            'merchandise_id' => 'integer',
            'sale_id' => 'integer',
            'qty' => 'integer',
            'selling_price' => 'decimal',
        ]);

        $soldItem->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'sold item with ID#' . $soldItem->id . 'has been update.'
        ]);

    }

    public function store(Request $request, SoldItem $soldItem){
        $fields = $request->validate([
            'merchandise_id' => 'required|integer',
            'sale_id' => 'required|integer',
            'qty' => 'required|integer',
            'selling_price' => 'required|decimal',
        ]);

        $fields['sale_id'] = $request->filled('sale_id') ? $request->input('sale_id') : null;

        $soldItem = $soldItem->create($fields);



        return response()->json([
            'status' => 'OK',
            'SoldItem' => $soldItem,
            'message' => 'SoldItem with ID#' . $soldItem->id . 'has been update.'
        ]);

    }

    public function destroy(SoldItem $soldItem) {
        $details = $soldItem->name;
        $soldItem->delete();

        return response()->json([
            'status' => 'OK',
            'message' => "The SoldItem  $details has been deleted."
        ]);
    }

    public function index() {
        $soldItem = SoldItem::orderBy('id')->orderBy('sold_id')->get();

        return response()->json($soldItem);
    }

    public function view(SoldItem $soldItem) {

        return response()->json($soldItem);
    }
}
