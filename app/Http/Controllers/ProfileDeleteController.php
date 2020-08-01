<?php

namespace App\Http\Controllers;

use App\Item;
use App\User;

class ProfileDeleteController extends Controller
{
    public function profile_delete($id)
    {
        $items = Item::where('user_id', '=', $id)->get();
        foreach ($items as $item) {
            foreach ($item->images as $image) {
                $image->delete();
            }
            foreach ($item->logo as $logo) {
                $logo->delete();
            }
            $item->delete();
        }
        $user = User::find($id);
        $user->delete();
        return redirect('/');
    }

}
