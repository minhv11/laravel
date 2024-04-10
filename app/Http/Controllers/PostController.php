<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);

        $fileName = time().'.'.$request->image->extension();  
        
        // dd($fileName);

        $request->image->move(public_path('uploads'), $fileName);

        $Post=new Post();
        $Post->title = $request->title;
        $Post->body = $request->body;
        $Post->image = $fileName;
        $Post->save();

        // Post::create($request->all());

        return redirect()->route('posts.index')->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
      return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        // dd($id);
        

        $Post= Post::findOrFail($id);
        $Post->title = $request->title;
        $Post->body = $request->body;
        if($request->hasFile('image')){
            $fileName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('uploads'), $fileName);
            $Post->image = $fileName;
        }
      
        $Post->save();

        return redirect()->route('posts.index')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      $post->delete();

       return redirect()->route('posts.index')
                       ->with('success','post deleted successfully');
    }
}