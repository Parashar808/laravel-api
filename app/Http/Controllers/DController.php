<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DC;

class DController extends Controller
{
    //
    function add(request $req){
        $DC = new DC;
        $DC->name=$req->name;
        $DC->address=$req->address;
        $result=$DC->save();
        if($result){
        return ["added successfully"];

        }
        else{
            return ["error"];
        }

    }
    function update(request $req){
        $DC= DC::find($req->id);
        $DC->name=$req->name;
        $DC->address=$req->address;
        $result=$DC->save();
        if($result){
        return ["updated successfully"];

        }
        else{
            return ["error"];
        }
    }

    function search($name){
        return DC::where("name","like","%".$name."%")->get();

    }

    function delete($id){
        $DC=DC::find($id);
        $result=$DC->delete();
        if($result){
            return ["deleted successfully"];
        }
        else{
            return ["error"];

        }
    }
}
