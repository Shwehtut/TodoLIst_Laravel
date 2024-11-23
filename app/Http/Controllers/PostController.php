<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class PostController extends Controller
{
    //customer home page
    public function create (){
        $posts = Post::orderBy('created_at','desc')->get()->toArray();
        return view('create',compact('posts'));
    }

    //post create
    public function postCreate(Request $request){
       $data = $this->getPostData($request);
       Post::create($data);
    //    return view('create');
        return redirect()->route('post#createPage');
    }

    //post Delete
    public function postDelete($id){
        Post::where('id',$id)->delete();
        return redirect()->route('post#createPage');
    }

    // Create update Page
    public function updatePage($id){
        $post= Post::where('id',$id)->first()->toArray();
        return view('update',compact('post'));
    }

    //edit Page
    public function editPage($id){
        $post = Post::where('id',$id)->first()->toArray();
        return view('edit',compact('post'));
    }

    // Update Post
    public function updatePost(Request $request){
       $updatePost = $this->getPostData($request);
       $id = $request->postId;
       Post::where('id',$id)->update($updatePost);
       return redirect()->route('post#createPage');
    }

    //get post Data
    private function getPostData($request){
        return[
            'title'=> $request->postTitle,
            'description'=> $request->postDescription
        ];
    }
}
