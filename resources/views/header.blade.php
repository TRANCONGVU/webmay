<div class="container-fluid p-0 m-0">
    <div class="title-head">
        Đăng ký thành viên để nhận giá thương mại và nhiều ưu đãi khác
    </div>
</div>
<div class="container-fluid p-0 m-0">
    <div class="title-head2">
        Đăng ký thành viên ngay
    </div>
</div>
<div class="container-fluid">

    <div class="container an d-flex justify-content-end">
        <div class="head d-flex justify-content-start mt-3">
            <div class="search">
                <div>
                    <input type="text" placeholder="Tìm kiếm tại đây...">
                </div>
                <div>
                    <img src="images/search.png" alt="">
                </div>
            </div>
            <form style="border-right : 1px solid black; padding-right : 10px;">
                <div class="form-group" style="display: flex; align-items: center;">
                    <select class="form-control" id="">
                        <option>VIE</option>
                        <option>ENG</option>
                    </select>
                </div>
            </form>
            <div class="dn">
                <img src="images/heath.png" alt="">
                <a href="" style="font-size: 14px;">Mục Yêu Thích</a>
            </div>
            <div class="dn">
                <img src="images/user.png" alt="">
                <a href="#login" data-toggle="modal">Đăng Nhập</a>
                <span class="text-lowercase" style="padding: 0 10px;color : grey">hoặc</span>
                <a href="#signUp" data-toggle="modal">Tạo Tài Khoản</a>
            </div>
        </div>
    </div>
</div>
<nav class="nav-horizontal container-fluid">
    <div class="nav-horizontal-container container">
        <a href="{{ url('/') }}">
            <div class="logo">
                <img src="images/logo.png" alt="">
            </div>
        </a>
        <div class="nav-horizontal-content">
            <ul class="nav-ul-lv-1">
                <li><a href="{{ url('/') }}">Trang chủ</a></li>
                <li>
                    <a href="{{ url('sanpham') }}">Sản phẩm<i class="fas fa-chevron-down"></i></a>
                    <div class="menu-lv-2">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="">Dụng cụ điện</a>
                                <a href="">dụng cụ khí nén</a>
                                <a href="">dụng cụ chạy pin</a>
                                <a href="">dụng cụ cầm tay</a>
                                <a href="">dụng cụ cắt gọt</a>
                            </div>
                            <div class="col-md-6">
                                <a href="">dụng cụ đo lường</a>
                                <a href="">thiết bị hàn</a>
                                <a href="">vệ sinh công nghiệp</a>
                                <a href="">phụ kiện khí nén</a>
                                <a href="">đinh công nghiệp</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="{{ url('tintuc') }}">Tin tức</a></li>
                <li><a href="{{ url('lienhe') }}">Liên hệ </a></li>
                <li class="cart-head">
                    <a href="#">
                        <img src="images/cart.png" alt="">
                    </a>
                    <div class="item-cart">
                        <span>10</span>
                    </div>
                </li>

            </ul>
            <div class="menu-mobile-button"><i class="fas fa-bars"></i></div>
        </div>
    </div>
    <div class="container" style="height : 1px ; background-color: #dedede;margin-top:20px;width : 100%;">

    </div>
</nav>
<script type="text/javascript" src="js/nav-horizontal.js"></script>

<section class="menu-mobile">
    <div class="menu-mobile-bg"></div>
    <div class="menu-mobile-box">
        <div class="menu-mobile-info">

        </div>
        <div class="menu-mobile-content">
            <div class="menu-left">
                <div class="menu-left-title">
                    <h3>Menu</h3>
                </div>
                <div class="menu-left-content">

                    <ul class="menu-left-ul-lv-1">
                        <li><a href="#">Trang chủ</a></li>
                        <li>
                            <a href="#">Sản Phẩm</a>
                            <i class="fas fa-plus"></i>
                            <ul class="menu-left-ul-lv-child">
                                <li><a href="#">Dụng cụ điện</a></li>
                                <li><a href="#">Dụng cụ khí nén</a></li>
                                <li><a href="#">Dụng cụ chạy pin</a></li>
                                <li><a href="#">Dụng cụ cầm tay</a></li>
                                <li><a href="#">Dụng cụ cắt gọt</a></li>
                                <li><a href="#">Dụng cụ đo lường</a></li>
                                <li><a href="#">Thiết bị hàn</a></li>
                                <li><a href="#">Vệ sinh công nghiệp</a></li>
                                <li><a href="#">Phụ kiện khí nén</a></li>
                                <li><a href="#">Đinh công nghiệp</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Tin Tức</a></li>
                        <li><a href="#">Liên Hệ</a></li>
                        <li><a href="#">Đăng Nhập</a></li>
                        <li><a href="#">Đăng Ký</a></li>
                    </ul>

                </div> <!-- menu-left-content -->
            </div> <!-- menu-left -->
            <script type="text/javascript" src="js/menu-left-js.js"></script>
        </div>
    </div>
    <script type="text/javascript" src="js/menu-mobile.js"></script>
</section>

<!-- login -->
<section>
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle" style="text-transform: uppercase;">đăng nhập
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">tên tài khoản hoặc địa chỉ email <span
                                    style="color: #d70000;">*</span></label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email" require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">mật khẩu <span style="color: #d70000;">*</span> </label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password" require>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">ghi nhớ mật khẩu</label>
                        </div>
                        <button type="submit" class="btn btn-primary" style="text-transform: uppercase;">đăng
                            nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- sign up -->
<section>
    <div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle" style="text-transform: uppercase;">đăng ký
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">tên tài khoản <span style="color: #d70000;">*</span></label>
                            <input type="text" class="form-control" id="exampleInputEmail1" require>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">địa chỉ email <span style="color: #d70000;">*</span></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" require>

                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">mật khẩu <span style="color: #d70000;">*</span> </label>
                            <input type="password" class="form-control" id="exampleInputPassword1" require>
                        </div>
                        <button type="submit" class="btn btn-primary" style="text-transform: uppercase;">đăng
                            ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
