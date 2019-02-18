<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BookController extends Controller
{
	public function index() 
	{
        $data['books'] = DB::table('news')
                ->select('id','title','author','price','intro','category_id','status','vote','images')
                ->get()
                ->toArray();
        return view('home',$data);  

    }
    public function home() {
        if($_GET["cid"] == 0)     
        $data = DB::table('news')
                ->select('id','title','author','price','intro','category_id','status','vote','images')
                ->where('status','>',"0" )
                ->get()
                ->toArray(); else      
        $data = DB::table('news')
                ->select('id','title','author','price','intro','category_id','status','vote','images')
                ->where('status',$_GET['cid'] )
                ->get()
                ->toArray();
        return $data;
    }
    public function vote(Request $request) {
        $id = $request->id;
        $data['vote'] = DB::table('news')
            ->select('vote')
            ->where('id', $id)
            ->get()
            ->toArray();
        DB::table('news')
            ->where('id', $id)
            ->update(['vote' => $data['vote'][0]->vote + 1]);
    }
}