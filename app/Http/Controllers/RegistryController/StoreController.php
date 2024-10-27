<?php

namespace App\Http\Controllers\RegistryController; 

use App\Models\table_book;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\cartCollection;

class StoreController extends Controller {
    public function setStore() {

        $data = [
            'routeCond' => false,
            'items' => table_book::take(8)->get()
        ];
        if(Auth::check()) {
            $data['routeCond'] = true;
        }

        return view('StorePage', $data);
    }

    public function setItemDetails(Request $request) {
        $bookId = $request->query('item_id');

        $data = [
            'routeCond' => false,
            'book' => table_book::find($bookId)
        ];
        if(Auth::check()) {
            $data['routeCond'] = true;
        }

        return view('Details', $data);
    }

    public function addItemtoGlobalCart(Request $request) {
        $request->validate([
            'quant' => 'required|integer|min:1|max:100',
            'item_id' => 'required|exists:table_books,id', 
        ]);

        $user = Auth::user();

        cartCollection::create([
            'user_id' => $user->id,
            'table_book_id' => $request->input('item_id'),
            'quantity' => $request->input('quant')  
        ]);

        return return redirect()->back();
    }
}