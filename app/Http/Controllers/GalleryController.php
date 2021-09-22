<?php

namespace App\Http\Controllers;

use App\Http\Middleware\checkPermission;
use App\Models\gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{


    public function index(){
        $gallery=gallery::all();
        return view('resources.gallery',[
            'gallery'=>$gallery,
        ]);
    }
}
