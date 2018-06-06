<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;
use App\Product;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$catalogs=Catalog::where('showhide', 'show')->get();
        return view('home',compact('catalogs'));
    }
	public function postIndex()
	{
		if(Auth::guest()){
			$user_id = 0;
		}else{
			$user_id = Auth::user()->id;
		}
		$name = $_POST['name'];
		$price = $_POST['price'];
		$small_body = $_POST['small_body'];
		$body = $_POST['body'];
		$catalog_id = $_POST['catalog_id'];
		$obj = new Product;
		$obj->name = $name;
		$obj->price = $price;
		$obj->url = '';
		$obj->picture = '';
		$obj->small_body = $small_body;
		$obj->body = $body;
		$obj->catalog_id = $catalog_id;
		$obj->user_id = $user_id;
		$obj->save(); 
		return redirect('/home');
	}
}
