<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\HomeModel;
use DB;
class WebhomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    public function index()
	{
        $product = DB::table('product')->orderBy('id')->get();
        return view('website.home',compact('product'));
    }
}
