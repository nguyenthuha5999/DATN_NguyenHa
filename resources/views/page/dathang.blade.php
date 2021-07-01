@extends('layout_home')
@section('content')
<section>
	<div class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="page-heading">
						<div class="page-header-heading padB10">
							<h3>Thanh Toán Đơn Hàng</h3>
						</div>
						<div class="breadcrum-box">
							<ul class="breadcrum">
							<li><a href="{{('/')}}">Trang chủ</a></li>
								<li class="active"><a href="#">Thanh toán</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--//================Breadcrumb section end==============//-->
<!--//================checkout section start==============//-->
<div class="checkout-section padTB60">
	<div class="container">
	<form action="{{route('dathang')}}" method="post">
		@csrf
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="customer-returing bg-color">
					<h5>Bạn đã có tài khoản ?<a class="showlogin"> Click để đăng nhập </a></h5>
				</div>
				<div class="login" style="display:none;">
					<div class="row">
					<form method="post" >
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="login-form">
									<p>Nếu bạn đã mua sắm với chúng tôi trước đây, vui lòng nhập thông tin của bạn vào các ô bên dưới. Nếu bạn là khách hàng mới, vui lòng tiếp tục & phần thanh toán.</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="user-name">
									<label class="billing-information" for="username">Email <sup><i class="fa fa-star" aria-hidden="true"></i></sup></label>
									<input type="text" name="user_name" id="username">
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="user-name">
									<label class="billing-information" for="passwords"> password <sup><i class="fa fa-star" aria-hidden="true"></i></sup></label>
									<input type="text"  name="user_name" id="passwords">
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="order-button">
									<div class="row">
										<div class="col-md-3 col-sm-4 col-xs-12">
											<a href="#" class="template-button">Đăng nhập</a>
										</div>
										<div class="col-md-9 col-sm-8 col-xs-12">
											<div class="log-in-remember remember_me">
												<input type="checkbox" value="/1">
												<label>Nhớ đăng nhập</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="bil-detail padT30">
					<div class="row">
						@if(Session::has('thongbao'))
						<div class=" alert alert-success">
						<h5>{{ Session::get('thongbao') }}</h5>
					    </div>
						@endif
					</div>
					<h4>Thông Tin đặt hàng của bạn ?</h4>
					<div class="bill-contact-detail">
						<div class="row">
							<div class="col-md-12">
								<label>Họ Tên <sup><i class="fa fa-star" aria-hidden="true"></i></sup></label>
								<input type="text" placeholder="Nhập Họ Tên" class="marB20" name="hoten" required>
							</div>
							<div class="col-md-12">
								<label>giới tính <sup><i class="fa fa-star" aria-hidden="true"></i></sup></label>
								<select name="gioitinh" class="marB20">
									<option value="Nam">Nam </option>
									<option value="Nữ">Nữ </option>
									<option value="Khác">Khác </option>
								</select>
							</div>
							<div class="col-md-12">
								<label>email <sup><i class="fa fa-star" aria-hidden="true"></i></sup></label>
								<input type="email" placeholder="Nhập Email" class="marB20" name="email" required> 
							</div>
							<div class="col-md-12">
								<label>số điện thoại <sup><i class="fa fa-star" aria-hidden="true"></i></sup></label>
								<input type="text" placeholder="Nhập SĐT" class="marB20" name="sdt" required>
							</div>
							<div class="col-md-12">
								<label>địa chỉ <sup><i class="fa fa-star" aria-hidden="true"></i></sup></label>
								<select name="diachi" class="marB20">
									<option value="Hà Nội">Hà Nội </option>
									<option value="TP.Hồ Chí Minh">TP. Hồ Chí Minh </option>
									<option value="An Giang">An Giang </option>
									<option value="Bà rịa – Vũng tàu">Bà rịa – Vũng tàu </option>
									<option value="Bắc Giang">Bắc Giang </option>
									<option value="Bắc Kạn">Bắc Kạn </option>
									<option value="Bạc Liêu">Bạc Liêu </option>
									<option value="Bắc Ninh">Bắc Ninh </option>
									<option value="Bến Tre">Bến Tre </option>
									<option value="Bình Định">Bình Định </option>
									<option value="Bình Dương">Bình Dương </option>
									<option value="Bình Phước">Bình Phước </option>
									<option value="Bình Thuận">Bình Thuận </option>
									<option value="Cà Mau">Cà Mau </option>
									<option value="Cần Thơ">Cần Thơ </option>
									<option value="Cao Bằng">Cao Bằng  </option>
									<option value="Đà Nẵng">Đà Nẵng </option>
									<option value="Đắk Lắk">Đắk Lắk </option>
									<option value="Đắk Nông">Đắk Nông </option>
									<option value="Điện Biên">Điện Biên </option>
									<option value="Đồng Nai">Đồng Nai </option>
									<option value="Đồng Tháp">Đồng Tháp </option>
									<option value="Gia Lai">Gia Lai </option>
									<option value="Hà Giang">Hà Giang </option>
									<option value="Hà Nam">Hà Nam </option>
									<option value="Hà Tĩnh">Hà Tĩnh </option>
									<option value="Hải Dương">Hải Dương </option>
									<option value="Hải Phòng">Hải Phòng </option>
									<option value="Hậu Giang">Hậu Giang </option>
									<option value="Hòa Bình">Hòa Bình </option>
									<option value="Hưng Yên">Hưng Yên </option>
									<option value="Khánh Hòa">Khánh Hòa </option>
									<option value="Kiên Giang">Kiên Giang </option>
									<option value="Kon Tum">Kon Tum </option>
									<option value="Lai Châu">Lai Châu </option>
									<option value="Lâm Đồng">Lâm Đồng </option>
									<option value="Lạng Sơn">Lạng Sơn </option>
									<option value="Lào Cai">Lào Cai </option>
									<option value="Long An">Long An </option>
									<option value="Nam Định">Nam Định </option>
									<option value="Nghệ An">Nghệ An </option>
								</select>
								<input type="text" required placeholder="Địa chị cụ thể" class="marB20" name="diachi">
							</div>
							<div class="col-md-12">
								<label>hình thức thanh toán <sup><i class="fa fa-star" aria-hidden="true"></i></sup></label>
								<select name="thanhtoan" class="marB20">
									<option value="Thanh toán khi giao hàng">Thanh toán khi giao hàng </option>
									<option value="Thanh toán bằng thẻ ATM">Thanh toán bằng thẻ ATM </option>
								</select>
							</div>
							<div class="col-md-12">
								<label>Ghi chú <sup><i class="fa fa-star" aria-hidden="true"></i></sup></label>
								<textarea placeholder="Nhập thêm thông tin nếu bạn muốn ?" name="ghichu"></textarea>
							</div>
							<div class="col-md-12">
								<div class="create-an-account">
									<input type="checkbox" name="billing-account" id="account">
									<label for="account">Tạo tài khoản ?</label>
								</div>
							</div>
							<div class="account-box" style="display:none;">
								<div class="col-md-12">
									<div class="create-account-box  padT10">
										<p>Tạo một tài khoản bằng cách nhập thông tin dưới đây. Nếu bạn là khách hàng cũ, vui lòng đăng nhập ở đầu trang.</p>
										<label class="billing-information" for="account-password">password </label>
										<input type="password" name="billing_postcode" id="account-password" placeholder="Nhập Password">
									</div>
								</div>
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="checkout-order-section bg-color text-center checkout-order-section-res">
					<h4>đơn hàng của bạn</h4>
					<div class="col-md-12 col-sm-12 col-xs-12 marT30">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-6 text-left">
								<h5><strong>sản phẩm</strong></h5>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6 text-right">
								<h5><strong>Giá tiền</strong></h5>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="order-detail-box">
							<div class="row">
								@if(Session::has('cart'))
								@foreach($cart->items as $key=>$item)
								<div class="col-md-8 col-sm-8 col-xs-8 text-left">
									<div class="row">
										<div class="col-md-9 col-sm-12 col-xs-12 text-left">
										<p>{{$item['item']['Tensp']}}</p>
										</div>
										<div class="col-md-3 col-sm-12 col-xs-12 text-left">
											<p><img width="100%"src="/frontend/images/{{ $item['item']['Hinhanh'] }}"></p>
											<p><span>x</span> {{$item['qty']}}</p>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4 text-right">
									<p>{{number_format($item['item']['Giatien'])}} VNĐ</p>
								</div>
								@endforeach
								@endif
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="order-detail-box checkout-order-total">
							<div class="row">
								<div class="col-md-6 col-sm-8 col-xs-8 text-left">
									<p><strong>Tổng số lượng</strong></p>
								</div>
								<div class="col-md-6 col-sm-4 col-xs-4 text-right">
									<p>@if(Session::has('cart'))
										{{ Session('cart')->totalQty }}
										@else 0									
										@endif</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="order-detail-box checkout-order-total">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-5 text-left">
									<p><strong>Phí vận chuyển</strong></p>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-7 text-right">
									<p>miễn phí</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="checkout-order-total padT20">
							<div class="row">
								<div class="col-md-6 col-sm-8 col-xs-8 text-left">
									<p><strong>Tổng Tiền đơn hàng</strong></p>
								</div>
								<div class="col-md-6 col-sm-4 col-xs-4 text-right">
									<p class="product-color"><strong>@if(Session::has('cart'))
										{{ number_format(Session('cart')->totalPrice) }} VNĐ
										@else 0									
										@endif</strong></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<div class="payment-check checkout-proceed">
							<div class="remember_me">
								<input type="checkbox" id="readyI">
								<label for="readyI">Tôi đã đọc và chấp nhận các điều khoản trên</label>
							</div>
						<button type="submit" href="#" class="template-button">đặt hàng</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	</div>
</div>
<!--//================checkout section end==============//-->
<!--//================Scroll section start==============//-->
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="row">
		<div class="scroll-top">
			<div id="stop" class="scrollTop">
				<span><a href="#"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a></span>
			</div>
		</div>
	</div>
</div>
@endsection