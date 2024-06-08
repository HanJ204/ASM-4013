<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use App\Models\Product;
Paginator::useBootstrap();

class HomeController extends Controller
{
    function index(){
        $sphot = product::where('hot', '=', '1')
        ->limit(4)
        ->get();

        $spmoi = product::orderBy('id', 'asc')
        ->limit(8)
        ->get();

        $spxemnhieu = product::orderBy('view', 'desc')
        ->limit(4)
        ->get();

        return view('client.home', [
            'sphot'=>$sphot,
            'spmoi'=>$spmoi,
            'spxemnhieu'=>$spxemnhieu,
        ]);
    }

    function category($id) {

        $category = category::where('id', $id)
        ->first();
        
        $list_product = product::where('idCategory', '=', $id)
        ->orderBy('dateSubmitted', 'desc')
        ->paginate(8)->withQueryString();

        return view('client.category', ['list_product'=>$list_product, 'category' => $category]);
    }

    function detail($id) {
        $detail = product::where('id', $id)
        ->first();
        return view('client.detail', ['detail'=>$detail]);
    }
}
