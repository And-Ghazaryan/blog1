<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function update_password(Request $request)
    {
        $p = Auth::user()->password;
        if (Hash::check($request->old_password, $p)) {
            $a = $request->user()->fill([
                'password' => Hash::make($request->newPassword),
            ])->save();
            echo 'գաղտնապառը հայողությամբ փոխված է';
        } else {
            return 'ընթացիկ գաղտնաբառը սխալ է';
        }
    }
}