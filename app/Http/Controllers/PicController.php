<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PicController extends Controller
{
    //
    function pic(Request $req){
        $result=$req->file('photo')->store('photofolder');
        return($result);
    }
}
