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
                                    <h3 class="main-title">loại mặt hàng</h3>
                                    <i class="fa fa-plus icon-plus" aria-hidden="true"></i>
                                </div>

                                <div class="content-box">
                                    <ul class="color-box box-colum">
                                        <li><a href="#">dung cu dien <span>(5)</span></a></li>
                                        <li><a href="#">dung cu khi nen <span>(2)</span></a></li>
                                        <li><a href="#">dung cu chay pin <span>(1)</span></a></li>
                                        <li><a href="#">dung cu chay pin <span>(1)</span></a></li>
                                        <li><a href="#">dung cu chay pin <span>(1)</span></a></li>
                                        <li><a href="#">dung cu chay pin <span>(1)</span></a></li>
                                        <li><a href="#">dung cu chay pin <span>(1)</span></a></li>
                                        <li><a href="#">dung cu chay pin <span>(1)</span></a></li>
                                        <li><a href="#">dung cu chay pin <span>(1)</span></a></li>
                                        <li><a href="#">dung cu chay pin <span>(1)</span></a></li>

                                    </ul>
                                </div>
                            </div>

                            <div class="box-1">
                                <div class="box-1-title">
                                    <h3 class="main-title">giá</h3>
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
                                    <h3 class="main-title">nhãn hàng</h3>
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
                                    <h3 class="main-title">xuất xứ</h3>
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

                                    <span>tìm kiếm theo:</span>

                                    <a href="#" data-toggle="dropdown">
                                        tên sản phẩm <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Link 1</a>
                                        <a class="dropdown-item" href="#">Link 2</a>
                                        <a class="dropdown-item" href="#">Link 3</a>
                                    </div>

                                </div>

                                <div class="dropdown dropdown-1 ">

                                    <span>trình chiếu: </span>

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
                                        <a id="menu" onclick="menu" class="mr-3"><i class="fas fa-th"
                                                style="cursor: pointer;"></i></a>
                                        <a id="danhsach" onclick="danhsach"> <i class="fas fa-list"
                                                style="cursor: pointer;"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- product-list -->
                        <div class="">
                            <div class="h-best-sale-content">
                                <div class="row product">
                                    <div class="item-product col-md-4">
                                        <div class="h-best-sale-product h-image-scale">
                                            <a href="{{ url('chitiet') }}">
                                                <img src="{{ asset('images/1x/trang-chu-1.png') }}" class="img-fluid">
                                            </a>
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
                                            <div class="product-name">
                                                <a href="">Tên sản phẩm</a>
                                            </div>
                                            <div>
                                                <a href="">Mã Sản Phẩm: vuFtrY</a>
                                            </div>

                                            <div class="gia">
                                                {{ number_format(700000) }} VND
                                            </div>
                                            <div>
                                                <span class="sale">700000 vnd</span>
                                                <span>sale 10%</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="item-product col-md-4">
                                        <div class="h-best-sale-product h-image-scale">
                                            <a href="{{ url('chitiet') }}">
                                                <img src="{{ asset('images/1x/trang-chu-1.png') }}" class="img-fluid">
                                            </a>
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
                                            <div class="product-name">
                                                <a href="">Tên sản phẩm</a>
                                            </div>
                                            <div>
                                                <a href="">Mã Sản Phẩm: vuFtrY</a>
                                            </div>

                                            <div class="gia">
                                                {{ number_format(700000) }} VND
                                            </div>
                                            <div>
                                                <span class="sale">700000 vnd</span>
                                                <span>sale 10%</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="item-product col-md-4">
                                        <div class="h-best-sale-product h-image-scale">
                                            <a href="{{ url('chitiet') }}">
                                                <img src="{{ asset('images/1x/trang-chu-1.png') }}" class="img-fluid">
                                            </a>
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
                                            <div class="product-name">
                                                <a href="">Tên sản phẩm</a>
                                            </div>
                                            <div>
                                                <a href="">Mã Sản Phẩm: vuFtrY</a>
                                            </div>

                                            <div class="gia">
                                                {{ number_format(700000) }} VND
                                            </div>
                                            <div>
                                                <span class="sale">700000 vnd</span>
                                                <span>sale 10%</span>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>

                            <!-- product-box -->



                        </div>




                    </div>
                    <div class="container my-5">
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Tiếp</a></li>
                            </ul>
                        </div>
                </div>

            </div>

        </div>
    </section>
</main>
<script type="text/javascript" src="js/danhsach.js"></script>
@endsection
