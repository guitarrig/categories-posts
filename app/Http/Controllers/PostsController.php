<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){

      $this->middleware(['auth', 'web']);

     }

    public function index()
    {
        $posts = Post::all();
        return view('posts.all', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('posts.create', ['categoryId' => $request->categoryId]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = ['name' => 'required|min:4',
                  'description' => 'required|min:4'
                  ];

        $this->validate($request, $rules);
        $request->flash();

        Post::create(['name' => $request->name,
                      'description' => $request->description,
                      'category_id' => $request->category_id
                    ]);
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        if ($post) {
          return view('posts.show', ['post' => $post]);
        }else{
        return redirect('/posts');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $rules = ['name' => 'required|min:4',
                'description' => 'required|min:4'
                ];

      $this->validate($request, $rules);
      $request->flash();

        $post = Post::find($id);
        $post->name = $request->name;
        $post->description  = $request->description;
        $post->category_id = $request->category_id;
        $post->save();
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return redirect('/posts');
    }
}
