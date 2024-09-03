<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Sum extends Controller
{
    public static function sum(Request $request)
    {
        return DB::table("user")
            ->sum('age');
    }
}
