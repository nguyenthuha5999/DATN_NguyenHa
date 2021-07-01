@extends('admin_layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <b>Hiển thị Sản phẩm:
                    <small>(Mã {{ $sanpham->id }})</small>
                    </b>
                </header>
                @csrf
                    <div class="panel-body">
                        <div class="position-center">
                        <form action="{{ url('hienthi_sanpham/'.$sanpham->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                            <input disabled type="text" name="Tensp" class="form-control" placeholder="Tên Sản Phẩm" value="{{$sanpham->Tensp}}">
                            </div>   
                            <div class="form-group">
                                <label>Mã Loại</label>
                            <input disabled type="text" name="id_maLoai" class="form-control" placeholder="Mã Loại" value="{{$sanpham->id_maLoai}}">
                            </div> 
                            <div class="form-group">
                                <label>Màu Sắc</label>
                            <input disabled disabled type="text" name="Mausac" class="form-control" placeholder="Màu Sắc" value="{{$sanpham->Mausac}}">
                            </div> 
                            <div class="form-group">
                                <label>Kích Thước & Chất Liệu</label>
                            <input disabled type="text" name="KthuocClieu" class="form-control" placeholder="Kích Thước & Chất Liệu" value="{{$sanpham->KthuocClieu}}">
                            </div> 
                            <div class="form-group">
                                <label>Giá Tiền</label>
                            <input disabled type="text" name="Giatien" class="form-control" placeholder="Giá Tiền" value="{{$sanpham->Giatien}}">
                            </div>
                             <div class="form-group">
                                <label>Giá Khuyến Mãi</label>
                            <input disabled type="text" name="Giakhuyenmai" class="form-control" placeholder="Giá Khuyến Mãi" value="{{$sanpham->Giakhuyenmai}}">
                            </div>
                            <div class="form-group">
                                <label>Hình Ảnh</label>
                            <input disabled type="text" name="Hinhanh" class="form-control" placeholder="Hình Ảnh" value="{{$sanpham->Hinhanh}}">
                            </div> 
                            <div class="form-group">
                                <label>Số Lượng</label>
                            <input disabled type="text" name="Soluong" class="form-control" placeholder="Số Lượng" value="{{$sanpham->Soluong}}">
                            </div> 
                            <div class="form-group">
                                <label>Mô Tả</label>
                            <input disabled type="text" name="Mota" class="form-control" placeholder="Mô Tả" value="{{$sanpham->Mota}}">
                            </div>
                             <div class="form-group">
                                <label>Sản Phẩm Mới</label>
                            <input disabled type="text" name="Spmoi" class="form-control" placeholder="Mô Tả" value="{{$sanpham->Spmoi}}">
                            </div>                 
                        </form>
                        </div>
    
                    </div>
            </form>
            </section>

    </div>
    
@endsection