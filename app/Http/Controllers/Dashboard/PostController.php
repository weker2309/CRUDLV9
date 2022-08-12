<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;


use App\Models\Category;
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
        $post = Post::paginate(4);
        /*pasar la consulta a la base de datos
        return view('dashboard.post.index', ["post"=>$post] );*/
        return view('dashboard.post.index', compact('post') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* Consulta a la base de datos*/
        /*$categorie = Category::get();*/
        $categorie = Category::pluck('id','title');
        /* le enviaremos la consulta atravez del return view con compact(este contiene toda la consulta
        titulo, categoria, slug, id, etc.*/
        $post = new Post();
        echo view('dashboard.post.create', compact('categorie','post'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
       /* dd(request("title"));*/
       /* echo request("slug");
        /*echo $request->input("content");
        dd($request->all());
        */
       // $validated = $request->validate(StoreRequest::myRules());
        $data = array_merge($request->all(),['image'=>'']);
        /*dd($data);*/
        Post::create($data);
        return to_route("post.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view("dashboard.post.show", compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categorie = Category::pluck('id','title');
        return view('dashboard.post.edit', compact('categorie','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, Post $post)
    {
        //dd($request->validated());
        $post->update($request->validated());
        return to_route("post.update");
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
        return to_route("post.index");
    }
}
