<?php

namespace App\Http\Controllers;
use App\Models\AB;
use Illuminate\Http\Request;

class ABController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function list($id=null){
        return $id?AB::find($id):AB::all();
     }
     
}