

	@extends('master-layout')
    @section('content')
    <section class="home container">
        <div class="container">
            <div class="home-slide owl-carousel owl-theme">
                <div class="home-slide-member">
                    <div class="home-slide-img">
                        <img src="images/home-slide.jpg" class="img-fluid">
                    </div>
                    <div class="home-slide-content">
                        <div class="home-slide-content-text">
                            <span>Dòng sản phẩm mới <br></span>
                            <span>Súng bắn đinh, <br> ghim meitle <br></span>
                            <span>Dòng sản phẩm được thiết kế để tối ưu hóa hiệu suất hoạt động cho người dùng. <br> Thân máy làm từ chất liệu cao cấp, chịu lực tốt, chống biến dạng khi va đập, <br> chống ăn mòn khi làm việc trong điều kiện khắc nghiết</span>
                        </div>
                        <div class="home-slide-content-link">
                            <a href="">Mua ngay</a>
                        </div>
                    </div>
                </div>
                {{-- LOOP --}}
                    <div class="home-slide-member">
                        <div class="home-slide-img">
                            <img src="{{ asset('images/home-slide.jpg') }}" class="img-fluid">
                        </div>
                        <div class="home-slide-content">
                            <div class="home-slide-content-text">
                                <span>Dòng sản phẩm mới <br></span>
                                <span>Súng bắn đinh, <br> ghim meitle <br></span>
                                <span>Dòng sản phẩm được thiết kế để tối ưu hóa hiệu suất hoạt động cho người dùng. <br> Thân máy làm từ chất liệu cao cấp, chịu lực tốt, chống biến dạng khi va đập, <br> chống ăn mòn khi làm việc trong điều kiện khắc nghiết</span>
                            </div>
                            <div class="home-slide-content-link">
                                <a href="">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="home-slide-member">
                        <div class="home-slide-img">
                            <img src="{{ asset('images/home-slide.jpg') }}" class="img-fluid">
                        </div>
                        <div class="home-slide-content">
                            <div class="home-slide-content-text">
                                <span>Dòng sản phẩm mới <br></span>
                                <span>Súng bắn đinh, <br> ghim meitle <br></span>
                                <span>Dòng sản phẩm được thiết kế để tối ưu hóa hiệu suất hoạt động cho người dùng. <br> Thân máy làm từ chất liệu cao cấp, chịu lực tốt, chống biến dạng khi va đập, <br> chống ăn mòn khi làm việc trong điều kiện khắc nghiết</span>
                            </div>
                            <div class="home-slide-content-link">
                                <a href="">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="home-slide-member">
                        <div class="home-slide-img">
                            <img src="{{ asset('images/home-slide.jpg') }}" class="img-fluid">
                        </div>
                        <div class="home-slide-content">
                            <div class="home-slide-content-text">
                                <span>Dòng sản phẩm mới <br></span>
                                <span>Súng bắn đinh, <br> ghim meitle <br></span>
                                <span>Dòng sản phẩm được thiết kế để tối ưu hóa hiệu suất hoạt động cho người dùng. <br> Thân máy làm từ chất liệu cao cấp, chịu lực tốt, chống biến dạng khi va đập, <br> chống ăn mòn khi làm việc trong điều kiện khắc nghiết</span>
                            </div>
                            <div class="home-slide-content-link">
                                <a href="">Mua ngay</a>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="h-best-sale h-g">
                <div class="h-g-title">
                    Bán chạy nhất
                </div>
                <div class="h-best-sale-content">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <div class="h-best-sale-product h-image-scale">
                                <img src="{{ asset('images/best-sale-1.jpg') }}" class="img-fluid" style="width: 100%;">
                                <div class="h-best-sale-insert-cart">
                                    <div style="border-right: 1px solid #fff;">
                                        <a href="{{url('chitiet')}}">Thêm vào giỏ hàng</a>
                                    </div>
                                    <div>
                                        <a href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="h-best-sale-product-content">
                                <div>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span style="padding-left: 17px;">1 Đánh giá</span>
                                </div>
                                <div style="padding-top: 17px;">
                                    <a href="">Tên sản phẩm</a>
                                </div>
                                <div style="padding-top: 17px; text-indent: 10px;">
                                    {{ number_format(500000) }} VND
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <div class="h-best-sale-product h-image-scale">
                                <img src="{{ asset('images/best-sale-2.jpg') }}" class="img-fluid" style="width: 100%;">
                                <div class="h-best-sale-insert-cart">
                                    <div style="border-right: 1px solid #fff;">
                                        <a href="{{url('chitiet')}}">Thêm vào giỏ hàng</a>
                                    </div>
                                    <div>
                                        <a href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="h-best-sale-product-content">
                                <div>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span style="padding-left: 17px;">1 Đánh giá</span>
                                </div>
                                <div style="padding-top: 17px;">
                                    <a href="">Tên sản phẩm</a>
                                </div>
                                <div style="padding-top: 17px; text-indent: 10px;">
                                    {{ number_format(500000) }} VND
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <div class="h-best-sale-product h-image-scale">
                                <img src="{{ asset('images/best-sale-3.jpg') }}" class="img-fluid" style="width: 100%;">
                                <div class="h-best-sale-insert-cart">
                                    <div style="border-right: 1px solid #fff;">
                                        <a href="{{url('chitiet')}}">Thêm vào giỏ hàng</a>
                                    </div>
                                    <div>
                                        <a href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="h-best-sale-product-content">
                                <div>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span style="padding-left: 17px;">1 Đánh giá</span>
                                </div>
                                <div style="padding-top: 17px;">
                                    <a href="">Tên sản phẩm</a>
                                </div>
                                <div style="padding-top: 17px; text-indent: 10px;">
                                    {{ number_format(500000) }} VND
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <div class="h-best-sale-product h-image-scale">
                                <img src="{{ asset('images/best-sale-4.jpg') }}" class="img-fluid" style="width: 100%;">
                                <div class="h-best-sale-insert-cart">
                                    <div style="border-right: 1px solid #fff;">
                                        <a href="{{url('chitiet')}}">Thêm vào giỏ hàng</a>
                                    </div>
                                    <div>
                                        <a href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="h-best-sale-product-content">
                                <div>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span style="padding-left: 17px;">1 Đánh giá</span>
                                </div>
                                <div style="padding-top: 17px;">
                                    <a href="">Tên sản phẩm</a>
                                </div>
                                <div style="padding-top: 17px; text-indent: 10px;">
                                    {{ number_format(500000) }} VND
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-link-wrap">
                <div class="row">
                    <div class="col-12 col-sm-12 col-xl-6">
                        <div class="h-link h-image-scale">
                            <img src="{{ asset('images/link-1.jpg') }}" class="img-fluid" style="width: 100%;">
                            <div class="h-link-content h-link-content-1">
                                <div>
                                    <span style="font-size: 45px;">Súng bắn đinh <br></span>
                                    <span style="font-size: 22px;">Chủng loại và mẫu mã vô cùng <br> đa dạng và phong phú</span>
                                </div>
                                <div class="home-slide-content-link">
                                    <a href="">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-xl-6">
                        <div class="h-link h-image-scale">
                            <img src="{{ asset('images/link-2.jpg') }}" class="img-fluid" style="width: 100%;">
                            <div class="h-link-content h-link-content-2">
                                <div>
                                    <span style="font-size: 45px;">Đinh công nghiệp <br></span>
                                    <span style="font-size: 22px;">Độ bền cao, giá thành cạnh tranh</span>
                                </div>
                                <div class="home-slide-content-link">
                                    <a href="">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-best-sale h-g">
                <div class="h-g-title">
                    Sản phẩm mới
                </div>
                <div class="h-best-sale-content">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <div class="h-best-sale-product h-image-scale">
                                <img src="{{ asset('images/best-sale-1.jpg') }}" class="img-fluid" style="width: 100%;">
                                <div class="h-best-sale-insert-cart">
                                    <div style="border-right: 1px solid #fff;">
                                        <a href="{{url('chitiet')}}">Thêm vào giỏ hàng</a>
                                    </div>
                                    <div>
                                        <a href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="h-best-sale-product-content">
                                <div>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span style="padding-left: 17px;">1 Đánh giá</span>
                                </div>
                                <div style="padding-top: 17px;">
                                    <a href="">Tên sản phẩm</a>
                                </div>
                                <div style="padding-top: 17px; text-indent: 10px;">
                                    {{ number_format(500000) }} VND
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <div class="h-best-sale-product h-image-scale">
                                <img src="{{ asset('images/best-sale-2.jpg') }}" class="img-fluid" style="width: 100%;">
                                <div class="h-best-sale-insert-cart">
                                    <div style="border-right: 1px solid #fff;">
                                        <a href="{{url('chitiet')}}">Thêm vào giỏ hàng</a>
                                    </div>
                                    <div>
                                        <a href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="h-best-sale-product-content">
                                <div>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span style="padding-left: 17px;">1 Đánh giá</span>
                                </div>
                                <div style="padding-top: 17px;">
                                    <a href="">Tên sản phẩm</a>
                                </div>
                                <div style="padding-top: 17px; text-indent: 10px;">
                                    {{ number_format(500000) }} VND
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <div class="h-best-sale-product h-image-scale">
                                <img src="{{ asset('images/best-sale-3.jpg') }}" class="img-fluid" style="width: 100%;">
                                <div class="h-best-sale-insert-cart">
                                    <div style="border-right: 1px solid #fff;">
                                        <a href="{{url('chitiet')}}">Thêm vào giỏ hàng</a>
                                    </div>
                                    <div>
                                        <a href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="h-best-sale-product-content">
                                <div>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span style="padding-left: 17px;">1 Đánh giá</span>
                                </div>
                                <div style="padding-top: 17px;">
                                    <a href="">Tên sản phẩm</a>
                                </div>
                                <div style="padding-top: 17px; text-indent: 10px;">
                                    {{ number_format(500000) }} VND
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <div class="h-best-sale-product h-image-scale">
                                <img src="{{ asset('images/best-sale-4.jpg') }}" class="img-fluid" style="width: 100%;">
                                <div class="h-best-sale-insert-cart">
                                    <div style="border-right: 1px solid #fff;">
                                        <a href="{{url('chitiet')}}">Thêm vào giỏ hàng</a>
                                    </div>
                                    <div>
                                        <a href=""><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="h-best-sale-product-content">
                                <div>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span style="padding-left: 17px;">1 Đánh giá</span>
                                </div>
                                <div style="padding-top: 17px;">
                                    <a href="">Tên sản phẩm</a>
                                </div>
                                <div style="padding-top: 17px; text-indent: 10px;">
                                    {{ number_format(500000) }} VND
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-link-wrap">
                <div class="row">
                    <div class="col-12 col-sm-12 col-xl-8">
                        <div class="h-link h-image-scale">
                            <img src="{{ asset('images/link-3.jpg') }}" class="img-fluid" style="width: 100%;">
                            <div class="h-link-content h-link-content-3">
                                <div>
                                    <span style="font-size: 45px;">Máy hút bụi <br> công nghệ cao <br></span>
                                    <span style="font-size: 22px;">Tính ổn định cao, chịu va đập mạnh</span>
                                </div>
                                <div class="home-slide-content-link">
                                    <a href="">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-xl-4">
                        <div class="h-link h-image-scale">
                            <img src="{{ asset('images/link-4.jpg') }}" class="img-fluid" style="width: 100%;">
                            <div class="h-link-content h-link-content-4">
                                <div>
                                    <span style="font-size: 45px;">Hộp đựng <br> dụng cụ <br></span>
                                    <span style="font-size: 22px;">Kích thước đa dạng <br> Tối ưu tiện ích</span>
                                </div>
                                <div class="home-slide-content-link">
                                    <a href="">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-product-wrap">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-4">
                        <div class="h-g">
                            <div class="h-g-title">
                                Loại sản phẩm
                            </div>
                            <div class="home-product">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="home-product-img h-image-scale">
                                            <img src="{{ asset('images/best-sale-1.jpg') }}" class="img-fluid" style="width: 100%;">
                                            <div class="home-product-cart">
                                                <div>
                                                    <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                </div>
                                                <div>
                                                    <a href=""><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="home-product-content">
                                            <div class="home-product-star">
                                                <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                                <span style="padding-left: 15px;">1 Đánh giá</span>
                                            </div>
                                            <div class="home-product-name">
                                                <a href="">Tên sản phẩm</a>
                                            </div>
                                            <div class="home-product-price">
                                                {{ number_format(500000) }} VND
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- LOOP --}}
                                <div class="home-product">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="home-product-img h-image-scale">
                                                <img src="{{ asset('images/best-sale-1.jpg') }}" class="img-fluid" style="width: 100%;">
                                                <div class="home-product-cart">
                                                    <div>
                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                    </div>
                                                    <div>
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="home-product-content">
                                                <div class="home-product-star">
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                    <span style="padding-left: 15px;">1 Đánh giá</span>
                                                </div>
                                                <div class="home-product-name">
                                                    <a href="">Tên sản phẩm</a>
                                                </div>
                                                <div class="home-product-price">
                                                    {{ number_format(500000) }} VND
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="home-product">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="home-product-img h-image-scale">
                                                <img src="{{ asset('images/best-sale-1.jpg') }}" class="img-fluid" style="width: 100%;">
                                                <div class="home-product-cart">
                                                    <div>
                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                    </div>
                                                    <div>
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="home-product-content">
                                                <div class="home-product-star">
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                    <span style="padding-left: 15px;">1 Đánh giá</span>
                                                </div>
                                                <div class="home-product-name">
                                                    <a href="">Tên sản phẩm</a>
                                                </div>
                                                <div class="home-product-price">
                                                    {{ number_format(500000) }} VND
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-4">
                        <div class="h-g">
                            <div class="h-g-title">
                                Loại sản phẩm
                            </div>
                            <div class="home-product">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="home-product-img h-image-scale">
                                            <img src="{{ asset('images/best-sale-1.jpg') }}" class="img-fluid" style="width: 100%;">
                                            <div class="home-product-cart">
                                                <div>
                                                    <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                </div>
                                                <div>
                                                    <a href=""><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="home-product-content">
                                            <div class="home-product-star">
                                                <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                                <span style="padding-left: 15px;">1 Đánh giá</span>
                                            </div>
                                            <div class="home-product-name">
                                                <a href="">Tên sản phẩm</a>
                                            </div>
                                            <div class="home-product-price">
                                                {{ number_format(500000) }} VND
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- LOOP --}}
                                <div class="home-product">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="home-product-img h-image-scale">
                                                <img src="{{ asset('images/best-sale-1.jpg') }}" class="img-fluid" style="width: 100%;">
                                                <div class="home-product-cart">
                                                    <div>
                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                    </div>
                                                    <div>
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="home-product-content">
                                                <div class="home-product-star">
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                    <span style="padding-left: 15px;">1 Đánh giá</span>
                                                </div>
                                                <div class="home-product-name">
                                                    <a href="">Tên sản phẩm</a>
                                                </div>
                                                <div class="home-product-price">
                                                    {{ number_format(500000) }} VND
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="home-product">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="home-product-img h-image-scale">
                                                <img src="{{ asset('images/best-sale-1.jpg') }}" class="img-fluid" style="width: 100%;">
                                                <div class="home-product-cart">
                                                    <div>
                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                    </div>
                                                    <div>
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="home-product-content">
                                                <div class="home-product-star">
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                    <span style="padding-left: 15px;">1 Đánh giá</span>
                                                </div>
                                                <div class="home-product-name">
                                                    <a href="">Tên sản phẩm</a>
                                                </div>
                                                <div class="home-product-price">
                                                    {{ number_format(500000) }} VND
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-4">
                        <div class="h-g">
                            <div class="h-g-title">
                                Loại sản phẩm
                            </div>
                            <div class="home-product">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="home-product-img h-image-scale">
                                            <img src="{{ asset('images/best-sale-1.jpg') }}" class="img-fluid" style="width: 100%;">
                                            <div class="home-product-cart">
                                                <div>
                                                    <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                </div>
                                                <div>
                                                    <a href=""><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6">
                                        <div class="home-product-content">
                                            <div class="home-product-star">
                                                <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                                <span style="padding-left: 15px;">1 Đánh giá</span>
                                            </div>
                                            <div class="home-product-name">
                                                <a href="">Tên sản phẩm</a>
                                            </div>
                                            <div class="home-product-price">
                                                {{ number_format(500000) }} VND
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- LOOP --}}
                                <div class="home-product">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="home-product-img h-image-scale">
                                                <img src="{{ asset('images/best-sale-1.jpg') }}" class="img-fluid" style="width: 100%;">
                                                <div class="home-product-cart">
                                                    <div>
                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                    </div>
                                                    <div>
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="home-product-content">
                                                <div class="home-product-star">
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                    <span style="padding-left: 15px;">1 Đánh giá</span>
                                                </div>
                                                <div class="home-product-name">
                                                    <a href="">Tên sản phẩm</a>
                                                </div>
                                                <div class="home-product-price">
                                                    {{ number_format(500000) }} VND
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="home-product">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="home-product-img h-image-scale">
                                                <img src="{{ asset('images/best-sale-1.jpg') }}" class="img-fluid" style="width: 100%;">
                                                <div class="home-product-cart">
                                                    <div>
                                                        <a href=""><i class="fas fa-shopping-cart"></i></a>
                                                    </div>
                                                    <div>
                                                        <a href=""><i class="far fa-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6">
                                            <div class="home-product-content">
                                                <div class="home-product-star">
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span class="h-best-sale-color-star"><i class="far fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                    <span><i class="far fa-star"></i></span>
                                                    <span style="padding-left: 15px;">1 Đánh giá</span>
                                                </div>
                                                <div class="home-product-name">
                                                    <a href="">Tên sản phẩm</a>
                                                </div>
                                                <div class="home-product-price">
                                                    {{ number_format(500000) }} VND
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
		<script type="text/javascript" src="lib/jquery.min.js"></script>
		<script type="text/javascript" src="lib/OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/home.js"></script>
	@endsection
