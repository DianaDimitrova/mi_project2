<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;
use App\Product;
class CatalogController extends Controller
{
	public function getIndex ($id=null) {
		$obj=Catalog::find($id);
		$products = Product::where('catalog_id', $id)->paginate(15);
		return view('catalog',compact('obj', 'products'));
	} 
    
}
