<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DischiController extends Controller
{
    public function index(){

        $data_path = (app_path() . '/mock/dischi-array.php');
        
        $datareplaced_path = str_replace('\\', '/', $data_path);
        
        include $datareplaced_path;
        
        $data= $music_array['response'];


   return view('dischi', compact('data'));

   }
}
