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
            <meta itemprop="name" content="Tin tức">
            <meta itemprop="description" content>
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
                                            href="{{route('blogs.news.maika')}}"
                                            title="Maika kết bộ sưu tập nhà Eunoia by AN bằng lời ca “A Whole New World”"
                                            style=' --width: 433;
      --height: 231;'>
                                            <img loading="lazy" class="img-fluid m-auto mh-100 w-auto"
                                                src="{{ asset('assets/file.hstatic.net/200000685745/article/maika_2-_708911baf7d543a79ba11a57c5bdb9c0.jpg') }}"
                                                alt="Maika kết bộ sưu tập nhà Eunoia by AN bằng lời ca “A Whole New World”">
                                        </a>
                                        <div class="content_blog clearfix card-body px-0 py-2">
                                            <h3 class>
                                                <a class='link'
                                                    href="{{route('blogs.news.maika')}}"
                                                    title="Maika kết bộ sưu tập nhà Eunoia by AN bằng lời ca “A Whole New World”">Maika
                                                    kết bộ sưu tập nhà Eunoia by AN bằng lời ca “A Whole New World”</a>
                                            </h3>
                                            <div class="media">
                                                <div class="media-body">
                                                    <div class='art-info text-muted '>
                                                        <span>
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-calendar" />
                                                            </svg> Th 4 30/11/2022
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

                                                    Mới đây, Eunoia’s Wonderland Fashion Show đã diễn ra tại Hà Nội
                                                    nhận được sự chú ý của đông đảo người hâm mộ thời trang. Kết...

                                                </span>
                                                <a class="button_custome_35 link"
                                                    href="{{route('blogs.news.maika')}}"
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
                                            href="{{route('blogs.news.kidmodel')}}"
                                            title="Dàn mẫu nhí chân trần trình diễn tại Eunoia’s Wonderland Fashion show"
                                            style=' --width: 433;
      --height: 231;'>
                                            <img loading="lazy" class="img-fluid m-auto mh-100 w-auto"
                                                src="{{ asset('assets/file.hstatic.net/200000685745/article/eunoia_s_wonderland_1-_6da473227dc44d60832a5d22a85f0202.jpg') }}"
                                                alt="Dàn mẫu nhí chân trần trình diễn tại Eunoia’s Wonderland Fashion show">
                                        </a>
                                        <div class="content_blog clearfix card-body px-0 py-2">
                                            <h3 class>
                                                <a class='link'
                                                    href="{{route('blogs.news.kidmodel')}}"
                                                    title="Dàn mẫu nhí chân trần trình diễn tại Eunoia’s Wonderland Fashion show">Dàn
                                                    mẫu nhí chân trần trình diễn tại Eunoia’s Wonderland Fashion show</a>
                                            </h3>
                                            <div class="media">
                                                <div class="media-body">
                                                    <div class='art-info text-muted '>
                                                        <span>
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-calendar" />
                                                            </svg> Th 2 28/11/2022
                                                        </span>
                                                        <span class="reading-time">
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-clock" />
                                                            </svg>

                                                            3 phút đọc

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="justify">
                                                <span class="art-summary">

                                                    &nbsp;Khoác lên mình những thiết kế thời trang đầy màu sắc, dàn
                                                    mẫu nhí đã mang đến cho khán giả những phần trình diễn ấn
                                                    tượng.Dàn...

                                                </span>
                                                <a class="button_custome_35 link"
                                                    href="{{route('blogs.news.kidmodel')}}"
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
                                            href="{{route('blogs.news.brand_Eunoia')}}"
                                            title="Thương hiệu Eunoia by AN lan tỏa yêu thương với loạt dự án thiện nguyện"
                                            style=' --width: 433;
      --height: 231;'>
                                            <img loading="lazy" class="img-fluid m-auto mh-100 w-auto"
                                                src="{{ asset('assets/file.hstatic.net/200000685745/article/show_nang_thu_resize_web_c4dd6d465aef4b6097fedf2f8ddf4d68.jpg') }}"
                                                alt="Thương hiệu Eunoia by AN lan tỏa yêu thương với loạt dự án thiện nguyện">
                                        </a>
                                        <div class="content_blog clearfix card-body px-0 py-2">
                                            <h3 class>
                                                <a class='link'
                                                    href="{{route('blogs.news.brand_Eunoia')}}"
                                                    title="Thương hiệu Eunoia by AN lan tỏa yêu thương với loạt dự án thiện nguyện">Thương
                                                    hiệu Eunoia by AN lan tỏa yêu thương với loạt dự án thiện nguyện</a>
                                            </h3>
                                            <div class="media">
                                                <div class="media-body">
                                                    <div class='art-info text-muted '>
                                                        <span>
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-calendar" />
                                                            </svg> Th 6 18/11/2022
                                                        </span>
                                                        <span class="reading-time">
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-clock" />
                                                            </svg>

                                                            4 phút đọc

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="justify">
                                                <span class="art-summary">

                                                    CEO của thương hiệu Eunoia by AN – Vũ Lan Anh là người dành nhiều
                                                    tâm huyết cho công tác thiện nguyện.Eunoia by AN là thương...

                                                </span>
                                                <a class="button_custome_35 link"
                                                    href="{{route('blogs.news.brand_Eunoia')}}"
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
                                            href="{{route('blogs.news.kidmodel_vadete')}}"
                                            title="Dàn mẫu nhí diễn mở màn và Vedette show Eunoia’s Wonderland"
                                            style=' --width: 433;
      --height: 231;'>
                                            <img loading="lazy" class="img-fluid m-auto mh-100 w-auto"
                                                src="{{ asset('assets/file.hstatic.net/200000685745/article/yyy-6663-1669364775_bbcf0825081b463096e39fe20ba3a015.jpg') }}"
                                                alt="Dàn mẫu nhí diễn mở màn và Vedette show Eunoia’s Wonderland">
                                        </a>
                                        <div class="content_blog clearfix card-body px-0 py-2">
                                            <h3 class>
                                                <a class='link'
                                                    href="{{route('blogs.news.kidmodel_vadete')}}"
                                                    title="Dàn mẫu nhí diễn mở màn và Vedette show Eunoia’s Wonderland">Dàn
                                                    mẫu nhí diễn mở màn và Vedette show Eunoia’s Wonderland</a>
                                            </h3>
                                            <div class="media">
                                                <div class="media-body">
                                                    <div class='art-info text-muted '>
                                                        <span>
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-calendar" />
                                                            </svg> Th 5 10/11/2022
                                                        </span>
                                                        <span class="reading-time">
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-clock" />
                                                            </svg>

                                                            3 phút đọc

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="justify">
                                                <span class="art-summary">

                                                    Mẫu nhí Ruby Ngọc Anh, An Cát Diệp, Suri Thanh Mai, An Nhi, Maika
                                                    Ngọc Khánh sẽ trình diễn tại Eunoia’s Wonderland Fashion Show,
                                                    ngày 26/11.Eunoia...

                                                </span>
                                                <a class="button_custome_35 link"
                                                    href="{{route('blogs.news.kidmodel_vadete')}}"
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
                                            href="{{route('blogs.news.show_fashition')}}"
                                            title="Những thiên thần nhỏ trong show thời trang cổ tích Eunoia’s Wonderland"
                                            style=' --width: 433;
      --height: 231;'>
                                            <img loading="lazy" class="img-fluid m-auto mh-100 w-auto"
                                                src="{{ asset('assets/file.hstatic.net/200000685745/article/eunoia_s_wonderland_campaign_ngua_resize_web_44de8126e22541488f3c5c9e2c945b55.jpg') }}"
                                                alt="Những thiên thần nhỏ trong show thời trang cổ tích Eunoia’s Wonderland">
                                        </a>
                                        <div class="content_blog clearfix card-body px-0 py-2">
                                            <h3 class>
                                                <a class='link'
                                                    href="{{route('blogs.news.show_fashition')}}"
                                                    title="Những thiên thần nhỏ trong show thời trang cổ tích Eunoia’s Wonderland">Những
                                                    thiên thần nhỏ trong show thời trang cổ tích Eunoia’s Wonderland</a>
                                            </h3>
                                            <div class="media">
                                                <div class="media-body">
                                                    <div class='art-info text-muted '>
                                                        <span>
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-calendar" />
                                                            </svg> Th 3 01/11/2022
                                                        </span>
                                                        <span class="reading-time">
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-clock" />
                                                            </svg>

                                                            3 phút đọc

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="justify">
                                                <span class="art-summary">

                                                    Eunoia’s Wonderland Fashion Show đang được giới mộ điệu thời trang
                                                    mong chờ khi mang thông điệp về sự khát khao khám phá vẻ đẹp
                                                    độc...

                                                </span>
                                                <a class="button_custome_35 link"
                                                    href="{{route('blogs.news.show_fashition')}}"
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
                                            href="{{route('blogs.news.Eunoia_Wonderland')}}"
                                            title="Eunoia’s Wonderland Fashion Show mở ra không gian cổ tích ấn tượng"
                                            style=' --width: 433;
      --height: 231;'>
                                            <img loading="lazy" class="img-fluid m-auto mh-100 w-auto"
                                                src="{{ asset('assets/file.hstatic.net/200000685745/article/thumbail_video_web_2c70753fed9f44a8b4a05004bf9a0741.jpg') }}"
                                                alt="Eunoia’s Wonderland Fashion Show mở ra không gian cổ tích ấn tượng">
                                        </a>
                                        <div class="content_blog clearfix card-body px-0 py-2">
                                            <h3 class>
                                                <a class='link'
                                                    href="{{route('blogs.news.Eunoia_Wonderland')}}"
                                                    title="Eunoia’s Wonderland Fashion Show mở ra không gian cổ tích ấn tượng">Eunoia’s
                                                    Wonderland Fashion Show mở ra không gian cổ tích ấn tượng</a>
                                            </h3>
                                            <div class="media">
                                                <div class="media-body">
                                                    <div class='art-info text-muted '>
                                                        <span>
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-calendar" />
                                                            </svg> Th 3 25/10/2022
                                                        </span>
                                                        <span class="reading-time">
                                                            <svg class="icon">
                                                                <use xlink:href="#icon-clock" />
                                                            </svg>

                                                            3 phút đọc

                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="justify">
                                                <span class="art-summary">

                                                    Eunoia’s Wonderland Fashion Show do Eunoia Art &amp; Media JSC tổ
                                                    chức sẽ diễn ra vào ngày 26/11/2022 tại Sheraton Hanoi Hotel (Hà
                                                    Nội). Đây là...

                                                </span>
                                                <a class="button_custome_35 link"
                                                    href="{{route('blogs.news.Eunoia_Wonderland')}}"
                                                    title="Đọc tiếp">Đọc tiếp</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center pageinate-page-blog col-12">
                                    <nav class="clearfix relative nav_pagi w_100">
                                        <ul class="pagination clearfix float-right">

                                            <li class="page-item disabled"><a class="page-link" href="#"><i
                                                        class="fa fa-angle-left"></i></a></li>

                                            <li class="active page-item disabled">
                                                <a class="page-link" href="">1</a>
                                            </li>

                                            <li class="page-item">
                                                <a class="page-link" href="{{route('blogs.newsMore')}}" data-page='2'>2</a>
                                            </li>

                                            <li class="page-item hidden-xs">
                                                <a class="page-link" href="{{route('blogs.newsMore')}}" data-page='2'>
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </a>
                                            </li>

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
                                                            href="../#">BST
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
                                                    src="{{ asset('assets/file.hstatic.net/200000685745/article/maika_2-_708911baf7d543a79ba11a57c5bdb9c0_medium.jpg') }}"
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
                                                href="{{route('blogs.news.kidmodel')}}"
                                                title="Dàn mẫu nhí chân trần trình diễn tại Eunoia’s Wonderland Fashion show">
                                                <img loading="lazy" class="img-fluid"
                                                    src="{{ asset('assets/file.hstatic.net/200000685745/article/eunoia_s_wonderland_1-_6da473227dc44d60832a5d22a85f0202_medium.jpg') }}"
                                                    alt="Dàn mẫu nhí chân trần trình diễn tại Eunoia’s Wonderland Fashion show">
                                            </a>

                                            <div class="content_blog clearfix media-body ">
                                                <h3 class='mt-0 mb-1'>
                                                    <a class='link'
                                                        href="{{route('blogs.news.kidmodel')}}"
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
                                                    src="{{ asset('assets/file.hstatic.net/200000685745/article/show_nang_thu_resize_web_c4dd6d465aef4b6097fedf2f8ddf4d68_medium.jpg') }}"
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
                                                    src="{{ asset('assets/file.hstatic.net/200000685745/article/yyy-6663-1669364775_bbcf0825081b463096e39fe20ba3a015_medium.jpg') }}"
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
    <div class="ab-module-article-mostview"></div>
@endsection
