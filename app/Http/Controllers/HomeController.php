<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();
use DB;

class HomeController extends Controller
{
    function index(){
        $sphot = DB::table('products')
        ->where('hot', '=', '1')
        ->limit(4)
        ->get();

        $spmoi = DB::table('products')
        ->orderBy('id', 'asc')
        ->limit(8)
        ->get();

        $spxemnhieu = DB::table('products')
        ->orderBy('view', 'desc')
        ->limit(4)
        ->get();

        return view('home', [
            'sphot'=>$sphot,
            'spmoi'=>$spmoi,
            'spxemnhieu'=>$spxemnhieu,
        ]);
    }

    function category($id) {

        $category = DB::table('category')
        ->where('id', $id)
        ->first();
        
        $list_product = DB::table('products')
        ->where('idCategory', '=', $id)
        ->orderBy('dateSubmitted', 'desc')
        ->paginate(8)->withQueryString();

        return view('category', ['list_product'=>$list_product, 'category' => $category]);
    }

    function detail($id) {
        $detail = DB::table('products')
        ->where('id', $id)
        ->first();
        return view('detail', ['detail'=>$detail]);
    }
}
