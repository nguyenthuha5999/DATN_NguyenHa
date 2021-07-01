@extends('admin_layout')
@section('content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        <b>quản lý khách hàng</b>
    </div>
    <div class="card-body">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
                <a style="margin-left:1095px;" href="{{url('hienthi_khachhang')}}"><button type="submit" class="btn btn-info">Thêm</button></a>
                <div class="table-responsive">
                    <table border="2px solid;" class="table table-striped" id="products-type-table">
                        <thead>
                            <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Mã Khách Hàng</th>
                            <th scope="col">Họ Tên</th>
                            <th scope="col">Giới Tính</th>
                            <th scope="col">Email</th>
                            <th scope="col">SĐT</th>
                            <th scope="col">Địa Chỉ</th>
                            <th scope="col">Hiển Thị</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                      @php 
                      $i = 1
                      @endphp 
                      @foreach($sp as $sp)
                          <tr>
                            <th scope="col">{{$i++}}</th>
                            <th scope="col">{{$sp->id}}</th>
                            <th scope="col">{{$sp->Hoten}}</th>
                            <th scope="col">{{$sp->Gioitinh}}</th>
                            <th scope="col">{{$sp->Email}}</th>
                            <th scope="col">{{$sp->SDT}}</th>
                            <th scope="col">{{$sp->Diachi}}</th>
                            <th><a href="{{url('hienthi_khachhang/'.$sp->id)}}"><i class="fa fa-eye text-success text-active"></i></a></th>
                            <th><a href="{{url('sua_khachhang/'.$sp->id)}}"><i class="fa fa-pencil text-success text-active"></i></a></th>
                            <th><a href="{{url('khachhang/xoa_khachhang/'.$sp->id)}}"><i class="fa fa-times text-danger text"></i></a></th>
                            </tr>
                      @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection