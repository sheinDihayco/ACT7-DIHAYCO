<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertRecord extends Controller
{
    public static function insert($fname, $lname, $age)
    {
        $created = DB::table("user")->insert([
            "fname" => $fname,
            "lname" => $lname,
            "age"   => $age,
        ]);

        if ($created) {
            return [
                "success"   => true,
                "message"   => "Successfully registered"
            ];
        } else {
            return [
                "success"   => false,
                "message"   => "Fail to register, try again later."
            ];
        }
    }
}
