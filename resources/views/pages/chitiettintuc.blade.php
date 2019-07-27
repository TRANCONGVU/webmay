@extends('master-layout')
@section('title')
chi tiết tin tức
@endsection
@section('content')
<div class="container">
    <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="#">trang chủ</a>
                        <a class="breadcrumb-item" href="#">tin tức</a>

                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="col-md-10 offset-md-1 d-flex flex-column">
        <div class="d-flex flex-column">
            <a href="" class="tin-title">CÓ THỂ BẠN CHƯA BIẾT CÁCH DÙNG SÚNG HƠI ĐÚNG CÁCH</a>
            <p class="tin-icon"><i class="fa fa-calendar-alt"></i> Ngày đăng: 19-09-2019 &emsp; <i
                    class="fas fa-user-cog"></i> Admin</p>
        </div>
        <div class="tin-contetn">
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non asperiores quo ipsa tempore itaque quis,
                dolore dolores delectus aliquid fugit nulla impedit accusantium labore distinctio tempora. Ducimus
                blanditiis fugiat veritatis?</span>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quibusdam qui ipsum exercitationem
                illum, aliquam recusandae a quia cumque nam, voluptatem mollitia quas? Aliquid nostrum blanditiis ad
                voluptatem corrupti ducimus!
            </span>
            <img src="images/sungmay1.png" alt="">

            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non asperiores quo ipsa tempore itaque quis,
                dolore dolores delectus aliquid fugit nulla impedit accusantium labore distinctio tempora. Ducimus
                blanditiis fugiat veritatis?</span>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quibusdam qui ipsum exercitationem
                illum, aliquam recusandae a quia cumque nam, voluptatem mollitia quas? Aliquid nostrum blanditiis ad
                voluptatem corrupti ducimus!
            </span>
            <img src="images/sungmay1.png" alt="">

            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non asperiores quo ipsa tempore itaque quis,
                dolore dolores delectus aliquid fugit nulla impedit accusantium labore distinctio tempora. Ducimus
                blanditiis fugiat veritatis?</span>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quibusdam qui ipsum exercitationem
                illum, aliquam recusandae a quia cumque nam, voluptatem mollitia quas? Aliquid nostrum blanditiis ad
                voluptatem corrupti ducimus!
            </span>
            <img src="images/sungmay1.png" alt="">
            <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi accusantium fuga maxime odit,
                obcaecati consectetur animi saepe deleniti perferendis necessitatibus laboriosam voluptatum error,
                voluptatibus quam, magnam vero recusandae quod. Nisi.</span>
                <h6 class="text-right text-cappilaze mt-5">Hải Thu</h6>
        </div>
        <div class="d-flex flex-column">
            <a href="" class="tin-title text-left">Các Tin Liên Quan</a>
        </div>
        <div class="tintuc owl-carousel owl-theme">
            <div class="item">
                <img src="images/sungmay1.png" alt="">
                <div class="d-flex flex-column tin-title-silde">
                    <a href="" class="tin-slide">CÓ THỂ BẠN CHƯA BIẾT CÁCH DÙNG SÚNG HƠI ĐÚNG CÁCH</a>
                    <p class="tin-icon-slide"><i class="fa fa-calendar-alt"></i> Ngày đăng: 19-09-2019 &emsp; <i
                            class="fas fa-user-cog"></i> Admin</p>
                </div>
            </div>
            <div class="item">
                <img src="images/sungmay1.png" alt="">
                <div class="d-flex flex-column tin-title-silde">
                    <a href="" class="tin-slide">CÓ THỂ BẠN CHƯA BIẾT CÁCH DÙNG SÚNG HƠI ĐÚNG CÁCH</a>
                    <p class="tin-icon-slide"><i class="fa fa-calendar-alt"></i> Ngày đăng: 19-09-2019 &emsp; <i
                            class="fas fa-user-cog"></i> Admin</p>
                </div>
            </div>
            <div class="item">
                <img src="images/sungmay1.png" alt="">
                <div class="d-flex flex-column tin-title-silde">
                    <a href="" class="tin-slide">CÓ THỂ BẠN CHƯA BIẾT CÁCH DÙNG SÚNG HƠI ĐÚNG CÁCH</a>
                    <p class="tin-icon-slide"><i class="fa fa-calendar-alt"></i> Ngày đăng: 19-09-2019 &emsp; <i
                            class="fas fa-user-cog"></i> Admin</p>
                </div>
            </div>
            <div class="item">
                <img src="images/sungmay1.png" alt="">
                <div class="d-flex flex-column tin-title-silde">
                    <a href="" class="tin-slide">CÓ THỂ BẠN CHƯA BIẾT CÁCH DÙNG SÚNG HƠI ĐÚNG CÁCH</a>
                    <p class="tin-icon-slide"><i class="fa fa-calendar-alt"></i> Ngày đăng: 19-09-2019 &emsp; <i
                            class="fas fa-user-cog"></i> Admin</p>
                </div>
            </div>
            <div class="item">
                <img src="images/sungmay1.png" alt="">
                <div class="d-flex flex-column tin-title-silde">
                    <a href="" class="tin-slide">CÓ THỂ BẠN CHƯA BIẾT CÁCH DÙNG SÚNG HƠI ĐÚNG CÁCH</a>
                    <p class="tin-icon-slide"><i class="fa fa-calendar-alt"></i> Ngày đăng: 19-09-2019 &emsp; <i
                            class="fas fa-user-cog"></i> Admin</p>
                </div>
            </div>

        </div>



    </div>

</div>
<script type="text/javascript" src="lib/jquery.min.js"></script>
<script type="text/javascript" src="lib/OwlCarousel2-2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
@endsection
