<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateRecord extends Controller
{
    public static function update($id, $age)
    {
        return DB::table("user")
            ->where("dataid", $id)
            ->update([
                "age" => $age
            ]);
    }
}
