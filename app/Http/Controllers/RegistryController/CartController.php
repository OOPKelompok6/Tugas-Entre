<?php

namespace App\Http\Controllers\RegistryController; 

use App\Models\table_book;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\cartCollection;

class CartController extends Controller {
    public function setCart() {
        $user = Auth::user();

        $items = cartCollection::where('user_id', $user->id)->get();
        $totalPrice = $items->sum(function ($item) {
            return $item->book->price * $item->quantity;
        });

        $data = [
            'routeCond' => false,
            'items' => $items,
            'totalPrice' => $totalPrice
        ];
        if(Auth::check()) {
            $data['routeCond'] = true;
        }

        return view('Cart', $data);
    }

    public function removeItem(Request $request) {
        $user = Auth::user();
        $itemId = $request->input('item_id');

        $deletedRows = CartCollection::where('user_id', $user->id)->where('table_book_id', $itemId)->delete();
        if ($deletedRows > 0) {
            return redirect()->back();
        }

    }

    public function removeAll() {
        $user = Auth::user();
        $deletedRows = CartCollection::where('user_id', $user->id)->delete();

        if ($deletedRows > 0) {
            return redirect()->back();
        }
    }

}