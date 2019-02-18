<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['news'] = DB::table('news')
                ->select('title','author','price','intro','category_id','status','vote','images')
                ->get()
                ->toArray();
        return view('news/default',$data);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = DB::table('categories')
                ->select('name','id')
                ->get()
                ->toArray();
        return view('news/add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array(
            'title'=> $request->title,
            'author'=> $request->author,
            'price'=> $request->price,
            'intro'=> $request->intro,
            'status' => $request->status,
            'category_id'=> $request->category_id,
        );
       if ($request->hasFile('images')) {
            $image = $request->file('images');
            $name = time().'.'.$image->getClientOriginalName();
            $destinationPath = public_path('uploads');
            $image->move($destinationPath, $name);
            $data['images'] = $name;
        }
        DB::table('news')->insert($data);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
