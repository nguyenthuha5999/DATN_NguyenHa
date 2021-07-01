@extends('admin_layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <b>Thêm sản phẩm</b>
                </header>
                @csrf
                <div class="panel-body">
                    <div class="position-center">
                    <form role="form">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên Sản Phẩm</label>
                            <input type="text" name="Tensp" class="form-control" placeholder="Tên Sản Phẩm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mã Loại</label>
                            <input type="text" name="id_maLoai" class="form-control" placeholder="Tên Loại">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Màu Sắc</label>
                            <input type="text" name="Mausac" class="form-control" placeholder="Màu Sắc">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Kích Cỡ & Chất Liệu</label>
                            <input type="text" name="KthuocClieu" class="form-control" placeholder="Kích Cỡ & Chất Liệu">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Giá Tiền</label>
                            <input type="text" name="Giatien" class="form-control" placeholder="Giá Tiền">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Giá Khuyến Mãi</label>
                            <input type="text" name="Giakhuyenmai" class="form-control" placeholder="Giá Khuyến Mãi">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình Ảnh</label>
                            <input type="file" name="Hinhanh" id="exampleInputFile">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Số Lượng</label>
                            <input type="text" name="Soluong" class="form-control" placeholder="Số Lượng">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô Tả</label>
                            <input type="text" name="Mota" class="form-control" placeholder="Mô Tả">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sản Phẩm Mới</label>
                            <input type="text" name="Spmoi" class="form-control" placeholder="Sản Phẩm Mới">
                        </div>
                        <button type="submit" class="btn btn-info">Thêm</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
    
@endsection