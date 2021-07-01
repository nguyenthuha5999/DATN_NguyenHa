@extends('admin_layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <b>Hiển thị loại sản phẩm:
                    <small>{{ $loaisanpham->Tenloai }}</small>
                    </b>
                </header>
                @csrf
                    <div class="panel-body">
                        <div class="position-center">
                        <form action="{{ url('sua_loaisanpham/'.$loaisanpham->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tên Loại Sản Phẩm</label>
                            <input disabled type="text" name="Tenloai" class="form-control" placeholder="Tên Loại Sản Phẩm" value="{{$loaisanpham->Tenloai}}">
                            </div>   
                        </form>
                        </div>
    
                    </div>
            </form>
            </section>

    </div>
    
@endsection