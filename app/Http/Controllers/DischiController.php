<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

include app_path() . '\mock\dischi-array.php';


class DischiController extends Controller
{
    public function index(){
        
        $data= GetArray();


   return view('dischi', compact('data'));

   }
}

?>
