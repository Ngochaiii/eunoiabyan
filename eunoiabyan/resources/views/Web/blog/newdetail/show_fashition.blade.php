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

                        <li>
                            <a href="{{route('blogs.news')}}">
                                <span>Tin tức</span>
                            </a>
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>
                        <li class="active">
                            <span>Những thiên thần nhỏ trong show thời trang cổ tích Eunoia’s
                                Wonderland</span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="blogpage section">
        <div class="container article-wraper card py-2 border-0" itemscope itemtype="https://schema.org/Article">
            <meta itemprop="mainEntityOfPage"
                content="/blogs/news/nhung-thien-than-nho-trong-show-thoi-trang-co-tich-eunoia-s-wonderland">
            <meta itemprop="description" content>
            <meta itemprop="author" content="Support Haravan">
            <meta itemprop="headline" content="Những thiên thần nhỏ trong show thời trang cổ tích Eunoia’s Wonderland">
            <meta itemprop="image"
                content="https:https://file.hstatic.net/200000685745/article/eunoia_s_wonderland_campaign_ngua_resize_web_44de8126e22541488f3c5c9e2c945b55.jpg')}}">
            <meta itemprop="datePublished" content>
            <meta itemprop="dateModified" content>
            <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                    <img loading="lazy" class="hidden"
                        src="{{asset('assets/theme.hstatic.net/200000685745/1001041408/14/logo6704.png?v=44')}}" alt="EUNOIA" />
                    <meta itemprop="url" content="https://theme.hstatic.net/200000685745/1001041408/14/logo.png?v=44">
                    <meta itemprop="width" content="400">
                    <meta itemprop="height" content="60">
                </div>
                <meta itemprop="name" content="EUNOIA">
            </div>
            <div class="wrap_background_aside padding-top-0 margin-bottom-40 ">
                <div class="row">
                    <section class="right-content col-lg-9 col-12 mx-auto">
                        <article class="article-main">
                            <div class="article-details">
                                <img class="img-fluid mx-auto mb-3 d-block mh-100 w-auto"
                                    src="{{asset('assets/file.hstatic.net/200000685745/article/eunoia_s_wonderland_campaign_ngua_resize_web_44de8126e22541488f3c5c9e2c945b55.jpg')}}"
                                    alt="Những thiên thần nhỏ trong show thời trang cổ tích Eunoia’s Wonderland">

                                <h1 class="article-title title_page">Những thiên thần nhỏ trong show
                                    thời trang cổ tích Eunoia’s Wonderland</h1>
                                <div class="media ">
                                    <div class="media-body text-right">
                                        <div class='mt-0 '>Support Haravan</div>
                                        <div class='art-info text-muted font-weight-light justify-content-end '>

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
                                <div class="toc-wrapper">
                                    <div class="toc-title mb-2 open font-weight-bold">Nội dung bài viết

                                        <svg class="icon">
                                            <use xlink:href="#icon-arrow" />
                                        </svg>
                                    </div>
                                    <div class="js-toc">

                                    </div>
                                </div>

                                <div class="article-content js-toc-content">
                                    <div class="rte" id="ega-uti-editable-content" data-platform='haravan'
                                        data-id="1001979033" data-blog-id=1000811787>

                                        <p><em>Eunoia’s Wonderland Fashion Show đang được giới mộ điệu thời
                                                trang mong chờ khi mang thông điệp về sự khát khao khám phá vẻ đẹp
                                                độc đáo, cá tính riêng tiềm ẩn bên trong tâm hồn trẻ thơ.<br>Chương
                                                trình sẽ diễn ra vào ngày 26/11/2022 tại Sheraton Hanoi Hotel (Hà
                                                Nội) nhân dịp ra mắt thương hiệu thời trang Eunoia by AN.</em></p>
                                        <p><strong>Show
                                                thời trang cổ tích của trẻ em</strong></p>
                                        <p style="text-align: center"><img
                                                src="{{asset('assets/file.hstatic.net/200000685745/file/san-khau-wonderland_3_202a41228fa74e1fac6388337cb0346c_1024x1024.jpg')}}">
                                        </p>
                                        <p style="text-align: center;">Sân khấu của show diễn</p>
                                        <p><br>Eunoia
                                            by AN tạm dịch là ý nghĩ thuần khiết của An. Với slogan “Unique as a
                                            child: Every child is a unique child and Unique as a child”, Eunoia
                                            by AN muốn gửi gắm thông điệp về sự khát khao khám phá vẻ đẹp độc
                                            đáo, cá tính riêng tiềm ẩn bên trong mỗi tâm hồn trẻ thơ.</p>
                                        <p>Eunoia’s
                                            Wonderland Fashion Show sẽ mở ra một không gian cổ tích và mỗi mẫu
                                            nhí sẽ là thiên thần nhỏ tỏa sáng theo cách riêng và mang đến những
                                            trải nghiệm thời trang độc đáo cho khán giả.</p>
                                        <p>Eunoia’s
                                            Wonderland Fashion Show có sự góp mặt của nhiều gương mặt nổi tiếng
                                            như gia đình “hot kid” Xoài, Youtuber Bố Con Sâu, MC Minh Hà, NTK
                                            Hoàng Minh Hà, NTK Ruby Phạm… Dàn mẫu nhí sẽ khoác lên mình các
                                            thiết kế độc đáo, ấn tượng trong 3 BST đến từ thương hiệu Eunoia by
                                            AN bao gồm: “Black Swan” (Thiên nga đen), “Tinh linh” và “Cổ tích”.</p>
                                        <p style="text-align: center"><img
                                                src="{{asset('assets/file.hstatic.net/200000685745/file/bst-tinh-linh_1a1a86c0c5f04f8791db9cb4f0455e2a_1024x1024.jpg')}}">
                                        </p>
                                        <p style="text-align: center"><img
                                                src="{{asset('assets/file.hstatic.net/200000685745/file/bst-co-tich_152908583b594923a83cc4463e2f4889_1024x1024.jpg')}}">
                                        </p>
                                        <p style="text-align: center"><img
                                                src="{{asset('assets/file.hstatic.net/200000685745/file/bst-black-swan_69df050ef6ec49309756d9056adacf0e_1024x1024.jpg')}}">
                                        </p>
                                        <p style="text-align: center;"><br>3 BST sẽ trình diễn tại Eunoia’s
                                            Wonderland Fashion Show</p>
                                        <p><br>Các thiết kế đều mang hàm lượng
                                            sáng tạo cao và trọn vẹn tinh thần thời trang cao cấp từ ý tưởng
                                            thống nhất, phối kết hợp màu sắc, họa tiết đính kết cầu kì đến kỹ
                                            thuật dựng form hoàn hảo. Đặc biệt, mỗi bộ trang phục đều được đính
                                            đá màu tỉ mỉ, tinh xảo và được thực hiện hoàn toàn thủ công bằng đôi
                                            bàn tay khéo léo của đội ngũ thiết kế nhà Eunoia by AN. Từng viên đá
                                            màu đều được lựa chọn cẩn thận sẽ tạo nên hiệu ứng thị giác độc đáo
                                            cho khán giả.</p>
                                        <p><strong>Áo mới đến trường cho trẻ em vùng cao</strong></p>
                                        <p>Theo
                                            CEO Công ty cổ phần nghệ thuật và truyền thông Eunoia Vũ Lan Anh,
                                            show diễn đã được ấp ủ suốt 6 tháng qua. Toàn bộ ê-kíp đã làm việc
                                            không ngừng nghỉ với mong muốn đem đến không chỉ là những màn trình
                                            diễn thời trang mà còn là những thông điệp kết nối yêu thương trao
                                            gửi đến cộng đồng.</p>
                                        <p style="text-align: center"><img
                                                src="{{asset('assets/file.hstatic.net/200000685745/file/ceo_vu_lan_anh_5_efaa9d8c4186454ba5ca58eb45eed982.jpg')}}">
                                        </p>
                                        <p style="text-align: center;">CEO Công ty cổ phần nghệ thuật và truyền
                                            thông Eunoia Vũ Lan Anh</p>
                                        <p><br>Không chỉ là một show diễn thời
                                            trang đơn thuần, Eunoia’s Wonderland Fashion Show còn truyền tải
                                            thông điệp nhân văn ý nghĩa. Ban tổ chức đã kết nối với quỹ “Áo mới
                                            đến trường” của Học viện Thiết kế và Thời trang London (Hà Nội) để
                                            chia sẻ yêu thương đến trẻ em có hoàn cảnh khó khăn.</p>
                                        <p>Theo đó,
                                            các người mẫu nhí tham gia trình diễn trong chương trình sẽ đóng góp
                                            “một ngày làm việc” đến các bạn nhỏ vùng cao. Từ đó, biến giấc mơ
                                            được khoác những tấm áo mới của trẻ em có hoàn cảnh khó khăn thành
                                            hiện thực.</p>
                                        <p>“Tôi mong muốn khi nhắc đến Eunoia by AN công chúng
                                            không chỉ biết đến một thương hiệu thời trang trẻ em Việt Nam mà còn
                                            là một thương hiệu hướng tới một thế giới tốt đẹp hơn dành cho thế
                                            hệ tương lai của đất nước. Và thông qua việc tổ chức những show thời
                                            trang nghệ thuật riêng thực sự chất lượng, kết hợp với các dự án
                                            thiện nguyện uy tín, Eunoia by AN khẳng định vai trò truyền cảm
                                            hứng, không chỉ lan toả cái đẹp hoàn mỹ mà còn vun đắp những giá trị
                                            nhân văn, lòng nhân ái trong tâm hồn các con”, CEO Vũ Lan Anh chia
                                            sẻ.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tag-share">
                                <div class="row">
                                    <div class="col-12 share_social mt-3">
                                        <div class="addthis_inline_share_toolbox share_add no-tag">
                                            <script type="text/javascript" src="{{asset('assets/s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58589c2252fc2da4')}}">
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section clearfix mt-3">

                            </div>
                        </article>
                    </section>
                    <div class="col-12">

                        <div class=" aside-item blog-aside-article">
                            <div class>
                                <h2 class="heading-bar__title"><span><a class="link" href="{{route('blogs.news')}}"
                                            title="Tin liên quan">Tin liên quan</a></span></h2>
                            </div>
                            <div class="aside-content-article aside-content margin-top-0">
                                <div class="blog-image-list">
                                    <div class="row">
                                        <div class="col-md-3 col-12">
                                            <div class="blogwp column ">
                                                <a class="image-blog card-img-top text-center position-relative 
       d-flex align-items-center justify-content-center
       aspect-ratio rounded overflow-hidden"
                                                    href="{{route('blogs.news.maika')}}"
                                                    title="Maika kết bộ sưu tập nhà Eunoia by AN bằng lời ca “A Whole New World”"
                                                    style=' --width: 433;
      --height: 231;'>
                                                    <img loading="lazy" class="img-fluid m-auto mh-100 w-auto"
                                                        src="{{asset('assets/file.hstatic.net/200000685745/article/maika_2-_708911baf7d543a79ba11a57c5bdb9c0.jpg')}}"
                                                        alt="Maika kết bộ sưu tập nhà Eunoia by AN bằng lời ca “A Whole New World”">
                                                </a>
                                                <div class="content_blog clearfix card-body px-0 py-2">
                                                    <h3 class>
                                                        <a class='link'
                                                            href="{{route('blogs.news.maika')}}"
                                                            title="Maika kết bộ sưu tập nhà Eunoia by AN bằng lời ca “A Whole New World”">Maika
                                                            kết bộ sưu tập nhà Eunoia by AN bằng lời ca “A Whole New
                                                            World”</a>
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
                                        <div class="col-md-3 col-12">
                                            <div class="blogwp column ">
                                                <a class="image-blog card-img-top text-center position-relative 
       d-flex align-items-center justify-content-center
       aspect-ratio rounded overflow-hidden"
                                                    href="{{route('blogs.news.Eunoia_Wonderland')}}"
                                                    title="Dàn mẫu nhí chân trần trình diễn tại Eunoia’s Wonderland Fashion show"
                                                    style=' --width: 433;
      --height: 231;'>
                                                    <img loading="lazy" class="img-fluid m-auto mh-100 w-auto"
                                                        src="{{asset('assets/file.hstatic.net/200000685745/article/eunoia_s_wonderland_1-_6da473227dc44d60832a5d22a85f0202.jpg')}}"
                                                        alt="Dàn mẫu nhí chân trần trình diễn tại Eunoia’s Wonderland Fashion show">
                                                </a>
                                                <div class="content_blog clearfix card-body px-0 py-2">
                                                    <h3 class>
                                                        <a class='link'
                                                            href="{{route('blogs.news.Eunoia_Wonderland')}}"
                                                            title="Dàn mẫu nhí chân trần trình diễn tại Eunoia’s Wonderland Fashion show">Dàn
                                                            mẫu nhí chân trần trình diễn tại Eunoia’s Wonderland Fashion
                                                            show</a>
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
                                                            href="{{route('blogs.news.Eunoia_Wonderland')}}"
                                                            title="Đọc tiếp">Đọc tiếp</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="blogwp column ">
                                                <a class="image-blog card-img-top text-center position-relative 
       d-flex align-items-center justify-content-center
       aspect-ratio rounded overflow-hidden"
                                                    href="{{route('blogs.news.eunoia_by_AN')}}"
                                                    title="Thương hiệu Eunoia by AN lan tỏa yêu thương với loạt dự án thiện nguyện"
                                                    style=' --width: 433;
      --height: 231;'>
                                                    <img loading="lazy" class="img-fluid m-auto mh-100 w-auto"
                                                        src="{{asset('assets/file.hstatic.net/200000685745/article/show_nang_thu_resize_web_c4dd6d465aef4b6097fedf2f8ddf4d68.jpg')}}"
                                                        alt="Thương hiệu Eunoia by AN lan tỏa yêu thương với loạt dự án thiện nguyện">
                                                </a>
                                                <div class="content_blog clearfix card-body px-0 py-2">
                                                    <h3 class>
                                                        <a class='link'
                                                            href="{{route('blogs.news.eunoia_by_AN')}}"
                                                            title="Thương hiệu Eunoia by AN lan tỏa yêu thương với loạt dự án thiện nguyện">Thương
                                                            hiệu Eunoia by AN lan tỏa yêu thương với loạt dự án thiện
                                                            nguyện</a>
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

                                                            CEO của thương hiệu Eunoia by AN – Vũ Lan Anh là người dành
                                                            nhiều tâm huyết cho công tác thiện nguyện.Eunoia by AN là
                                                            thương...
                                                        </span>
                                                        <a class="button_custome_35 link"
                                                            href="{{route('blogs.news.eunoia_by_AN')}}"
                                                            title="Đọc tiếp">Đọc tiếp</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="blogwp column ">
                                                <a class="image-blog card-img-top text-center position-relative 
       d-flex align-items-center justify-content-center
       aspect-ratio rounded overflow-hidden"
                                                    href="{{route('blogs.news.kidmodel_vadete')}}"
                                                    title="Dàn mẫu nhí diễn mở màn và Vedette show Eunoia’s Wonderland"
                                                    style=' --width: 433;
      --height: 231;'>
                                                    <img loading="lazy" class="img-fluid m-auto mh-100 w-auto"
                                                        src="{{asset('assets/file.hstatic.net/200000685745/article/yyy-6663-1669364775_bbcf0825081b463096e39fe20ba3a015.jpg')}}"
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

                                                            Mẫu nhí Ruby Ngọc Anh, An Cát Diệp, Suri Thanh Mai, An Nhi,
                                                            Maika Ngọc Khánh sẽ trình diễn tại Eunoia’s Wonderland Fashion
                                                            Show, ngày 26/11.Eunoia...
                                                        </span>
                                                        <a class="button_custome_35 link"
                                                            href="{{route('blogs.news.kidmodel_vadete')}}"
                                                            title="Đọc tiếp">Đọc tiếp</a>
                                                    </p>
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
        </div>
    </section>
@endsection
