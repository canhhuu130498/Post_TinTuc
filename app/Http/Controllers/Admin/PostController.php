<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    /**
     *
     *
     * @return View
     */
    public function index(): View
    {
        //
        $post = Post::paginate(8);
        return view('admin.home.index',compact('post'))->with('i', (request()->input('page', 1) - 1) * 10);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $create= new Post;
       $title = $request->input('title');
       $content= $request->input('content');
       $author=$request->input('author');
       $createdate=$request->input('createdate');
       $create->insert([
           'title' => $title,
           'content' => $content,
           'author' => $author,
           'createdate'=> now(),
       ]);
       action([PostController::class, 'create']);
       return Redirect::action([PostController::class, 'create']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $detail = Post::where('id', '=', $id)->select('*')->first();
        $post = Post::paginate(8);
        return view('admin.detail.index', compact('detail','post'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
