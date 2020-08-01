<?php

namespace App\Http\Controllers;

use App\Image;
use App\Item;
use App\Logo;
use App\User;
use Auth;
use Illuminate\Http\Request;

class EditController extends Controller
{

    public function edit_file(Request $request)
    {
        return $path = $request->file('edit_file')->store('uploads', 'public');
    }

    public function edit_logo(Request $request)
    {
        return $path = $request->file('edit_logo')->store('uploads_logo', 'public');
    }

    public function edit(Request $request)
    {
        $rules = [
            'name' => 'required',
            'address' => 'required',
            'text' => 'required',
            'sel' => 'required',
            'region' => 'required',
        ];

        $this->validate($request, $rules);

        $item = Item::find($request->id);
        $item->title = $request->name;

        $item->address = $request->address;
        $item->body = $request->text;
        $item->type_id = $request->sel;
        $item->region_id = $request->region;
        $item->user_id = Auth::user()->id;
        $item->phone1 = $request->phone1;
        $item->phone2 = $request->phone2;
        if (isset($request->link1)) {
            $item->link1 = substr($request->link1, 32, 11);
        } else {
            $item->link1 = '';
        }
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

    public function show($id)
    {
        $item = Item::find($id);
        return view('edit', compact('item'))->withTitle('edit');
    }

    public function img_delete(Request $request)
    {
        $i = $request->id;
        $image = Image::find($i);
        $image->delete();
        return $image->id;
    }

    public function logo_delete(Request $request)
    {
        $i = $request->id;
        $logo = Logo::find($i);
        $logo->delete();
        return $logo->id;
    }
}
