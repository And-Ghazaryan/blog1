<?php

namespace App\Http\Controllers;

use App\Item;

class ItemController extends Controller
{
    public function show($id)
    {
        $item = Item::where('id', '=', $id)->get();
        if (count($item) > 0) {
            foreach ($item as $aa) {
                $type = $aa->type_id;
                $items = Item::where('type_id', '=', $type)->inRandomOrder()->limit(5)->get();
            }
            return view('item', compact('item', 'items'))->withTitle('item');
        }
        return abort(404);
    }
}
