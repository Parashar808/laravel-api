<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DC;
use Validator;


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

    function save(Request $req){
        $rules=array(
            "address"=>"required|min:2|max:50"
        );
        $validator= Validator::make($req->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),401);
        }
        else{
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
    } 
}
