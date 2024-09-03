<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectCustomColumn extends Controller
{
    public static function select(Request $request)
    {
        return DB::table("user")
            ->select("fname", "lname", "age")
            ->get();
    }
}
