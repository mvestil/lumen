<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showDeviceGroups(Request $request, $user_id) {
        $model = User::findOrFail($user_id);
        //echo "<pre>";
        //print_r($model);

        return response()->json($model);
    }
}
