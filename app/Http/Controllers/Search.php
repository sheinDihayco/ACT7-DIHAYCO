<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Search extends Controller
{
    public static function search($keyword)
    {
        return DB::table("user")
            ->where("lname", $keyword)
            ->get();
    }
}
