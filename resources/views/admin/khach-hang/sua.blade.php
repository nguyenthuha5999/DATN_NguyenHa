@extends('admin_layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <b>Sửa khách hàng:
                    <small>{{ $khachhang->Hoten }}</small>
                    </b>
                </header>
                @csrf
                    <div class="panel-body">
                        <div class="position-center">
                        <form action="{{ url('sua_khachhang/'.$khachhang->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Họ Tên</label>
                            <input type="text" name="Hoten" class="form-control" placeholder="Họ Tên" value="{{$khachhang->Hoten}}">
                            </div>   
                            <div class="form-group">
                                <label>Giới Tính</label>
                            <input type="text" name="Gioitinh" class="form-control" placeholder="Giới Tính" value="{{$khachhang->Gioitinh}}">
                            </div> 
                            <div class="form-group">
                                <label>Email</label>
                            <input type="text" name="Email" class="form-control" placeholder="Email" value="{{$khachhang->Email}}">
                            </div> 
                            <div class="form-group">
                                <label>SĐT</label>
                            <input type="text" name="SDT" class="form-control" placeholder="SĐT" value="{{$khachhang->SDT}}">
                            </div> 
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                            <input type="text" name="Diachi" class="form-control" placeholder="Địa Chỉ" value="{{$khachhang->Diachi}}">
                            </div> 
                            <button type="submit" class="btn btn-info">Sửa</button>
                        </form>
                        </div>
    
                    </div>
            </form>
            </section>

    </div>
    
@endsection