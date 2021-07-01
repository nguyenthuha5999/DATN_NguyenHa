@extends('admin_layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <b>Thêm chi tiết hóa đơn bán</b>
                </header>
                @csrf
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Số Lượng Bán</label>
                                <input type="text" name="Soluongban" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Giá Bán</label>
                                <input type="text" name="Giaban" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mã Hóa Đơn Bán</label>
                                <input type="text" name="id_maHDB" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mã Sản Phẩm</label>
                                <input type="text" name="id_maSP" class="form-control" id="exampleInputEmail1">
                            </div>
                            <button type="submit" class="btn btn-info">Thêm</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
    
@endsection