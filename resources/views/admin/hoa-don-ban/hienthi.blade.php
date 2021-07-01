@extends('admin_layout')
@section('content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
    <b>chi tiết hóa đơn bán</b>
    </div>
    <a style="margin-left:1095px;" href="{{url('them_hoadonban')}}"><button type="submit" class="btn btn-info">Thêm</button></a>
    <div class="card-body"> 
        <div class="table-responsive">
            <table border="2px solid;" class="table table-striped" id="products-type-table">
                    <thead>
                        <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Mã Hóa Đơn Bán</th>
                        <th scope="col">Số Lượng Bán</th>
                        <th scope="col">Giá Bán</th>
                        <th scope="col">Mã Sản Phẩm</th>
                        <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                <tbody>
                <?php $i = 1 ?>
                @foreach($hoadonban as $item) 
                    <tr>
                        <th scope="col">{{$i++}}</th>
                        <th scope="col">{{$item->id_maHDB}}</th>
                        <th scope="col">{{$item->Soluongban}}</th>
                        <th scope="col">{{number_format($item->Giaban)}}</th>
                        <th scope="col">{{$item->id_maSP}}</th>
                        <th><a href="#"><i class="fa fa-times text-danger text"></i></a></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </footer>
  </div>
</div>
@endsection