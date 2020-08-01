<?php

namespace App\Http\Controllers;

use App\Item;

class DeleteController extends Controller
{
    public function delete($id)
    {
        $item = Item::find($id);
        foreach ($item->images as $image) {
            $image->delete();
        }
        foreach ($item->logo as $logo) {
            $logo->delete();
        }
        $item->delete();
        return redirect('MyPage');
    }
}
