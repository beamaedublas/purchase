<?php

namespace App\Http\Controllers;

use App\Models\PurchasedItem;
use Illuminate\Http\Request;

class PurchasedItemController extends Controller
{
    public function update(Request $request, PurchasedItem $PurchasedItem){
        $fields = $request->validate([
            'date' => 'date',
            'supplier_id' => 'integer',
            'total' => 'decimal',
            'user_id' => 'integer',
        ]);

        $PurchasedItem->update($fields);

        return response()->json([
            'status' => 'OK',
            'message' => 'User with ID#' . $PurchasedItem->id . 'has been update.'
        ]);

    }

    public function store(Request $request, PurchasedItem $purchasedItem){
        $fields = $request->validate([
            'date' => 'required|date',
            'supplier_id' => 'required|integer',
            'total' => 'required|decimal',
            'user_id' => 'required|integer',
        ]);

        $fields['total'] = $request->filled('total') ? $request->input('total') : null;

        $purchasedItem = $purchasedItem->create($fields);



        return response()->json([
            'status' => 'OK',
            'PurchasedItem' => $purchasedItem,
            'message' => 'PurchasedItem with ID#' . $purchasedItem->id . 'has been update.'
        ]);

    }

    public function destroy(PurchasedItem $purchasedItem) {
        $details = $purchasedItem->name;
        $purchasedItem->delete();

        return response()->json([
            'status' => 'OK',
            'message' => "The PurchasedItem  $details has been deleted."
        ]);
    }

    public function index() {
        $purchasedItem = PurchasedItem::orderBy('id')->orderBy('purchasedItem_id')->get();

        return response()->json($purchasedItem);
    }

    public function view(PurchasedItem $purchasedItem) {

        return response()->json($purchasedItem);
    }
}
