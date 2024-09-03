<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteRecord extends Controller
{
    public static function deleteByID($id) {
        $is_deleted = DB::table("user")
        ->where("dataid", $id)
        ->delete();

        if($is_deleted) {
            return [
                "success" => true,
                "message" => "User successfully deleted"
            ];
        }
        else {
            return [
                "success" => false,
                "message" => "Fail to delete"
            ];
        }
    }
}
