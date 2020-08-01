<?php

namespace App\Http\Controllers;

use App\Item;

class AdminController extends Controller
{
    public function show()
    {
        $items = Item::all();
        return view('admin', compact('items'))->withTitle('admin');
    }
}
