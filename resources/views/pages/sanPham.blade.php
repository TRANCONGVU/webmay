@extends('master-layout')


@section('content')

<!-- san pham -->
<main class="mb-5">
    <!-- bread-crumb -->
    <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="#">trang chủ</a>
                        <a class="breadcrumb-item" href="#">sản phẩm</a>

                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- content -->
    <section class="content mt-5">
        <div class="container">
            <div class="row">

                <!-- content-left -->
                <div class="col-lg-3">
                    <div class="content-left">
                        <h2 class="left-title">mua theo</h2>

                        <div class="accordion-box">

                            <div class="box-1">
                                <div class="box-1-title">
                                    <h3 class="main-title">màu sắc</h3>
                                    <i class="fa fa-plus icon-plus" aria-hidden="true"></i>
                                </div>

                                <div class="content-box">
                                    <ul class="color-box">
                                        <li><a href="#"
                                                style="display:block; width:33px; height: 33px; background: #000;"></a>
                                        </li>
                                        <li><a href="#"
                                                style="display:block; width:33px; height: 33px; background: #ffF; border: 1px solid #ddd;"></a>
                                        </li>
                                        <li><a href="#"
                                                style="display:block; width:33px; height: 33px; background: #808080;"></a>
                                        </li>
                                        <li><a href="#"
                                                style="display:block; width:33px; height: 33px; background: #000080;"></a>
                                        </li>
                                        <li><a href="#"
                                                style="display:block; width:33px; height: 33px; background: #ffff00;"></a>
                                        </li>
                                        <li><a href="#"
                                                style="display:block; width:33px; height: 33px; background: #ff8040;"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="box-1">
                                <div class="box-1-title">
                                    <h3 class="main-title">LOẠI MẶT HÀNG</h3>
                                    <i class="fa fa-plus icon-plus" aria-hidden="true"></i>
                                </div>

                                <div class="content-box">
                                    <ul class="color-box box-colum">
                                        <li><a href="#">Dụng Cụ Điện <span>(5)</span></a></li>
                                        <li><a href="#">Dụng Cụ Khí Nén <span>(2)</span></a></li>
                                        <li><a href="#">Dụng Cụ Chạy Pin <span>(1)</span></a></li>
                                        <li><a href="#">Dụng Cụ Cầm Tay <span>(1)</span></a></li>
                                        <li><a href="#"> Dụng Cụ Cắt Gọt <span>(1)</span></a></li>
                                        <li><a href="#">Thiết Bị Dụng Cụ, Đo Lường <span>(1)</span></a></li>
                                        <li><a href="#">Thiết Bị Hàn <span>(1)</span></a></li>
                                        <li><a href="#">Vệ Sinh Công Nghiệp <span>(1)</span></a></li>
                                        <li><a href="#">Phụ Kiện Khí Nén <span>(1)</span></a></li>
                                        <li><a href="#">Đinh Công Nghiệp <span>(1)</span></a></li>

                                    </ul>
                                </div>
                            </div>

                            <div class="box-1">
                                <div class="box-1-title">
                                    <h3 class="main-title">GIÁ</h3>
                                    <i class="fa fa-plus icon-plus" aria-hidden="true"></i>
                                </div>

                                <div class="content-box">
                                    <ul class="color-box box-colum">
                                        <li><a href="#">600.000 VND-100.000 VND <span>(5)</span></a></li>
                                        <li><a href="#">600.000 VND-100.000 VND <span>(5)</span></a></li>
                                        <li><a href="#">600.000 VND-100.000 VND <span>(5)</span></a></li>
                                        <li><a href="#">600.000 VND-100.000 VND <span>(5)</span></a></li>
                                        <li><a href="#">600.000 VND-100.000 VND <span>(5)</span></a></li>
                                        <li><a href="#">600.000 VND-100.000 VND <span>(5)</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="box-1">
                                <div class="box-1-title">
                                    <h3 class="main-title">NHÃN HÀNG</h3>
                                    <i class="fa fa-plus icon-plus" aria-hidden="true"></i>
                                </div>

                                <div class="content-box">
                                    <ul class="color-box box-colum">
                                        <li><a href="#">DeWALT <span>(5)</span></a></li>
                                        <li><a href="#">Stanley <span>(5)</span></a></li>
                                        <li><a href="#"> Stanley <span>(5)</span></a></li>
                                        <li><a href="#"> Stanley <span>(5)</span></a></li>
                                        <li><a href="#"> Stanley <span>(5)</span></a></li>
                                        <li><a href="#">Stanley <span>(5)</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="box-1">
                                <div class="box-1-title">
                                    <h3 class="main-title">XUẤT XỨ</h3>
                                    <i class="fa fa-plus icon-plus" aria-hidden="true"></i>
                                </div>

                                <div class="content-box">
                                    <ul class="color-box box-colum">
                                        <li><a href="#">Việt Nam<span>(5)</span></a></li>
                                        <li><a href="#">China<span>(5)</span></a></li>
                                        <li><a href="#">Việt Nam <span>(5)</span></a></li>
                                        <li><a href="#">Việt Nam <span>(5)</span></a></li>
                                        <li><a href="#"> Việt Nam<span>(5)</span></a></li>
                                        <li><a href="#">Việt Nam <span>(5)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="folder-like">
                            <p class="like-title">thư mục yêu thích</p>
                            <p class="like-text">
                                Bạn không có ản phẩm nào <br>
                                trong mục yêu thích

                            </p>
                        </div>
                    </div>
                </div>

                <!-- content-right -->
                <div class="col-lg-9">

                    <div class="content-right">
                        <!-- search-box -->
                        <div class="search-box">

                            <!-- left -->
                            <div class="search-box-left d-flex">
                                <div class="dropdown">

                                    <span>Tìm kiếm theo:</span>

                                    <a href="#" data-toggle="dropdown">
                                        Tên sản phẩm <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Tên Sản Phẩm</a>
                                        <a class="dropdown-item" href="#">Giá Tiền</a>
                                        <a class="dropdown-item" href="#">Đánh giá</a>
                                    </div>

                                </div>

                                <div class="dropdown dropdown-1 ">

                                    <span>Trình chiếu: </span>

                                    <a href="#" data-toggle="dropdown">
                                        5 <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">5</a>
                                        <a class="dropdown-item" href="#">9</a>
                                        <a class="dropdown-item" href="#">15</a>
                                        <a class="dropdown-item" href="#">30</a>
                                    </div>

                                </div>
                            </div>

                            <!-- right -->
                            <div class="search-box-right">
                                <div class="main-box-right d-flex">
                                    <p>1-9 của 19 Sản Phẩm</p>

                                    <div class="icon-switch ml-5">
                                        <span class="mr-3"><i class="fas fa-th" style="cursor: pointer;"></i></span>
                                        <span> <i class="fas fa-list" style="cursor: pointer;"></i></span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- product-list -->
                        <div class="product-list">
                            <div class="row">
                                <!-- collum-1 -->
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 collum-img-1 mt-3">

                                    <div class="sale-product h-image-scale">
                                        <img src="{{ asset('images/1x/product-1.png') }}" class="img-fluid"
                                            style="width: 100%;">
                                        <div class="sale-insert-cart">
                                            <a href="#">
                                                <div style="border-right: 1px solid #fff;">
                                                    Thêm vào giỏ hàng
                                                </div>
                                                <div>
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sale-product-content">
                                        
                                        <div style="padding-top: 17px;">
                                            <a href="">Tên sản phẩm</a> <br>
                                            <a href="#">Chi Tiết</a>
                                        </div>

                                        <div class="price-sale">
                                        400,000 VNĐ (sale 10%)
                                        </div>
                                        <div class="price" >
                                            {{ number_format(500000) }} VND
                                        </div>
                                    </div>
                                </div>
                                <!-- collum-2 -->
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 collum-img-1 mt-3">

                                    <div class="sale-product h-image-scale">
                                        <img src="{{ asset('images/1x/product-2.png') }}" class="img-fluid"
                                            style="width: 100%;">
                                        <div class="sale-insert-cart">
                                            <a href="#">
                                                <div style="border-right: 1px solid #fff;">
                                                    Thêm vào giỏ hàng
                                                </div>
                                                <div>
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sale-product-content">
                                        
                                        <div style="padding-top: 17px;">
                                            <a href="">Tên sản phẩm</a> <br>
                                            <a href="#">Chi Tiết</a>
                                        </div>

                                        <div class="price-sale">
                                        400,000 VNĐ (sale 10%)
                                        </div>
                                        <div class="price" >
                                            {{ number_format(500000) }} VND
                                        </div>
                                    </div>

                                </div>
                                <!-- collum-3 -->
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 collum-img-1 mt-3">

                                    <div class="sale-product h-image-scale">
                                        <img src="{{ asset('images/1x/product-3.png') }}" class="img-fluid"
                                            style="width: 100%;">
                                        <div class="sale-insert-cart">
                                            <a href="#">
                                                <div style="border-right: 1px solid #fff;">
                                                    Thêm vào giỏ hàng
                                                </div>
                                                <div>
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sale-product-content">
                                        
                                        <div style="padding-top: 17px;">
                                            <a href="">Tên sản phẩm</a> <br>
                                            <a href="#">Chi Tiết</a>
                                        </div>

                                        <div class="price-sale">
                                        400,000 VNĐ (sale 10%)
                                        </div>
                                        <div class="price" >
                                            {{ number_format(500000) }} VND
                                        </div>
                                    </div>

                                </div>
                                <!-- collum-4 -->
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 collum-img-1 mt-3">

                                    <div class="sale-product h-image-scale">
                                        <img src="{{ asset('images/1x/product-4.png') }}" class="img-fluid"
                                            style="width: 100%;">
                                        <div class="sale-insert-cart">
                                            <a href="#">
                                                <div style="border-right: 1px solid #fff;">
                                                    Thêm vào giỏ hàng
                                                </div>
                                                <div>
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sale-product-content">
                                        
                                        <div style="padding-top: 17px;">
                                            <a href="">Tên sản phẩm</a> <br>
                                            <a href="#">Chi Tiết</a>
                                        </div>

                                        <div class="price-sale">
                                        400,000 VNĐ (sale 10%)
                                        </div>
                                        <div class="price" >
                                            {{ number_format(500000) }} VND
                                        </div>
                                    </div>

                                </div>
                                <!-- collum-5 -->
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 collum-img-1 mt-3">

                                    <div class="sale-product h-image-scale">
                                        <img src="{{ asset('images/1x/product-5.png') }}" class="img-fluid"
                                            style="width: 100%;">
                                        <div class="sale-insert-cart">
                                            <a href="#">
                                                <div style="border-right: 1px solid #fff;">
                                                    Thêm vào giỏ hàng
                                                </div>
                                                <div>
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sale-product-content">
                                        
                                        <div style="padding-top: 17px;">
                                            <a href="">Tên sản phẩm</a> <br>
                                            <a href="#">Chi Tiết</a>
                                        </div>

                                        <div class="price-sale">
                                        400,000 VNĐ (sale 10%)
                                        </div>
                                        <div class="price" >
                                            {{ number_format(500000) }} VND
                                        </div>
                                    </div>

                                </div>
                                <!-- collum-6 -->
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 collum-img-1 mt-3">

                                    <div class="sale-product h-image-scale">
                                        <img src="{{ asset('images/1x/product-6.png') }}" class="img-fluid"
                                            style="width: 100%;">
                                        <div class="sale-insert-cart">
                                            <a href="#">
                                                <div style="border-right: 1px solid #fff;">
                                                    Thêm vào giỏ hàng
                                                </div>
                                                <div>
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sale-product-content">
                                        
                                        <div style="padding-top: 17px;">
                                            <a href="">Tên sản phẩm</a> <br>
                                            <a href="#">Chi Tiết</a>
                                        </div>

                                        <div class="price-sale">
                                        400,000 VNĐ (sale 10%)
                                        </div>
                                        <div class="price" >
                                            {{ number_format(500000) }} VND
                                        </div>
                                    </div>

                                </div>
                                <!-- collum-7 -->
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 collum-img-1 mt-3">

                                    <div class="sale-product h-image-scale">
                                        <img src="{{ asset('images/1x/product-7.png') }}" class="img-fluid"
                                            style="width: 100%;">
                                        <div class="sale-insert-cart">
                                            <a href="#">
                                                <div style="border-right: 1px solid #fff;">
                                                    Thêm vào giỏ hàng
                                                </div>
                                                <div>
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sale-product-content">
                                        
                                        <div style="padding-top: 17px;">
                                            <a href="">Tên sản phẩm</a> <br>
                                            <a href="#">Chi Tiết</a>
                                        </div>

                                        <div class="price-sale">
                                        400,000 VNĐ (sale 10%)
                                        </div>
                                        <div class="price" >
                                            {{ number_format(500000) }} VND
                                        </div>
                                    </div>

                                </div>
                                <!-- collum-8 -->
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 collum-img-1 mt-3">

                                    <div class="sale-product h-image-scale">
                                        <img src="{{ asset('images/1x/product-7_1.png') }}" class="img-fluid"
                                            style="width: 100%;">
                                        <div class="sale-insert-cart">
                                            <a href="#">
                                                <div style="border-right: 1px solid #fff;">
                                                    Thêm vào giỏ hàng
                                                </div>
                                                <div>
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sale-product-content">
                                        
                                        <div style="padding-top: 17px;">
                                            <a href="">Tên sản phẩm</a> <br>
                                            <a href="#">Chi Tiết</a>
                                        </div>

                                        <div class="price-sale">
                                        400,000 VNĐ (sale 10%)
                                        </div>
                                        <div class="price" >
                                            {{ number_format(500000) }} VND
                                        </div>
                                    </div>

                                </div>
                                <!-- collum-9 -->
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4 collum-img-1 mt-3">

                                    <div class="sale-product h-image-scale">
                                        <img src="{{ asset('images/1x/product-8.png') }}" class="img-fluid"
                                            style="width: 100%;">
                                        <div class="sale-insert-cart">
                                            <a href="#">
                                                <div style="border-right: 1px solid #fff;">
                                                    Thêm vào giỏ hàng
                                                </div>
                                                <div>
                                                    <i class="far fa-heart"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sale-product-content">
                                        
                                        <div style="padding-top: 17px;">
                                            <a href="">Tên sản phẩm</a> <br>
                                            <a href="#">Chi Tiết</a>
                                        </div>

                                        <div class="price-sale">
                                        400,000 VNĐ (sale 10%)
                                        </div>
                                        <div class="price" >
                                            {{ number_format(500000) }} VND
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>

                        <!-- product-box -->
                        <div class="product-box mt-4">

                            <div class="box-1 d-flex mb-3">
                                <div class="img-box-product">
                                    <a href="#"><img src="{{ asset('images/1x/product-1.png') }}" alt=""></a>
                                </div>

                                <div class="text-box-product ml-4">
                                    

                                    <div class="name-product">
                                        <a href="">Tên sản phẩm</a> <br>
                                        <a href="">Chi tiết</a>
                                    </div>
                                    <div class="price-sale">
                                        400,000 VNĐ (sale 10%)
                                    </div>
                                    <div class="price" >
                                        {{ number_format(500000) }} VND
                                    </div>

                                    <div class="add-product-box mt-4 d-flex">

                                        <div class="add-1">
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="ml-3 icon-heart">
                                            <i class="far fa-heart"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="box-1 d-flex mb-3">
                                <div class="img-box-product">
                                    <a href="#"><img src="{{ asset('images/1x/product-2.png') }}" alt=""></a>
                                </div>

                                <div class="text-box-product ml-4">
                                    

                                    <div class="name-product">
                                        <a href="">Tên sản phẩm</a> <br>
                                        <a href="">Chi tiết</a>
                                    </div>
                                    <div class="price-sale">
                                        400,000 VNĐ (sale 10%)
                                    </div>
                                    <div class="price" >
                                        {{ number_format(500000) }} VND
                                    </div>

                                    <div class="add-product-box mt-4 d-flex">

                                        <div class="add-1">
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="ml-3 icon-heart">
                                            <i class="far fa-heart"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="box-1 d-flex mb-3">
                                <div class="img-box-product">
                                    <a href="#"><img src="{{ asset('images/1x/product-3.png') }}" alt=""></a>
                                </div>

                                <div class="text-box-product ml-4">
                                    

                                    <div class="name-product">
                                        <a href="">Tên sản phẩm</a> <br>
                                        <a href="">Chi tiết</a>
                                    </div>

                                    <div class="price-sale">
                                        400,000 VNĐ (sale 10%)
                                    </div>
                                    <div class="price" >
                                        {{ number_format(500000) }} VND
                                    </div>

                                    <div class="add-product-box mt-4 d-flex">

                                        <div class="add-1">
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="ml-3 icon-heart">
                                            <i class="far fa-heart"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="box-1 d-flex mb-3">
                                <div class="img-box-product">
                                    <a href="#"><img src="{{ asset('images/1x/product-4.png') }}" alt=""></a>
                                </div>

                                <div class="text-box-product ml-4">
                                    

                                    <div class="name-product">
                                        <a href="">Tên sản phẩm</a> <br>
                                        <a href="">Chi tiết</a>
                                    </div>

                                    <div class="price-sale">
                                        400,000 VNĐ (sale 10%)
                                    </div>
                                    <div class="price" >
                                        {{ number_format(500000) }} VND
                                    </div>

                                    <div class="add-product-box mt-4 d-flex">

                                        <div class="add-1">
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="ml-3 icon-heart">
                                            <i class="far fa-heart"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="box-1 d-flex mb-3">
                                <div class="img-box-product">
                                    <a href="#"><img src="{{ asset('images/1x/product-5.png') }}" alt=""></a>
                                </div>

                                <div class="text-box-product ml-4">
                                    

                                    <div class="name-product">
                                        <a href="">Tên sản phẩm</a> <br>
                                        <a href="">Chi tiết</a>
                                    </div>

                                    <div class="price-sale">
                                        400,000 VNĐ (sale 10%)
                                    </div>
                                    <div class="price" >
                                        {{ number_format(500000) }} VND
                                    </div>

                                    <div class="add-product-box mt-4 d-flex">

                                        <div class="add-1">
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="ml-3 icon-heart">
                                            <i class="far fa-heart"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="box-1 d-flex mb-3">
                                <div class="img-box-product">
                                    <a href="#"><img src="{{ asset('images/1x/product-2.png') }}" alt=""></a>
                                </div>

                                <div class="text-box-product ml-4">
                                    

                                    <div class="name-product">
                                        <a href="">Tên sản phẩm</a> <br>
                                        <a href="">Chi tiết</a>
                                    </div>

                                    <div class="price-sale">
                                        400,000 VNĐ (sale 10%)
                                    </div>
                                    <div class="price" >
                                        {{ number_format(500000) }} VND
                                    </div>

                                    <div class="add-product-box mt-4 d-flex">

                                        <div class="add-1">
                                            <a href="#">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="ml-3 icon-heart">
                                            <i class="far fa-heart"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- panigation -->
                        <div class="pagina-tion mt-4">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Tiếp</a></li>
                                </ul>
                            </nav>
                        </div>


                    </div>




                </div>
            </div>

        </div>
        </div>
    </section>




</main>

@endsection
