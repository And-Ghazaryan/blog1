<?php

namespace App\Http\Controllers;

use App\Item;
use Auth;

class MyPageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function show()
    {
        if (Auth::user()->role == 'user') {
            $user = Auth::user()->id;
            $items = Item::where('user_id', '=', $user)->get();
            return view('user-page', compact('items'))->withTitle('MyPage');
        }

        if (Auth::user()->role == 'is_admin') {
            $items = Item::all();
            return view('admin', compact('items'))->withTitle('MyPage');
        }
    }
}
