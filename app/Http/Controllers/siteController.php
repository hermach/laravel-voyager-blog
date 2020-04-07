<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Emaile;
use App\Contact;
use ILLuminate\Support\Facades\Storage;
use Illuminate\Routing\ResponseFactory;

class siteController extends Controller
{

    public function index(){

        $post1=Post::whereStatus('PUBLISHED')
        ->orderBy('id','desc')->limit(2)
        ->get();    
        $post2=Post::whereStatus('PUBLISHED')
        ->orderBy('id','desc')->offset(2)->limit(4)
        ->get(); 
        $post3=Post::whereStatus('PUBLISHED')
        ->orderBy('id','desc')->offset(6)->take(4)
        ->get(); 
        $post=Post::whereStatus('PUBLISHED')
        ->orderBy('id','desc')->offset(10)->take(12)
        ->get();
 
    $counter=Post::whereStatus('PUBLISHED')
    ->orderBy('Counter','desc')
    ->take(6)
    ->get(); 
     

        return view('blog.index',[
            "post"=>$post,
            "post1"=>$post1,
            "post2"=>$post2,
            "post3"=>$post3,
            "counter"=> $counter,


        ]);
    }

public function detail($category,$slug){
    // $post=Post::whereStatus('PUBLISHED')->get();
    
    $post=Post::whereSlug($slug)->first();
    $post ->counter++;
    $post->save();

    $counter=Post::whereStatus('PUBLISHED')
    ->orderBy('Counter','desc')
    ->take(6)
    ->get();
    return view('blog.detail-blog',[
        "post"=>$post,
        "counter"=> $counter,

    ]);
}
public function books(){

    $post1=Post::whereStatus('PUBLISHED')->whereName_category('BOOKS')
        ->orderBy('id','desc')->limit(2)
        ->get();    
        $post2=Post::whereStatus('PUBLISHED')->whereName_category('BOOKS')
        ->orderBy('id','desc')->offset(2)->limit(4)
        ->get(); 
        $post3=Post::whereStatus('PUBLISHED')->whereName_category('BOOKS')
        ->orderBy('id','desc')->offset(6)->take(4)
        ->get(); 
        $post=Post::whereStatus('PUBLISHED')->whereName_category('BOOKS')
        ->orderBy('id','desc')
        ->paginate(12);  
        $counter=Post::whereStatus('PUBLISHED')
        ->orderBy('Counter','desc')
        ->take(6)
        ->get();
    return view('blog.books',[
        "post"=>$post,
        "post1"=>$post1,
        "post2"=>$post2,
        "post3"=>$post3,  
        "counter"=> $counter,
  
    ]);

}
 public function search(Request $request){

    $search=$request->input('search');
    $post=Post::select('slug','image','title','excerpt','category_id')
                                 ->where('excerpt', 'like', '%' . $search . '%')
                                 ->orWhere('title', 'like', '%' . $search . '%')
                                 ->whereStatus('PUBLISHED')
                                 ->orderBy('id','desc')
                                 ->paginate(12); 
$counter=Post::whereStatus('PUBLISHED')
->orderBy('Counter','desc')
->take(6)
->get(); 
    return view('blog.index3',[
        "post"=>$post,
        "counter"=> $counter,
    ]);
 }   

public function contact(Request $request){
$contact = new Contact();
$contact->objet=$request->input('name');
$contact->Email=$request->input('email');
$contact->Message=$request->input('message');
$contact->save();

    return redirect('/pageContact')->with('success','This contact is saved') ;
}




public function pageContact(){
    return view('blog.contact');
}


public function index2(){
       
    
    $post1=Post::whereStatus('PUBLISHED')->whereName_category('category-2')

    ->orderBy('id','desc')->offset(22)->limit(2)
    ->get();    
    $post2=Post::whereStatus('PUBLISHED')->whereName_category('category-2')
    ->orderBy('id','desc')->offset(24)->limit(4)
    ->get(); 
    $post3=Post::whereStatus('PUBLISHED')->whereName_category('category-2')
    ->orderBy('id','desc')->offset(28)->take(4)
    ->get(); 
    $post=Post::whereStatus('PUBLISHED')->whereName_category('category-2')
    ->orderBy('id','desc')
    ->paginate(10); 
    $counter=Post::whereStatus('PUBLISHED')
        ->orderBy('Counter','desc')
        ->take(6)
        ->get();
    return view('blog.index2',[
        "post"=>$post,
        "post1"=>$post1,
        "post2"=>$post2,
        "post3"=>$post3,
        "counter"=> $counter,

    ]);
}

public function send(Request $request){
    $sub = new Emaile();
   $sub->Mail = $request->input("email");
    $sub->save();
    return redirect('/')->with('msg','d');
}
}
