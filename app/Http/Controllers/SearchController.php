<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function show(Request $request)
    {
        $search = $request->search;
        $items = Item::where('title', 'LIKE', '%' . $search . '%')->get();
        return view('search', compact('items'))->withTitle('search');
    }
}