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
                        <span>Họ và Tên </span> <span>*</span> <br>
                        <input type="text" name="name" class="input">
                    </p>
                    <p>
                        <span>Số điện thoại</span> <span>*</span> <br>
                        <input type="text" name="name" class="input">
                    </p>
                    <p>
                        <span>Nội dung mua hàng</span> <span>*</span> <br>
                        <textarea name="content" rows="7"></textarea>
                    </p>
                    <button class="muangay">
                        <span class="text-white">GỬI THÔNG TIN</span>
                    </button>
                </form>
            </div>
            <div class="col-md-6 info_contact">
                <p class="title">Thông Tin Mua Hàng</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="openning">
                            <div class="d-flex">
                                <p class="left icon"><img src="images/icon-clock.png"></p>
                                <p class="left tieude">Giờ mở cửa </p>
                            </div>

                            <span>Các ngày trong tuần </span><br>
                            <span>Thứ hai - Chủ nhật | 9:00 - 18:00 </span></p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="openning">
                            <div class="d-flex">
                                <p class="left icon"><img src="images/icon-phone.png"></p>
                                <p class="left tieude">
                                    Tư vấn vào Thứ hai - Chủ nhật : 9:00 - 18:00</p>
                            </div>
                            <span>(+84)941.685.419 </span><br></p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="openning">
                            <div class="d-flex">
                                <p class="left icon"><img src="images/location.png"></p>
                                <p class="left tieude">
                                    Địa chỉ </p>
                            </div>
                            <span>Số 201 Nguyễn đức cảnh, P.Cát Dài, Q.Lê Chân, TP. hải phòng</span>
                            </p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="openning">
                            <div class="d-flex">
                                <p class="left icon"><img src="images/icon-mail.png"></p>
                                <p class="left tieude">
                                    Thư điện tử </p>
                            </div>
                            <span>haithu.company@gmail.com </span></p>
                            <div style="clear: both;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid map p-0">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.139178592055!2d105.85005671493188!3d20.98705738602095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac6ad5fe3fd1%3A0x45bc35c65e00a189!2zMjAxIE5ndXnhu4VuIMSQ4bupYyBD4bqjbmgsIFTGsMahbmcgTWFpLCBIYWkgQsOgIFRyxrBuZywgSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1563467561233!5m2!1svi!2s"
        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
@endsection
