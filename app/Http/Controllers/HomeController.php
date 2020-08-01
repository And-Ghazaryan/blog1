<?php

namespace App\Http\Controllers;

use App\Item;

class HomeController extends Controller
{
    public function home()
    {
        $hotels = Item::where('type_id', '=', 1)->inRandomOrder()->limit(4)->get();
        $restaurants = Item::where('type_id', '=', 2)->inRandomOrder()->limit(4)->get();
        // $pools = Item::where('type_id', '=', 5)->inRandomOrder()->limit(4)->get();
        $sportHalls = Item::where('type_id', '=', 5)->inRandomOrder()->limit(4)->get();
        $tourism = Item::where('type_id', '=', 13)->inRandomOrder()->limit(4)->get();
        return view('home', compact('hotels', 'restaurants', 'sportHalls', 'tourism'))->withTitle('Arm-Info.am Անվճար տեղեկատվական կայք');
    }
}
