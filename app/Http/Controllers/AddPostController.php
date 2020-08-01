<?php

namespace App\Http\Controllers;

use App\Image;
use App\Item;
use App\Logo;
use App\User;
use Auth;
use Illuminate\Http\Request;

class AddPostController extends Controller
{
    public function show()
    {
        return view('add')->withTitle('add');
    }

    public function up(Request $request)
    {
        return $path = $request->file('upload_img')->store('uploads', 'public');
    }

    public function up_logo(Request $request)
    {
        return $path = $request->file('upload_logo')->store('uploads_logo', 'public');
    }

    public function create(Request $request)
    {
        $rules = [
            'name' => 'required',
            'address' => 'required',
            'text' => 'required',
            'sel' => 'required',
            'region' => 'required',
            'phone1' => 'required',
        ];

        $this->validate($request, $rules);
        $item = new Item;
        $item->title = $request->name;
        $item->address = $request->address;
        $item->body = $request->text;
        $item->type_id = $request->sel;
        $item->region_id = $request->region;
        $item->user_id = Auth::user()->id;
        $item->phone1 = $request->phone1;
        $item->phone2 = $request->phone2;
        $item->link1 = substr($request->link1, 32, 11);
        $item->viber = $request->viber;
        $item->facebook_url = $request->facebook_url;
        $item->site_url = $request->site_url;
        $item->save();
        if (isset($request->logo)) {
            $logo = new Logo;
            $logo->path_logo = $request->logo;
            $logo->item_id = $item->id;
            $logo->save();
        }
        if (isset($request->file)) {
            foreach ($request->file as $rs) {
                $image = new Image;
                $image->path = $rs;
                $image->item_id = $item->id;
                $image->save();
            }
        }
        return redirect('MyPage');
    }

}
