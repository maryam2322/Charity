<?php


namespace App\Http\Controllers;
use App\Http\Requests\formRequestt;
use App\Models\post;
use App\Models\sponser;
use Illuminate\Http\Request;

use App\Models\form;

class postController
{
 public function index(){
     $posts=post::all();
     $sponsers=sponser::all();
     return view('post',[
     'posts'=>$posts,
         'sponsers'=>$sponsers
     ]);
 }
public function show($slug){
    $post=post::where('slug',$slug)->firstOrFail();
    return view('posts.show',[
        'post'=>$post
    ]);
}








public function contactUs(){
    return view('resources.contact');
}
public function contactUsStore(formRequestt $request){
    $form=form::create([
        'name'=>$request->get('name'),
        'email'=>$request->get('email'),
        'message'=>$request->get('message'),
    ]);
    return redirect('/');
}
}
