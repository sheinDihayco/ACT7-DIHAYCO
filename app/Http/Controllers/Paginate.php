<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Paginate extends Controller
{
    public static function paginate(Request $request)
    {
        return DB::table("user")
            ->orderBy("lname", "asc")
            ->paginate(3);
        /** Record to display per page */
    }
}
