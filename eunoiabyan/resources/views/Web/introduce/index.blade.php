@extends('layouts.web.default')

@section('content')
    <section class="bread-crumb mb-3">
        <span class="crumb-border"></span>
        <div class="container">
            <div class="row">
                <div class="col-12 a-left">
                    <ul class="breadcrumb m-0 px-0">
                        <li>
                            <a href="{{route('home')}}"  target="_self"><span>Trang chủ</span></a>
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>

                        <li class="active">
                            <span>Giới thiệu</span>
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="page section">
        <div class="container card py-2">
            <div class="wrap_background_aside margin-bottom-40">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading-bar">
                            <h1 class="title_page">Giới thiệu</h1>
                        </div>

                        <div class="content-page rte py-3">

                            <h1 style="margin-bottom: 11px;"><strong><span style="font-size:16px;"><span
                                            style="line-height:107%"><span style="font-family:Calibri,sans-serif">LỜI GIỚI
                                                T</span></span></span></strong><strong><span style="font-size:16px;"><span
                                            style="line-height:107%"><span
                                                style="font-family:Calibri,sans-serif">HIỆU</span></span></span></strong>
                            </h1>
                            <p style="margin-bottom:11px"><span style="font-size:16px;"><span style="line-height:107%"><span
                                            style="font-family:Calibri,sans-serif">Tháng
                                            4 năm 202</span></span></span><span style="font-size:16px;"><span
                                        style="line-height:107%"><span style="font-family:Calibri,sans-serif">2,
                                            Công ty Cổ phần Nghệ Thuật &amp; Truyền Thông Eunoia Art &amp; Media
                                            cho ra mắt thương hiệu thời trang thiết kế cao cấp Eunoia by
                                            AN.</span></span></span></p>
                            <p style="margin-bottom:11px"><span style="font-size:16px;"><span style="line-height:107%"><span
                                            style="font-family:Calibri,sans-serif">Eunoia
                                            (xuất xứ là một danh từ tiếng Hy Lạp) mang ý nghĩa về một tâm hồn
                                            thuần khiết. Với thông điệp “Unique as a child “ - mỗi đứa trẻ đều
                                            là một phiên bản đặc biệt, CEO Vũ Lan Anh định hướng Eunoia by AN
                                            mang đến những dòng sản phẩm được khởi nguồn từ những câu chuyện trẻ
                                            thơ trong sáng, hồn nhiên.</span></span></span></p>
                            <p style="margin-bottom: 11px; text-align: center;"><img style="width: 806px; height: 538px;"
                                    src="{{ asset('assets/file.hstatic.net/200000685745/file/eunoia_s_wonderland_campaign_ngua_resize_web_721c4f40ba804a6aa178ba1d0eb4fd74_grande.jpg') }}">
                            </p>
                            <p style="margin-bottom:11px"><span style="font-size:16px;"><span style="line-height:107%"><span
                                            style="font-family:Calibri,sans-serif">Được
                                            sáng lập với sứ mệnh truyề</span></span></span><span
                                    style="font-size:16px;"><span style="line-height:107%"><span
                                            style="font-family:Calibri,sans-serif">n cảm</span></span></span><span
                                    style="font-size:16px;"><span style="line-height:107%"><span
                                            style="font-family:Calibri,sans-serif"> hứng, t</span></span></span><span
                                    style="font-size:16px;"><span style="line-height:107%"><span
                                            style="font-family:Calibri,sans-serif">hương hiệu Eunoia by AN tự
                                            hào về một đội ngũ sáng tạo trẻ đầy tâm huyết, có năng lực chuyên
                                            môn cao, được đào tạo bài bản.</span></span></span></p>
                            <p style="margin-bottom:11px"><span style="font-size:16px;"><span style="line-height:107%"><span
                                            style="font-family:Calibri,sans-serif">Với
                                            mục tiêu phát triển các sản phẩm thời trang đáp ứng thị hiếu và cập
                                            nhật xu hướng, đồng hành cùng phong cách phục vụ cao cấp, thoả mãn
                                            nhu cầu của khách hàng, Eunoia By AN trân trọng các giá trị nền tảng
                                            kết hợp với những hướng đi, những dự án cộng đồng.</span></span></span></p>
                            <p style="margin-bottom:11px"><span style="font-size:16px;"><span style="line-height:107%"><span
                                            style="font-family:Calibri,sans-serif">Với
                                            tôn chỉ đem đến những giá trị đầy hứa hẹn cho tương lai của dòng
                                            thời trang thiết kế Made in Vietnam, các bộ sưu tập được giới thiệu
                                            và trình diễn luôn gửi gắm những thông điệp nhân văn và truyền cảm
                                            hứng sáng tạo.</span></span></span></p>
                            <p style="text-align: center"><img style="width: 791px; height: 527px;"
                                    src="{{ asset('assets/file.hstatic.net/200000685745/file/eunoia_s_wonderland_campaign_co_tich_resize_web_71d74c33acaa43da866d3632a4417358_grande.jpg') }}">
                            </p>
                            <p style="margin-bottom:11px"><strong><span style="font-size:16px;"><span
                                            style="line-height:107%"><span style="font-family:Calibri,sans-serif">TẦM
                                                NHÌN</span></span></span></strong></p>
                            <p style="margin-bottom:11px"><span style="font-size:16px;"><span style="line-height:107%"><span
                                            style="font-family:Calibri,sans-serif">Luôn
                                            hướng tới sự sáng tạo không ngừng nghỉ, vươn tới cái đẹp duy mỹ,
                                            thương hiệu Eunoi by AN mong muốn ra mắt những bộ sưu tập có tính
                                            chủ đề - được lấy cảm hứng và phát triển ý tưởng từ những câu chuyện
                                            đầy cảm xúc với tinh thần thấu hiểu tâm hồn bé thơ.</span></span></span></p>
                            <p style="margin-bottom:11px"><span style="font-size:16px;"><span style="line-height:107%"><span
                                            style="font-family:Calibri,sans-serif">Mỗi
                                            dòng sản phẩm (trang phục thiết kế, hộp thời trang, …) đều được
                                            thiết kế và sản xuất với quy trình chuyên nghiệp, kiểm duyệt chất
                                            lượng nhằm mục đích đảm bảo uy tín và nâng tầm thương hiệu.</span></span></span>
                            </p>
                            <p style="text-align: center"><img style="width: 791px; height: 527px;"
                                    src="{{ asset('assets/file.hstatic.net/200000685745/file/show_nang_thu_resize_web_6e2b38e6cbac4223af9abe143ab672de_grande.jpg') }}">
                            </p>
                            <p style="margin-bottom:11px"><strong><span style="font-size:16px;"><span
                                            style="line-height:107%"><span style="font-family:Calibri,sans-serif">SỨ
                                                MỆNH</span></span></span></strong></p>
                            <p style="margin-bottom:11px"><span style="font-size:16px;"><span style="line-height:107%"><span
                                            style="font-family:Calibri,sans-serif">Với
                                            sứ mệnh truyền cảm hứng, các dự án thời trang &amp; các show trình
                                            diễn được lên kế hoạch và tổ chức với phong cách chuyên nghiệp, quy
                                            mô đa dạng nhằm đem đến những trải nghiệm đầy cảm xúc, truyền tải
                                            những câu chuyện, gieo mầm cho những ước mơ, nuôi dưỡng những giá
                                            trị nhân văn cùng lòng nhân ái trong mỗi tâm hồn trẻ thơ.</span></span></span>
                            </p>
                            <p style="margin-bottom:11px"><strong><span style="font-size:16px;"><span
                                            style="line-height:107%"><span style="font-family:Calibri,sans-serif">NGUYÊN TẮC
                                                HOẠT ĐỘNG</span></span></span></strong></p>
                            <ol>
                                <li style="margin-bottom: 11px;"><span style="font-size:16px;"><span
                                            style="line-height:107%"><span style="font-family:Calibri,sans-serif">Sáng tạo
                                                dựa trên những quy
                                                chuẩn về thời trang ứng dụng, phù hợp với thuần phong mỹ tục và cập
                                                nhật xu hướng thế giới.</span></span></span></li>
                                <li style="margin-bottom: 11px;"><span style="font-size:16px;"><span
                                            style="line-height:107%"><span style="font-family:Calibri,sans-serif">Đảm bảo
                                                chất lượng, an toàn,
                                                quy chuẩn &amp; tiêu chuẩn.</span></span></span></li>
                                <li style="margin-bottom: 11px;"><span style="font-size:16px;"><span
                                            style="line-height:107%"><span style="font-family:Calibri,sans-serif">Tôn
                                                trọng bản quyền.</span></span></span></li>
                                <li style="margin-bottom: 11px;"><span style="font-size:16px;"><span
                                            style="line-height:107%"><span style="font-family:Calibri,sans-serif">Cung cấp
                                                dịch vụ tận tâm,
                                                nhiệt tình,uy tín.</span></span></span></li>
                                <li style="margin-bottom: 11px;"><span style="font-size:16px;"><span
                                            style="line-height:107%"><span style="font-family:Calibri,sans-serif">Luôn
                                                quan tâm đến chính sách
                                                chăm sóc khách hàng, năng lực cạnh tranh cao.</span></span></span></li>
                                <li style="margin-bottom: 11px;"><span style="font-size:16px;"><span
                                            style="line-height:107%"><span style="font-family:Calibri,sans-serif">Chế độ
                                                đãi ngộ với nhân viên
                                                chu đáo.</span></span></span></li>
                            </ol>
                            <div style="left: 356.6px; top: 167px;">&nbsp;</div>
                            <div style="left: 356.6px; top: 167px;">&nbsp;</div>
                            <div style="left: 356.6px; top: 167px;">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
