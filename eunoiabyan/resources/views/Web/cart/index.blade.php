@extends('layouts.web.default')

@section('content')
    <section class="bread-crumb mb-3">
        <span class="crumb-border"></span>
        <div class="container">
            <div class="row">
                <div class="col-12 a-left">
                    <ul class="breadcrumb m-0 px-0">
                        <li>
                            <a href="{{ route('home') }}" target="_self"><span>Trang chủ</span></a>
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>

                        <li class="active">
                            <span>Giỏ hàng (0)</span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="cart-coupon my-4">
        <div class="cart-coupon-header">
            <span class="coupon-toggle-btn">
                <i class="fa fa-arrow-left "> </i>
            </span>
            <span>Mã giảm giá</span>
        </div>
        <link rel="preload" as='style' type="text/css"
            href="{{ asset('assets/theme.hstatic.net/200000685745/1001041408/14/coupon6704.css?v=44') }}">

        <link rel="stylesheet"
            href="{{ asset('assets/theme.hstatic.net/200000685745/1001041408/14/coupon6704.css?v=44') }}">

        <div class="section_coupons">
            <div class="container">
                <div class="row scroll justify-content-xl-center">

                    <div class=" col-12 mt-3">
                        <div class="coupon_item">

                            <div class="coupon_icon pos-relative embed-responsive embed-responsive-1by1">
                                <img class="img-fluid"
                                    src="{{ asset('assets/theme.hstatic.net/200000685745/1001041408/14/coupon_1_img6704.png?v=44') }}"
                                    alt="coupon_1_img.png" loading="lazy" width="79" height="70" />
                            </div>

                            <div class="coupon_body">
                                <div class="coupon_head">
                                    <h3 class="coupon_title">NHẬP MÃ: EGA10</h3>
                                    <div class="coupon_desc">Mã giảm 10% cho đơn hàng tối thiểu 2tr </div>

                                </div>
                                <div class="d-flex align-items-center flex-wrap justify-content-between">
                                    <button class="btn btn-main btn-sm coupon_copy" data-ega-coupon="EGA10">
                                        <span>Sao chép</span></button>
                                    <span class="coupon_info_toggle" data-coupon="EGA10">
                                        Điều kiện
                                    </span>
                                    <div class="coupon_info">
                                        - Mã giảm 10% cho đơn hàng có giá trị tối thiểu 2 triệu <br>
                                        - Giảm tối đa 500k </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-12 mt-3">
                        <div class="coupon_item">

                            <div class="coupon_icon pos-relative embed-responsive embed-responsive-1by1">
                                <img class="img-fluid"
                                    src="{{ asset('assets/theme.hstatic.net/200000685745/1001041408/14/coupon_2_img6704.png?v=44') }}"
                                    alt="coupon_2_img.png" loading="lazy" width="79" height="70" />
                            </div>

                            <div class="coupon_body">
                                <div class="coupon_head">
                                    <h3 class="coupon_title">NHẬP MÃ: EGA15</h3>
                                    <div class="coupon_desc">Mã giảm 15% cho đơn hàng tối thiểu 5tr </div>

                                </div>
                                <div class="d-flex align-items-center flex-wrap justify-content-between">
                                    <button class="btn btn-main btn-sm coupon_copy" data-ega-coupon="EGA15">
                                        <span>Sao chép</span></button>
                                    <span class="coupon_info_toggle" data-coupon="EGA15">
                                        Điều kiện
                                    </span>
                                    <div class="coupon_info">
                                        - Mã giảm 15% cho đơn hàng có giá trị tối thiểu 5 triệu <br />
                                        - Giảm tối đa 2 triệu
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-12 mt-3">
                        <div class="coupon_item">

                            <div class="coupon_icon pos-relative embed-responsive embed-responsive-1by1">
                                <img class="img-fluid"
                                    src="{{ asset('assets/theme.hstatic.net/200000685745/1001041408/14/coupon_3_img6704.png?v=44') }}"
                                    alt="coupon_3_img.png" loading="lazy" width="79" height="70" />
                            </div>

                            <div class="coupon_body">
                                <div class="coupon_head">
                                    <h3 class="coupon_title">NHẬP MÃ: EGA2022</h3>
                                    <div class="coupon_desc">
                                        Đồng giá 2tr các sản phẩm <a href="collections/san-pham-dong-gia/index.html">Đầm
                                            AYADA </a>
                                    </div>

                                </div>
                                <div class="d-flex align-items-center flex-wrap justify-content-between">
                                    <button class="btn btn-main btn-sm coupon_copy" data-ega-coupon="EGA2022">
                                        <span>Sao chép</span></button>
                                    <span class="coupon_info_toggle" data-coupon="EGA2022">
                                        Điều kiện
                                    </span>
                                    <div class="coupon_info">
                                        - Đồng giá 2 triệu cho nhóm sản phẩm <a
                                            href="collections/san-pham-dong-gia/index.html">Đầm AYADA </a> <br />
                                        - Tổng giá trị sản phẩm từ 5 triệu trở lên </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-12 mt-3">
                        <div class="coupon_item">

                            <div class="coupon_icon pos-relative embed-responsive embed-responsive-1by1">
                                <img class="img-fluid"
                                    src="{{ asset('assets/theme.hstatic.net/200000685745/1001041408/14/coupon_4_img6704.png?v=44') }}"
                                    alt="coupon_4_img.png" loading="lazy" width="79" height="70" />
                            </div>

                            <div class="coupon_body">
                                <div class="coupon_head">
                                    <h3 class="coupon_title">NHẬP MÃ: EGAFREESHIP</h3>
                                    <div class="coupon_desc">Miễn phí ship cho đơn hàng tối thiểu 1tr
                                    </div>

                                </div>
                                <div class="d-flex align-items-center flex-wrap justify-content-between">
                                    <button class="btn btn-main btn-sm coupon_copy" data-ega-coupon="EGAFREESHIP">
                                        <span>Sao chép</span></button>
                                    <span class="coupon_info_toggle" data-coupon="EGAFREESHIP">
                                        Điều kiện
                                    </span>
                                    <div class="coupon_info">
                                        - Miễn phí ship 100K cho đơn hàng tối thiểu từ 1 triệu <br />
                                        - Áp dụng cho tất cả tỉnh / thành phố </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- <script type="text/x-custom-template" data-template="couponPopup">
