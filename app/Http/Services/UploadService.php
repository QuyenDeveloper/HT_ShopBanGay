<?php

namespace App\Http\Services;

use mysql_xdevapi\Exception;

class UploadService
{
 public function store($request){

    if($request->hasfile('file')){
        try {
            $name = $request->file('file')->getClientOriginalName();
            $pathFull = 'uploads/' . date("Y/m/d");
            $path = $request->file('file')->storeAs(
                'public/' . $pathFull , $name
            );
            return '/storage/' . $pathFull.'/'. $name;
        }catch (\Exception $error){
            return false;
        }

    }
 }
}
