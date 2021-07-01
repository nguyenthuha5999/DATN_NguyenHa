@extends('admin_layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <b>Sửa hóa đơn bán:
                    <small>{{ $hoadonban->id }}</small>
                    </b>
                </header>
                @csrf
                    <div class="panel-body">
                        <div class="position-center">
                        <form action="{{ url('sua_hoadonban/'.$hoadonban->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Ngày Bán</label>
                            <input type="datetime" name="Ngayban" class="form-control" placeholder="Ngày Bán" value="{{$hoadonban->Ngayban}}">
                            </div>   
                            <div class="form-group">
                                <label>Mã Khách Hàng</label>
                            <input type="text" name="id_maKH" class="form-control" placeholder="Mã Khách Hàng" value="{{$hoadonban->id_maKH}}">
                            </div> 
                            <div class="form-group">
                                <label>Tổng Tiền</label>
                            <input type="text" name="Tongtien" class="form-control" placeholder="Tổng Tiền" value="{{$hoadonban->Tongtien}}">
                            </div> 
                            <div class="form-group">
                                <label>Trạng Thái</label>
                            <input type="text" name="Trangthai" class="form-control" placeholder="Trạng Thái" value="{{$hoadonban->Trangthai}}">
                            </div> 
                            <button type="submit" class="btn btn-info">Sửa</button>
                        </form>
                        </div>
    
                    </div>
            </form>
            </section>

    </div>
    
@endsection