<div id="coupon-modal" class="coupon-modal modal fade " role="dialog" style="display:none;">
<div class="modal-dialog align-vertical">
<div class="modal-content">
<button type="button" class="close window-close" data-dismiss="modal" data-backdrop="false"
aria-label="Close" style="z-index: 9;"><span aria-hidden="true">×</span></button>
<div class="coupon-content"></div>
</div>
</div>
</div>
</script> --}}
        <script>
            $(document).ready(() => {
                let initCoupon = false

                function initCoupons() {
                    if (initCoupon) return
                    initCoupon = true
                    if (!$('#coupon-modal').length) {
                        $('body').append($('[data-template="couponPopup"]').html())
                    }
                    $('.coupon_info_toggle').click(function(e) {
                        e.preventDefault();
                        const code = $(this).data('coupon')
                        const info = $(this).next('.coupon_info').html() || ''
                        const title = $(this).parents('.coupon_body').find('.coupon_title').text() || ''
                        const couponHtml = `
            <div class="coupon-title">${title}</div>
            <div class="coupon-row">
                <div class="coupon-label">Mã khuyến mãi:</div><span class="code">${code}</span>

            </div>
            <div class="coupon-row">
                <div class="coupon-label">Điều kiện:</div><div class="coupon-info">${info}</div>
            </div>
            <div class="coupon-action">
            <button type="button" class="btn btn-main" data-dismiss="modal" data-backdrop="false"
                aria-label="Close" style="z-index: 9;">Đóng</button>
            <button class="btn btn-main coupon_copy" data-ega-coupon="${code}">
                <span>Sao chép</span></button>
            </div>
            `
                        $('.coupon-modal .coupon-content').html(couponHtml)
                        $("#coupon-modal").modal();
                    })
                    $(document).on('click', '.coupon_copy', function() {

                        const copyText = "Sao chép";
                        const copiedText = "Đã sao chép";
                        const coupon = $(this).data().egaCoupon;
                        const _this = $(this);
                        _this.html(`<span>${copiedText}</span>`);
                        _this.addClass('disabled');
                        setTimeout(function() {
                            _this.html(`<span>${copyText}</span>`);
                            _this.removeClass('disabled');
                        }, 3000)
                        navigator.clipboard.writeText(coupon);
                    })

                }
                $(window).one(' mousemove touchstart scroll', initCoupons)

            })
        </script>
        <div class="cart-coupon-footer ">
            <button class="btn btn-main btn-block rounded-sm coupon-toggle-btn">
                Quay lại trang giỏ hàng
            </button>
        </div>
    </div>
    <div class="cart-coupon-overlay coupon-toggle-btn"></div>
    <div id="tab-header"></div>
    <section class="main-cart-page main-container col1-layout mobile-tab active" id="cart-tab" data-title="Giỏ hàng">
        <div class="wrap_background_aside padding-top-15 margin-bottom-40 padding-left-0 padding-right-0 cartmbstyle">
            <div class="cart-mobile container card border-0 py-2">
                <form action="https://eunoiabyan.com/cart" method="post" novalidate class="margin-bottom-0">
                    <div class="header-cart">
                    </div>

                    <div class="header-cart-content">

                    </div>
                </form>
            </div>
            <div class="cart-empty container card border-0 py-2 ">
                <div class="alert green-alert section" role="alert">
                    <div class="title-cart text-center">
                        <h1 class="d-none">Giỏ hàng</h1>
                        <div>
                            <img loading="lazy"
                                src="{{ asset('assets/theme.hstatic.net/200000685745/1001041408/14/cart_empty_background6704.png?v=44') }}"
                                class="img-fluid" width="298" height="152">
                        </div>
                        <h3>
                            “Hổng” có gì trong giỏ hết
                        </h3>
                        <p> Về trang cửa hàng để chọn mua sản phẩm bạn nhé!!</p>
                        <a href="collections/all.html" title="Mua sắm ngay" class="btn btn-main">Mua
                            sắm ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
