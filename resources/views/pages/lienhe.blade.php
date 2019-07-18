@extends('master-layout')
@section('content')

<div class="main">
		<div class="container-fluid">

        </div>

		<div class="container">
                <div class="row breadcumb">
                        <span>Trang chủ</span> <span> <i class="fas fa-angle-right"></i> </span> <span class="lienhe">Liên hệ</span>
                    </div>

			<div class="row">
				<div class="col-md-6 contact">
					<p class="title">Liên Hệ Mua Hàng</p>
					<form>
						<p>
							Họ và tên <span>*</span> <br>
							<input type="text" name="name" class="input">
						</p>
						<p>
							Số điện thoại <span>*</span> <br>
							<input type="text" name="name" class="input">
						</p>
						<p>
							Nội dung mua hàng <span>*</span> <br>
							<textarea name="content" rows="7"></textarea>
						</p>
						<input type="submit" name="btnSubmit"  value="GỬI THÔNG TIN" class="btn_submit">
					</form>
				</div>
				<div class="col-md-6 info_contact">
					<p class="title">Thông Tin Mua Hàng</p>
					<div class="row">
						<div class="col-md-6">
							<div class="openning">
								<p class="left icon"><img src="images/icon-clock.png"></p>
								<p class="left tieude">
								Giờ mở cửa <br>
								<span>Các ngày trong tuần </span><br>
								<span>Thứ hai - Chủ nhật | 9:00 - 18:00 </span></p>
								<div style="clear: both;"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="openning">
								<p class="left icon"><img src="images/icon-phone.png"></p>
								<p class="left tieude">
								Tư vấn vào Thứ hai - Chủ nhật : 9:00 - 18:00<br>
								<span>(+84)941.685.419 </span><br></p>
								<div style="clear: both;"></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="openning">
								<p class="left icon"><img src="images/icon-located.png"></p>
								<p class="left tieude">
								Địa chỉ <br>
								<span>Số 201 Nguyễn đức cảnh, P.Cát Dài, Q.Lê Chân, TP. hải phòng</span>
								</p>
								<div style="clear: both;"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="openning">
								<p class="left icon"><img src="images/icon-mail.png"></p>
								<p class="left tieude">
								Thư điện tử <br>
								<span>haithu.company@gmail.com </span></p>
								<div style="clear: both;"></div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
	</div>
@endsection
