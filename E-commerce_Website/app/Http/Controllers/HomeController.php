<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();

class HomeController extends Controller
{
    public function index(){
    	$all_published_product = DB::table('tbl_products')
            ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
            ->join('tbl_manufacture', 'tbl_products.manufacture_id', '=', 'tbl_manufacture.manufacture_id')
            ->select('tbl_products.*', 'tbl_category.category_name', 'tbl_manufacture.manufacture_name')
            ->where('tbl_products.publication_status',1)
            ->limit(6)
            ->get();

            $manage_published_product = view('pages.home_content')
                ->with('all_published_product', $all_published_product);

            return view('home')
                ->with('pages.home_content', $manage_published_product);
    	//return view('pages.home_content');
    }

    public function show_product_by_category($category_id){
        $product_by_category = DB::table('tbl_products')
            ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
            ->select('tbl_products.*', 'tbl_category.category_name')
            ->where('tbl_category.category_id',$category_id)
            ->limit(12)
            ->get();

            $manage_product_by_category = view('pages.category_by_product')
                ->with('product_by_category', $product_by_category);

            return view('home')
                ->with('pages.category_by_product', $manage_product_by_category);
    }
}
