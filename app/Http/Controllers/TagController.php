<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use \Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Tag;
use DB;


class TagController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = DB::table('tag')->orderBy('updated_at', 'desc')->get();
        return view('dashboard.tag.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = new Tag();

        $tag->id = Str::uuid();
        $tag->tag = $request->input('tag');

        $tag->save(); //Lưu lại

        return redirect('tag');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id); 
        return view('dashboard.tag.edit',compact('tag'));
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
        $tag = Tag::find($id); 
        $tag->tag = $request->input('tag');
        $tag->updated_at = Carbon::now();

        $tag->save(); //Lưu lại
        return redirect('tag');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $tag = Tag::find($id=$id);
     $tag->delete();

     return redirect()->route('tag');
 }
}
