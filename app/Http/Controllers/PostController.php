<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\PutRequest;
use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Posts::paginate(5);
        return view('dashboard.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('id','title');
        $post = new Posts();
        return view('dashboard.post.create', compact('categories','post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        if( isset($data['image'])){
            $data['image'] = $filename = time().".".$data['image']->extension();
            $request->image->move(public_path('image'),$filename);
        }
        // $data = array_merge($request->all(), ['image' => '']);
        Posts::create($request->validated());
        return to_route('post.index')->with('status','Registro creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $post)
    {
        return view('dashboard.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $post)
    {
        $categories = Category::pluck('id','title');
        return view('dashboard.post.edit', compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Posts $post)
    {
        $data = $request->validated();
        if( isset($data['image'])){
            $data['image'] = $filename = time().".".$data['image']->extension();
            $request->image->move(public_path('image'),$filename);
        }
        $post->update($data);
        return to_route('post.index')->with('status','Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $post)
    {
        $post->delete();
        return to_route('post.index')->with('status','Registro eliminado');
    }
}
