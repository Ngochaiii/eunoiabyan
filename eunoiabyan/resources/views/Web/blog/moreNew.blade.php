@extends('layouts.web.default')

@section('content')
    <section class="bread-crumb mb-3">
        <span class="crumb-border"></span>
        <div class="container">
            <div class="row">
                <div class="col-12 a-left">
                    <ul class="breadcrumb m-0 px-0">
                        <li>
                            <a href="{{route('home')}}" target="_self"><span>Trang chủ</span></a>
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>

                        <li class="active">
                            <span>Tin tức</span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="blogpage section">
        <div class="containers" itemscope itemtype="https://schema.org/Blog">
            <div class="wrap_background_aside margin-bottom-0">
                <div class="container">
                    <h1 class="title_page text-center">Tin tức</h1>

                    <div class="row blog-list">
                        <div class="col-lg-9 col-12 content-blog">
                            <div class="row">

                                <div class="col-12">
                                    <div class="blogwp ">
                                        <a class="image-blog card-img-top text-center position-relative 
       d-flex align-items-center justify-content-center
       aspect-ratio rounded overflow-hidden"
                                            href="{{route('blogs.news.ceo_new')}}"
                                            title="CEO Lan Anh và những dự án truyền cảm hứng nghệ thuật 0 đồng"
                                            style=' --width: 433;
      --height: 231;'>
                                            <img loading="lazy" class="img-fluid m-auto mh-100 w-auto"
                                                src="{{asset('assets/file.hstatic.net/200000685745/article/ceo_vu_lan_anh_6_335418b904494936b79fdf1844e2e162.jpg')}} "
                                                alt="CEO Lan Anh và những dự án truyền cảm hứng nghệ thuật 0 đồng">
                                        </a>
                                        <div class="content_blog clearfix card-body px-0 py-2">
                                            <h3 class>
                                                <a class='link'
                                                    href="{{route('blogs.news.ceo_new')}}"
                                                    title="CEO Lan Anh và những dự án truyền cảm hứng nghệ thuật 0 đồng">CEO
                                                    Lan Anh và những dự án truyền cảm hứng nghệ thuật 0 đồng</a>
                                            </h3>
                                            <div class="media">
                                                <div class="media-body">
                                                    <div class='art-info text-muted '>
                                                        <span>
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-calendar" />
                                                            </svg> Th 5 22/09/2022
                                                        </span>
                                                        <span class="reading-time">
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-clock" />
                                                            </svg>

                                                            9 phút đọc

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="justify">
                                                <span class="art-summary">

                                                    Gương mặt sáng với nụ cười tươi rói, gặp Lan Anh lần nào cũng cho
                                                    tôi cảm giác chị luôn tràn đầy năng lượng tích cực...

                                                </span>
                                                <a class="button_custome_35 link"
                                                    href="{{route('blogs.news.ceo_new')}}"
                                                    title="Đọc tiếp">Đọc tiếp</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="blogwp ">
                                        <a class="image-blog card-img-top text-center position-relative 
       d-flex align-items-center justify-content-center
       aspect-ratio rounded overflow-hidden"
                                            href="{{route('blogs.news.ceo_VLA')}}"
                                            title="CEO Vũ Lan Anh dành nhiều tâm huyết cho thời trang trẻ em và ươm mầm tài năng nhí"
                                            style=' --width: 433;
      --height: 231;'>
                                            <img loading="lazy" class="img-fluid m-auto mh-100 w-auto"
                                                src="{{asset('assets/file.hstatic.net/200000685745/article/destination_runway_da_nang_18_f626ed5c336d47478ad315dd777372d3.jpg')}} "
                                                alt="CEO Vũ Lan Anh dành nhiều tâm huyết cho thời trang trẻ em và ươm mầm tài năng nhí">
                                        </a>
                                        <div class="content_blog clearfix card-body px-0 py-2">
                                            <h3 class>
                                                <a class='link'
                                                    href="{{route('blogs.news.ceo_VLA')}}"
                                                    title="CEO Vũ Lan Anh dành nhiều tâm huyết cho thời trang trẻ em và ươm mầm tài năng nhí">CEO
                                                    Vũ Lan Anh dành nhiều tâm huyết cho thời trang trẻ em và ươm mầm
                                                    tài năng nhí</a>
                                            </h3>
                                            <div class="media">
                                                <div class="media-body">
                                                    <div class='art-info text-muted '>
                                                        <span>
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-calendar" />
                                                            </svg> Th 6 05/08/2022
                                                        </span>
                                                        <span class="reading-time">
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-clock" />
                                                            </svg>

                                                            6 phút đọc

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="justify">
                                                <span class="art-summary">

                                                    Chị Vũ Lan Anh là CEO của thương hiệu thời trang Eunoia by AN và
                                                    trung tâm học tập nghệ thuật và kỹ năng mềm Casa...

                                                </span>
                                                <a class="button_custome_35 link"
                                                    href="{{route('blogs.news.ceo_VLA')}}"
                                                    title="Đọc tiếp">Đọc tiếp</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="blogwp ">
                                        <a class="image-blog card-img-top text-center position-relative 
       d-flex align-items-center justify-content-center
       aspect-ratio rounded overflow-hidden"
                                            href="{{route('blogs.news.BST_black')}}"
                                            title="Eunoia by AN ra mắt bộ sưu tập " Black Swan""
                                            style=' --width: 433;
      --height: 231;'>
                                            <img loading="lazy" class="img-fluid m-auto mh-100 w-auto"
                                                src="{{asset('assets/file.hstatic.net/200000685745/article/destination_runway_da_nang_1_87a9617d431e43d1a00a30cf21f5aa09.jpg')}} "
                                                alt="Eunoia by AN ra mắt bộ sưu tập " Black Swan"">
                                        </a>
                                        <div class="content_blog clearfix card-body px-0 py-2">
                                            <h3 class>
                                                <a class='link' href="{{route('blogs.news.BST_black')}}"
                                                    title="Eunoia by AN ra mắt bộ sưu tập " Black Swan"">Eunoia by AN
                                                    ra mắt bộ sưu tập "Black Swan"</a>
                                            </h3>
                                            <div class="media">
                                                <div class="media-body">
                                                    <div class='art-info text-muted '>
                                                        <span>
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-calendar" />
                                                            </svg> Th 3 12/07/2022
                                                        </span>
                                                        <span class="reading-time">
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-clock" />
                                                            </svg>

                                                            2 phút đọc

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="justify">
                                                <span class="art-summary">

                                                    Thương hiệu Eunoia của AN ra mắt bộ sưu tập “Thiên nga đen” lấy
                                                    cảm hứng từ vẻ đẹp kiêu sa và bí ẩn của loài...

                                                </span>
                                                <a class="button_custome_35 link"
                                                    href="{{route('blogs.news.BST_black')}}"
                                                    title="Đọc tiếp">Đọc tiếp</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="blogwp ">
                                        <a class="image-blog card-img-top text-center position-relative 
       d-flex align-items-center justify-content-center
       aspect-ratio rounded overflow-hidden"
                                            href="{{route('blogs.news.eunoia_by_AN')}}"
                                            title="Ấn tượng với BST “Black Swan” mang vẻ đẹp kiêu sa của những chú thiên nga đen đến từ thương hiệu Eunoia by AN"
                                            style=' --width: 433;
      --height: 231;'>
                                            <img loading="lazy" class="img-fluid m-auto mh-100 w-auto"
                                                src="{{asset('assets/file.hstatic.net/200000685745/article/black_swan_cover_web_e3a65728cca94f53977db68ed8520b78.jpg')}} "
                                                alt="Ấn tượng với BST “Black Swan” mang vẻ đẹp kiêu sa của những chú thiên nga đen đến từ thương hiệu Eunoia by AN">
                                        </a>
                                        <div class="content_blog clearfix card-body px-0 py-2">
                                            <h3 class>
                                                <a class='link'
                                                    href="{{route('blogs.news.eunoia_by_AN')}}"
                                                    title="Ấn tượng với BST “Black Swan” mang vẻ đẹp kiêu sa của những chú thiên nga đen đến từ thương hiệu Eunoia by AN">Ấn
                                                    tượng với BST “Black Swan” mang vẻ đẹp kiêu sa của những chú thiên
                                                    nga đen đến từ thương hiệu Eunoia by AN</a>
                                            </h3>
                                            <div class="media">
                                                <div class="media-body">
                                                    <div class='art-info text-muted '>
                                                        <span>
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-calendar" />
                                                            </svg> Th 4 15/06/2022
                                                        </span>
                                                        <span class="reading-time">
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-clock" />
                                                            </svg>

                                                            7 phút đọc

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="justify">
                                                <span class="art-summary">

                                                    Mới đây, thương hiệu thời trang trẻ em Eunoia by AN đã trình làng
                                                    BST “Black Swan”. Những thiết kế lộng lẫy, tinh tế, kiêu sa,...

                                                </span>
                                                <a class="button_custome_35 link"
                                                    href="{{route('blogs.news.eunoia_by_AN')}}"
                                                    title="Đọc tiếp">Đọc tiếp</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center pageinate-page-blog col-12">
                                    <nav class="clearfix relative nav_pagi w_100">
                                        <ul class="pagination clearfix float-right">

                                            <li class="page-item hidden-xs">
                                                <a class="page-link" href="{{route('blogs.news')}}" data-page='1'>
                                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                </a>
                                            </li>

                                            <li class="page-item">
                                                <a class="page-link" href="{{route('blogs.news')}}" data-page='1'>1</a>
                                            </li>

                                            <li class="active page-item disabled">
                                                <a class="page-link" href="#">2</a>
                                            </li>

                                            <li class="page-item disabled"><a class="page-link" href="#"><i
                                                        class="fa fa-angle-right"></i></a></li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12 left-content sidebar">
                            <aside class="aside-item blog-sidebar sidebar-category collection-category margin-bottom-25">
                                <div class="aside-title">
                                    <h2 class="title-head margin-top-0 cate"><span>Danh mục tin tức</span></h2>
                                </div>
                                <div class="aside-content">
                                    <nav class="nav-category navbar-toggleable-md">
                                        <ul class="nav navbar-pills flex-column">

                                            <li class="nav-item"><a class="nav-link link" href="{{route('home')}}">Trang
                                                    chủ

                                                </a>

                                            </li>

                                            <li class="nav-item ">
                                                <a href="{{route('collection.all')}}" class=" nav-link link ">
                                                    Sản phẩm
                                                </a>
                                                <i class="fa fa-caret-down"></i>
                                                <ul class="dropdown-menu">

                                                    <li class="nav-item">
                                                        <a class="nav-link link"
                                                            href="{{route('collection.nangtho')}}">BST
                                                            Nàng Thơ

                                                        </a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link link"
                                                            href="{{route('collection.black')}}">BST Black Swan

                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li class="nav-item"><a class="nav-link link" href="{{route('blogs.news')}}">Blog

                                                </a>

                                            </li>

                                            <li class="nav-item"><a class="nav-link link"
                                                    href="{{route('introduce')}}">Giới thiệu

                                                </a>

                                            </li>

                                            <li class="nav-item"><a class="nav-link link"
                                                    href="{{route('contact')}}">Liên hệ

                                                </a>

                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                            </aside>

                            <div class="blog-aside aside-item blog-aside-article">
                                <div class="aside-title">
                                    <h2 class="title-head"><span><a class="link" href="{{route('blogs.news')}}"
                                                title="Tin nổi bật">Tin nổi bật</a></span></h2>
                                </div>
                                <div class="aside-content-article aside-content margin-top-0">
                                    <div class="blog-image-list">

                                        <div class="blogwp clearfix media">

                                            <a class="image-blog text-center mr-2 mr-md-3"
                                                href="{{route('blogs.news.maika')}}"
                                                title="Maika kết bộ sưu tập nhà Eunoia by AN bằng lời ca “A Whole New World”">
                                                <img loading="lazy" class="img-fluid"
                                                    src="{{asset('assets/file.hstatic.net/200000685745/article/maika_2-_708911baf7d543a79ba11a57c5bdb9c0_medium.jpg')}} "
                                                    alt="Maika kết bộ sưu tập nhà Eunoia by AN bằng lời ca “A Whole New World”">
                                            </a>

                                            <div class="content_blog clearfix media-body ">
                                                <h3 class='mt-0 mb-1'>
                                                    <a class='link'
                                                        href="{{route('blogs.news.maika')}}"
                                                        title="Maika kết bộ sưu tập nhà Eunoia by AN bằng lời ca “A Whole New World”">Maika
                                                        kết bộ sưu tập nhà Eunoia by AN bằng lời ca “A Whole New World”</a>
                                                </h3>

                                            </div>
                                        </div>

                                        <div class="blogwp clearfix media">

                                            <a class="image-blog text-center mr-2 mr-md-3"
                                                href="{{route('blogs.news.Eunoia_Wonderland')}}"
                                                title="Dàn mẫu nhí chân trần trình diễn tại Eunoia’s Wonderland Fashion show">
                                                <img loading="lazy" class="img-fluid"
                                                    src="{{asset('assets/file.hstatic.net/200000685745/article/eunoia_s_wonderland_1-_6da473227dc44d60832a5d22a85f0202_medium.jpg')}} "
                                                    alt="Dàn mẫu nhí chân trần trình diễn tại Eunoia’s Wonderland Fashion show">
                                            </a>

                                            <div class="content_blog clearfix media-body ">
                                                <h3 class='mt-0 mb-1'>
                                                    <a class='link'
                                                        href="{{route('blogs.news.Eunoia_Wonderland')}}"
                                                        title="Dàn mẫu nhí chân trần trình diễn tại Eunoia’s Wonderland Fashion show">Dàn
                                                        mẫu nhí chân trần trình diễn tại Eunoia’s Wonderland Fashion
                                                        show</a>
                                                </h3>

                                            </div>
                                        </div>

                                        <div class="blogwp clearfix media">

                                            <a class="image-blog text-center mr-2 mr-md-3"
                                                href="{{route('blogs.news.brand_Eunoia')}}"
                                                title="Thương hiệu Eunoia by AN lan tỏa yêu thương với loạt dự án thiện nguyện">
                                                <img loading="lazy" class="img-fluid"
                                                    src="{{asset('assets/file.hstatic.net/200000685745/article/show_nang_thu_resize_web_c4dd6d465aef4b6097fedf2f8ddf4d68_medium.jpg')}} "
                                                    alt="Thương hiệu Eunoia by AN lan tỏa yêu thương với loạt dự án thiện nguyện">
                                            </a>

                                            <div class="content_blog clearfix media-body ">
                                                <h3 class='mt-0 mb-1'>
                                                    <a class='link'
                                                        href="{{route('blogs.news.brand_Eunoia')}}"
                                                        title="Thương hiệu Eunoia by AN lan tỏa yêu thương với loạt dự án thiện nguyện">Thương
                                                        hiệu Eunoia by AN lan tỏa yêu thương với loạt dự án thiện nguyện</a>
                                                </h3>

                                            </div>
                                        </div>

                                        <div class="blogwp clearfix media">

                                            <a class="image-blog text-center mr-2 mr-md-3"
                                                href="{{route('blogs.news.kidmodel_vadete')}}"
                                                title="Dàn mẫu nhí diễn mở màn và Vedette show Eunoia’s Wonderland">
                                                <img loading="lazy" class="img-fluid"
                                                    src="{{asset('assets/file.hstatic.net/200000685745/article/yyy-6663-1669364775_bbcf0825081b463096e39fe20ba3a015_medium.jpg')}} "
                                                    alt="Dàn mẫu nhí diễn mở màn và Vedette show Eunoia’s Wonderland">
                                            </a>

                                            <div class="content_blog clearfix media-body ">
                                                <h3 class='mt-0 mb-1'>
                                                    <a class='link'
                                                        href="{{route('blogs.news.kidmodel_vadete')}}"
                                                        title="Dàn mẫu nhí diễn mở màn và Vedette show Eunoia’s Wonderland">Dàn
                                                        mẫu nhí diễn mở màn và Vedette show Eunoia’s Wonderland</a>
                                                </h3>

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
@endsection
