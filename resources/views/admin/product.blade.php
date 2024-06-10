@extends('admin.layout')

@section('title')
Quản trị sản phẩm
@endsection

@section('content')

<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title float-left">Danh sách sản phẩm</h4>

                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Abstack</a></li>
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active">Datatable</li>
                    </ol>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th class="text-center">Giá</th>
                                <th class="text-center">Ngày đăng</th>
                                <th class="text-center">Trạng thái</th>
                                <th class="text-center">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($product_arr as $product)
                            <tr>
                                <td class="text-center"><img src="/client/images/product/{{$product->image}}" height="80"></td>
                                <td><strong>{{$product->name}}</strong></td>
                                <td class="text-center">Giá:{{ number_format($product->price,0,',', '.') }} <br>
                                                        KM :  {{ number_format($product->priceSale,0,',', '.') }}</td>
                                <td class="text-center">{{date('d/m/ Y',strtotime($product->dateSubmitted))}}</td>
                                <td class="text-center">Ẩn hiện: {{($product->anHien==0)? "Đang ẩn":"Đang hiện"}} <br>
                                                        Nổi bật: {{($product->hot==0)? "Bình thường":"Nổi bật"}} </td>
                                <td class="text-center">
                                    <a class="btn btn-outline-info btn-sm" href="{{url('admin/product/'.$product->id.'/edit')}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <!-- <a class="btn btn-danger btn-sm" href="" onclick="return confirm('Bạn có muốm xóa không')"><i class="bx bx-trash me-1"></i> Delete</a> -->
                                    <form class="d-inline" action="{{route('product.destroy', $product->id)}}" method="POST">
                                        @csrf  @method('DELETE')
                                        <button type='submit' onclick="return confirm('Bạn muốn xóa à')" 
                                        class="btn btn-danger btn-sm ms-1" ><i class="bx bx-trash me-1"></i> Xóa</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                            <div class="d-flex justify-content-center m-5">{{ $product_arr->links() }} </div>
                </div>
            </div>
        </div> <!-- end row -->

    </div> <!-- container -->

</div>

@endsection