<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Count extends Controller
{
    public static function count(Request $request)
    {
        return DB::table("user")
            ->where("lname", $request['keyword'])
            ->count();
    }
}
