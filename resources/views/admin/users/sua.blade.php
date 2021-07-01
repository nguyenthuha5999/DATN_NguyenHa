@extends('admin_layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <b>Sửa Users:
                    <small>{{ $users->Hoten }}</small>
                    </b>
                </header>
                @csrf
                    <div class="panel-body">
                        <div class="position-center">
                        <form action="{{ url('sua_users/'.$users->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Họ Tên</label>
                            <input type="text" name="Hoten" class="form-control" placeholder="Họ Tên" value="{{$users->Hoten}}">
                            </div>   
                            <div class="form-group">
                                <label>Email</label>
                            <input type="Email" name="Email" class="form-control" placeholder="Email" value="{{$users->email}}">
                            </div> 
                            <div class="form-group">
                                <label>Password</label>
                            <input type="Password" name="Password" class="form-control" placeholder="Password" value="{{$users->password}}">
                            </div> 
                            <div class="form-group">
                                <label>Chức Vụ</label>
                            <input type="text" name="Chucvu" class="form-control" placeholder="Chức Vụ" value="{{$users->Chucvu}}">
                            </div> 
                            <button type="submit" class="btn btn-info">Sửa</button>
                        </form>
                        </div>
    
                    </div>
            </form>
            </section>

    </div>
    
@endsection