<?php

namespace App\Http\Controllers;

use App\Item;

class PagesController extends Controller
{
    public function hotels()
    {
        $hotels = Item::where('type_id', '=', 1)->paginate(20);
        return view('categories.hotels', compact('hotels'))->withTitle('hotels');
    }

    public function restaurants()
    {
        $restaurants = Item::where('type_id', '=', 2)->paginate(20);
        return view('categories.restaurants', compact('restaurants'))->withTitle('restaurants');
    }

    public function kindergartens()
    {
        $kindergartens = Item::where('type_id', '=', 3)->paginate(20);
        return view('categories.kindergartens', compact('kindergartens'))->withTitle('kindergartens');
    }

    public function pools()
    {
        $pools = Item::where('type_id', '=', 4)->paginate(20);
        return view('categories.pools', compact('pools'))->withTitle('pools');
    }

    public function sporthalls()
    {
        $sporthalls = Item::where('type_id', '=', 5)->paginate(20);
        return view('categories.sport-halls', compact('sporthalls'))->withTitle('sporthalls');
    }

    public function banks()
    {
        $banks = Item::where('type_id', '=', 6)->paginate(20);
        return view('categories.banks', compact('banks'))->withTitle('banks');
    }

    public function clubs()
    {
        $clubs = Item::where('type_id', '=', 7)->paginate(20);
        return view('categories.clubs', compact('clubs'))->withTitle('clubs');
    }

    public function beautyShop()
    {
        $beautyShops = Item::where('type_id', '=', 8)->paginate(20);
        return view('categories.beauty-shop', compact('beautyShops'))->withTitle('beauty-shop');
    }

    public function taxi()
    {
        $taxiAll = Item::where('type_id', '=', 9)->paginate(20);
        return view('categories.taxi', compact('taxiAll'))->withTitle('taxi');
    }

    public function cafe()
    {
        $cafeAll = Item::where('type_id', '=', 10)->paginate(20);
        return view('categories.cafe', compact('cafeAll'))->withTitle('cafe');
    }

    public function shop()
    {
        $shopAll = Item::where('type_id', '=', 11)->paginate(20);
        return view('categories.shop', compact('shopAll'))->withTitle('shop');
    }

    public function bar()
    {
        $barAll = Item::where('type_id', '=', 12)->paginate(20);
        return view('categories.bar', compact('barAll'))->withTitle('bar');
    }

    public function tourism()
    {
        $tourismAll = Item::where('type_id', '=', 13)->paginate(20);
        return view('categories.tourism', compact('tourismAll'))->withTitle('btourismar');
    }

    public function cinema()
    {
        $cinemaAll = Item::where('type_id', '=', 14)->paginate(20);
        return view('categories.cinema', compact('cinemaAll'))->withTitle('cinema');
    }

    public function pharmacies()
    {
        $pharmacies = Item::where('type_id', '=', 15)->paginate(20);
        return view('categories.pharmacies', compact('pharmacies'))->withTitle('pharmacies');
    }

    public function truckingIndustry()
    {
        $truckingindustryAll = Item::where('type_id', '=', 16)->paginate(20);
        return view('categories.truckingindustry', compact('truckingindustryAll'))->withTitle('truckingindustry');
    }
}
