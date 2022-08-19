<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Http\Requests\Category\PutRequest;
use App\Http\Requests\Category\StoreRequest;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $categories = Category::paginate(4);
        /*pasar la consulta a la base de datos
        return view('dashboard.category.index', ["category"=>$category] );*/
        return view('dashboard.category.index', compact('categories') );
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
        /* le enviaremos la consulta atravez del return view con compact(este contiene toda la consulta
        titulo, categoria, slug, id, etc.*/
        $category = new Category();
        echo view('dashboard.category.create', compact('category'));
        
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
        Category::create($data);
        return to_route("category.index");
    }

   
    public function show(Category $category)
    {
        return view("dashboard.category.show", compact('category'));
    }

    public function edit(Category $category)
    {
        
        return view('dashboard.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, Category $category)
    {
       
        $category->update($request->validated());
        return to_route("category.index")->with('status',"Registro Actualizado");
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return to_route("category.index");
    }
}
