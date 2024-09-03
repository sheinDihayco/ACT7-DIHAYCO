<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetRecord extends Controller
{
    public static function getAll(Request $request) {
        return DB::table("user")
        ->get();
    }

    public static function getByID($id) {
        return DB::table("user")
        ->where("dataid", $id)
        ->get();
    }
}
