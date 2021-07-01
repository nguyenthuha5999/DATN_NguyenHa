@extends('admin_layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <b>Hiển thị users:
                    <small>{{ $users->Hoten }}</small>
                    </b>
                </header>
                @csrf
                    <div class="panel-body">
                        <div class="position-center">
                        <form action="{{ url('hienthi_users/'.$users->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Họ Tên</label>
                            <input disabled type="text" name="Hoten" class="form-control" placeholder="Họ Tên" value="{{$users->Hoten}}">
                            </div>   
                            <div class="form-group">
                                <label>Email</label>
                            <input disabled type="Email" name="Email" class="form-control" placeholder="Email" value="{{$users->Email}}">
                            </div> 
                            <div class="form-group">
                                <label>Password</label>
                            <input disabled type="Password" name="Password" class="form-control" placeholder="Password" value="{{$users->Password}}">
                            </div> 
                            <div class="form-group">
                                <label>Chức Vụ</label>
                            <input disabled type="text" name="Chucvu" class="form-control" placeholder="Chức Vụ" value="{{$users->Chucvu}}">
                            </div> 
                        </form>
                        </div>
                    </div>
            </form>
            </section>
    </div>
@endsection