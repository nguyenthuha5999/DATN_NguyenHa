@extends('admin_layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <b>Thêm users</b>
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
                            <label for="exampleInputPassword1">Email</label>
                            <input type="Email" name="email" class="form-control"  placeholder="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control"  placeholder="password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Chức Vụ</label>
                            <input type="text" name="chucvu" class="form-control"  placeholder="Chức Vụ">
                        </div>
                        <button type="submit" class="btn btn-info">Thêm</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
    
@endsection