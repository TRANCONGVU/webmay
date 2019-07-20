@extends('master-layout')
@section('content')
<div class="container trangchitiet">
    <div class="row">
        <div class="col-md-6 offset-md-1">
            <div id="carousel-sp" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-sp" data-slide-to="0" class="active">
                        <img src="images/chi-tiet-sp-1.png" alt="">
                    </li>
                    <li data-target="#carousel-sp" data-slide-to="1">
                        <img src="images/chi-tiet-sp-1.png" alt="">
                    </li>
                    <li data-target="#carousel-sp" data-slide-to="2">
                        <img src="images/chi-tiet-sp-1.png" alt="">
                    </li>
                    <li data-target="#carousel-sp" data-slide-to="3">
                        <img src="images/chi-tiet-sp-1.png" alt="">
                    </li>
                    <li data-target="#carousel-sp" data-slide-to="4">
                        <img src="images/chi-tiet-sp-1.png" alt="">
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/img-main.png" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/img-main.png" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/img-main.png" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/img-main.png" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/img-main.png" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-sp" role="button" data-slide="prev">
                   <span class="caroul"><i class="fas fa-arrow-circle-left"></i></span>

                </a>
                <a class="carousel-control-next" href="#carousel-sp" role="button" data-slide="next">
                   <span class="caroul"><i class="fas fa-arrow-circle-right"></i></span>
                </a>
            </div>
        </div>
        <div class="col-md-5 info-detai">
            <div class="head-info">
                <span>Còn Hàng</span>
                <span ml-5>Mã : </span>
                <a href="#">10001</a>
            </div>
            <div class="body-info d-flex flex-column">
                <span>Bộ dụng cụ de walt - máy khoan</span>
                <span>500.000 vnd</span>

            </div>
            <div class="danhgia">
                <div>
                    <i class="far fa-star bg-danhgia"></i>
                    <i class="far fa-star bg-danhgia"></i>
                    <i class="far fa-star bg-danhgia"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <span class="ml-4">1 <a href="">Đánh giá</a></span>
                <a href="" class="ml-4">Đánh giá sản phẩm này</a>
            </div>
            <button class="muangay">
                thêm vào giỏ hàng của bạn
            </button>
            <div class="like mt-4">
                <i class="far fa-heart"></i>
                <i class="fas fa-phone xanh" style="transform: rotate(90deg);"></i>
                <i class="far fa-envelope xanh"></i>
            </div>
        </div>
    </div>
    <div class="chi-tiet-sp mt-5">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab"
                        aria-controls="tab1" aria-selected="true">CHI TIẾT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2"
                        aria-selected="false">THÔNG TIN SẢN PHẨM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3"
                        aria-selected="false">ĐÁNH GIÁ <span>(2)</span></a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active my-4" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <p style="line-height: 34px; color : #666666">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorum, vero accusantium aut
                        saepe laudantium repellendus molestias provident modi natus aliquam earum, expedita excepturi,
                        quo vel ducimus beatae. Cumque, reiciendis!</p>
                </div>

                <div class="tab-pane fade text-capitalize my-4" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <div class="tab-info">
                        <span>loại mặt hàng</span>
                        <a href="#" class="ml-3">dụng cụ điện</a>
                    </div>
                    <div class="tab-info">
                        <span>Nhãn hàng</span>
                        <a href="#" class="ml-3">dcd2013</a>
                    </div>
                    <div class="tab-info">
                        <span>xuất xứ</span>
                        <a href="#" class="ml-3">gemany</a>
                    </div>
                    <div class="tab-info">
                        <span>năm sản xuất</span>
                        <a href="#" class="ml-3">2019</a>
                    </div>
                    <div class="tab-info">
                        <span>màu sắc</span>
                        <a href="#" class="ml-3">vàng</a>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                    <div class="row p-3">
                        <h5>Đánh giá của khách hàng</h5>
                        <div class="col-md-12 danhgia-box">
                            <h5>Rất Tốt</h5>
                            <div class="danhgia">
                                <div>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <div class="danhgia">
                                <div>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <div class="danhgia">
                                <div>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                </div>
                            </div>
                            <h6>Tôi rất vui khi mua hàng ở Hải Thu</h6>
                            <h6>Được đánh giá bởi <span>Vũ</span> ngày 18 / 7 / 2019</h6>
                        </div>

                        <div class="col-md-12 danhgia-box">
                            <h5>Rất Tốt</h5>
                            <div class="danhgia">
                                <div>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <div class="danhgia">
                                <div>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <div class="danhgia">
                                <div>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                    <i class="far fa-star bg-danhgia"></i>
                                </div>
                            </div>
                            <h6>Tôi rất vui khi mua hàng ở Hải Thu</h6>
                            <h6>Được đánh giá bởi <span>Vũ</span> ngày 18 / 7 / 2019</h6>
                        </div>
                        <div class="my-rate d-flex flex-column">
                            <div class="d-flex flex-row mt-4">
                                    <span>bạn đang đánh giá :</span>
                                    <span class="ml-2">bộ dụng cụ de walt - máy khoan</span>
                            </div>

                            <span class="my-2"> Đánh giá của bạn <span class="text-danger">*</span></span>
                            <div class="danhgia">
                                <p>Giá tiền</p>
                                <div class="ml-4">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star "></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <div class="danhgia">
                                <p>Phục vụ</p>
                                <div class="ml-4">
                                    <i class="far fa-star "></i>
                                    <i class="far fa-star "></i>
                                    <i class="far fa-star "></i>
                                    <i class="far fa-star "></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <div class="danhgia">
                                <p>Chất lượng</p>
                                <div class="ml-4">
                                    <i class="far fa-star "></i>
                                    <i class="far fa-star "></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star "></i>
                                </div>
                            </div>

                            <form>
                                <div class="form-group">
                                    <label for="name">Họ và tên<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="name">Tóm Lược<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="rate">Viết Đánh Giá <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="rate" rows="3"></textarea>
                                </div>
                            </form>
                            <button class="muangay">
                                đánh giá
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container-fluid map p-0 m-0">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.139178592055!2d105.85005671493188!3d20.98705738602095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac6ad5fe3fd1%3A0x45bc35c65e00a189!2zMjAxIE5ndXnhu4VuIMSQ4bupYyBD4bqjbmgsIFTGsMahbmcgTWFpLCBIYWkgQsOgIFRyxrBuZywgSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1563467561233!5m2!1svi!2s"
        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

@endsection
