<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiController extends Controller
{
    public function test()
    {
    	//query db get name
    	// query db get phone
		return response()->json([
			'name' => 'Lan',
		]);    	
    }
}
