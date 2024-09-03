<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectCustomSorting extends Controller
{
    public static function select(Request $request)
    {
        return DB::table("user")
            ->select("fname", "lname", "age")
            ->orderBy("lname", "asc") // OPTION: asc or desc
            ->get();
    }
}
