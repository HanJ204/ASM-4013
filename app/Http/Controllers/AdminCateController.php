<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\product;
use Illuminate\Support\Str;

use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class AdminCateController extends Controller
{
    public function index()
    {
        $cate_arr = category::orderBy('thuTu', 'asc')->get();
        return view('admin.category', compact('cate_arr'));
    }

    public function create()
    {
        return view('admin.addcate');
    }

    public function store(Request $request)
    {
        $obj = new category;
        $obj->name = ucfirst($request['name']);
        $obj->anHien = $request['anHien'];
        $obj->thuTu = $request['thuTu'];
        $obj->save();
        return redirect(route('cate.index'))->with('success', 'Thêm thành công');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $category = category::find($id);
        return view('admin.editcate', compact('category'));
    }

    public function update(Request $request, string $id)
    {
        $obj = category::find($id);
        $obj->name = $request['name'];
        $obj->thuTu = $request['thuTu'];
        $obj->anHien = $request['anHien'];
        $obj->save();
        return redirect(route('cate.index'))->with('success', 'Cập nhập thành công');
    
    }

    public function destroy(string $id)
    {
        $count_pro = product::where('idCategory', $id)->count();
        if($count_pro > 0){
            return redirect(route('cate.index'))->with('warning', 'Không thể xóa mục này!');
        }
        $category = category::find($id);
        $category->delete();
        return redirect(route('cate.index'))->with('success', 'Xóa thành công');
    
    }
}
