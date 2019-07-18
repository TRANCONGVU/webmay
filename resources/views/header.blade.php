<div class="container-fluid">
    <div class="container an d-flex justify-content-end">
        <div class="head d-flex justify-content-start mt-3">
            <div class="search">
                <input type="text" placeholder="tìm kiếm tại đây ...">
                <a><img src="images/search.png" alt=""></a>
            </div>
            <form>
                <div class="form-group">
                    <select class="form-control" id="">
                        <option>VIE</option>
                        <option>ENG</option>
                    </select>
                </div>
            </form>
            <div class="dn">
                <img src="images/heath.png" alt="">
                <a href="">Mục Yêu Thích</a>
            </div>
            <div class="dn">
                <img src="images/user.png" alt="">
                <a href="">Đăng nhập</a>
                <span>hoặc</span>
                <a href="">Đăng ký</a>
            </div>
        </div>
    </div>
</div>
<nav class="nav-horizontal container-fluid">
    <div class="nav-horizontal-container container">
        <div class="logo">
            <img src="images/logo.png" alt="">
        </div>
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
                    <a href="#"><i class="fas fa-luggage-cart"></i></a>
                    <div class="item-cart">
                        <span>10</span>
                    </div>
                </li>

            </ul>
            <div class="menu-mobile-button"><i class="fas fa-bars"></i></div>
        </div>
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
