@extends('admin_layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <b>Thêm khách hàng</b>
                </header>
                @csrf
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Họ Tên</label>
                            <input type="text" name="hoten" class="form-control" placeholder="Họ Tên">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Giới Tính</label>
                            <input type="text" name="gioitinh" class="form-control" placeholder="Giới Tính">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="Email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">SĐT</label>
                            <input type="text" name="sdt" class="form-control" placeholder="SĐT">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Địa Chỉ</label>
                            <input type="text" name="diachi" class="form-control" placeholder="Địa Chỉ">
                        </div>
                        <button type="submit" class="btn btn-info">Thêm</button>
                    </form>
                    </div>
                </div>
            </section>

    </div>
    
@endsection