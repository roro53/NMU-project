<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = post::get();
        return view('post', compact('posts'));
    }
    public function create_post(Request $request)
    {
       
            $request->validate([
                'title'=> 'required|min:3',
                'description'=> 'required|min:10'
                
            ]);
            
           $Post =new Post();
           $Post->title = request('title');
           $Post->description = request('description');
           $Post->save();
           return redirect('index')->with("success","Post created successfully");
       
    }
    public function edit(int $id)
    {
        $post = Post::findOrFail($id);
        return view('edit', compact('post'));
    }
    public function update(Request $request, int $id)
    {
        $request->validate([
            'title'=> 'required|min:3',
            'description'=> 'required|min:10'
            
        ]);
                    
           
    }
    public function delete(int $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('post')->with('success','Post deleted successfully');
    }



    
    
}
