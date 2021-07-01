@extends('admin_layout')
@section('content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        <b>quản lý sản phẩm</b>
    </div>
    <div class="card-body">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
              <a style="margin-left:1080px;" href="{{url('them_sanpham')}}"><button type="submit" class="btn btn-info">Thêm</button></a>
                <div class="table-responsive">
                    <table border="2px solid;" class="table table-striped" id="products-type-table">
                        <thead>
                            <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên Sản Phẩm</th>
                            <th scope="col">Mã Loại</th>
                            <th scope="col">Màu Sắc</th>
                            <th scope="col">Kích Cỡ & Chất Liệu</th>
                            <th scope="col">Giá Tiền</th>
                            <th scope="col">Giá Khuyến Mãi</th>
                            <th scope="col">Hình Ảnh</th>
                            <th scope="col">Số Lượng</th>
                            <th scope="col">Sản Phẩm Mới</th>
                            <th scope="col">Hiển Thị</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                     @php 
                     $i = 1 
                     @endphp
                     @foreach($sp as $item) 
                          <tr>
                            <th scope="col">{{$i++}}</th>
                            <th scope="col">{{$item->Tensp}}</th>
                            <th scope="col">{{$item->id_maLoai}}</th>
                            <th scope="col">{{$item->Mausac}}</th>
                            <th scope="col">{{$item->KthuocClieu}}</th>
                            <th scope="col">{{$item->Giatien}}</th>
                            <th scope="col">{{$item->Giakhuyenmai}}</th>
                            <th scope="col"><img src="{{URL::to('frontend/images/'.$item->Hinhanh)}}" height="70" width="70" /></th>
                            <th scope="col">{{$item->Soluong}}</th>
                            <th scope="col">{{$item->Spmoi}}</th>
                            <th><a href="{{url('hienthi_sanpham/'.$item->id)}}"><i class="fa fa-eye text-success text-active"></i></a></th>
                            <th><a href="{{url('sua_sanpham/'.$item->id)}}"><i class="fa fa-pencil text-success text-active"></i></a></th>
                            <th><a href="{{url('sanpham/xoa_sanpham/'.$item->id)}}"><i class="fa fa-times text-danger text"></i></a></th>
                            </tr>
                     @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $sp->links() !!}
            </div>
    </footer>
  </div>
</div>
@endsection
