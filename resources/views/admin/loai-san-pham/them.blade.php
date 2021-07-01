@extends('admin_layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <b>Thêm loại sản phẩm</b>
                </header>
                @csrf
                    <div class="panel-body">
                        <div class="position-center">
                            <form role="form">
                            <div class="form-group">
                                <label>Tên Loại Sản Phẩm</label>
                                <input type="text" name="tenloai" class="form-control" placeholder="Enter email">
                            </div>   
                            <button type="submit" class="btn btn-info">Thêm</button>
                        </form>
                        </div>
    
                    </div>
            </form>
            </section>

    </div>
    
@endsection