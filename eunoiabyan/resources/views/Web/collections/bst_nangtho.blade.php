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
                            <a href="{{route('collection.all')}}" target="_self">
                                <span>Danh mục</span>
                            </a>
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>

                        <li class="active">
                            <span>BST Nàng Thơ</span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section wrap_background">
        <div class="container">
            <div class="bg_collection section">
                <div class="coll-head">
                    <h1 class="title_page collection-title mb-0 pb-3">
                        BST Nàng Thơ </h1>
                    <div class="coll-sortby d-flex justify-content-between align-items-center">
                        <div class="sortPagiBar">
                            <div class="sort-cate clearfix">
                                <div id="sort-by" class="d-flex align-items-baseline">
                                    <label class="left">
                                        <span class>Sắp xếp: </span>
                                    </label>
                                    <select class="content_ul" onchange="sortby(this)">
                                        <option data-sort="name:asc" value="alpha-asc">Tên A &rarr; Z</option>
                                        <option data-sort="name:desc" value="alpha-desc">Tên Z &rarr; A</option>
                                        <option data-sort="price_min:asc" value="price-asc">Giá tăng dần</option>
                                        <option data-sort="price_min:desc" value="price-desc">Giá giảm dần</option>
                                        <option data-sort="created_on:desc" value="created-desc">Hàng mới</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="open-filters" class="btn open-filters d-lg-none d-block p-0">
                            <i class="fa fa-filter"></i>
                            <span>Lọc</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-lg-3 col-md-12 col-sm-12'>
                        <aside class=" scroll card py-2 dqdt-sidebar sidebar left-content">
                            <div class="wrap_background_aside asidecollection">
                                <div class="filter-content aside-filter">
                                    <div class="filter-container">
                                        <button class="btn d-block d-lg-none open-filters p-0">
                                            <i class="fa fa-arrow-left mr-3 "> </i>
                                            <b class="d-inline">
                                                Tìm theo
                                            </b>
                                        </button>
                                        <div class="filter-container__selected-filter" style="display: none;">
                                            <div class="filter-container__selected-filter-header clearfix d-none">
                                                <span class="filter-container__selected-filter-header-title"><i
                                                        class="fa fa-arrow-left hidden-sm-up"></i> Bạn chọn</span>
                                                <a href="javascript:void(0)" onclick="clearAllFiltered()"
                                                    class="filter-container__clear-all">Bỏ hết <i
                                                        class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>

                                        <!-- Lọc theo Tag (Màu sắc)-->
                                        <aside class="aside-item filter-tag-style-1">
                                            <div class="aside-title">
                                                <h2 class="title-head margin-top-0"><span>Màu sắc</span></h2>
                                            </div>
                                            <div class="aside-content filter-group clearfix scroll">
                                                <ul style="overflow: visible;">

                                                    <li
                                                        class="filter-item color filter-item--check-box filter-item--green ">
                                                        <span>
                                                            <label class="custom-checkbox color" for="filter-tag-do">
                                                                <input type="checkbox" id="filter-tag-do" data-group="tag1"
                                                                    data-field="tag" data-text="Đỏ"
                                                                    value="product contains Đỏ" data-operator="||">
                                                                <i class="fa do"
                                                                    style="--filter-color: url({{asset('assets/theme/200000685745/1001041408/14/color_56704.png?v=44') }}) no-repeat center center; background-size: cover"></i>
                                                                Đỏ
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li
                                                        class="filter-item color filter-item--check-box filter-item--green ">
                                                        <span>
                                                            <label class="custom-checkbox color" for="filter-tag-cam">
                                                                <input type="checkbox" id="filter-tag-cam" data-group="tag1"
                                                                    data-field="tag" data-text="Cam"
                                                                    value="product contains Cam" data-operator="||">
                                                                <i class="fa cam"
                                                                    style="--filter-color: url({{asset('assets/theme/200000685745/1001041408/14/color_46704.png?v=44') }}) no-repeat center center; background-size: cover"></i>
                                                                Cam
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li
                                                        class="filter-item color filter-item--check-box filter-item--green ">
                                                        <span>
                                                            <label class="custom-checkbox color" for="filter-tag-tim">
                                                                <input type="checkbox" id="filter-tag-tim" data-group="tag1"
                                                                    data-field="tag" data-text="Tím"
                                                                    value="product contains Tím" data-operator="||">
                                                                <i class="fa tim"
                                                                    style="--filter-color: url({{asset('assets/theme/200000685745/1001041408/14/color_106704.png?v=44') }}) no-repeat center center; background-size: cover"></i>
                                                                Tím
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li
                                                        class="filter-item color filter-item--check-box filter-item--green ">
                                                        <span>
                                                            <label class="custom-checkbox color" for="filter-tag-xam">
                                                                <input type="checkbox" id="filter-tag-xam"
                                                                    data-group="tag1" data-field="tag" data-text="Xám"
                                                                    value="product contains Xám" data-operator="||">
                                                                <i class="fa xam"
                                                                    style="--filter-color: url({{asset('assets/theme/200000685745/1001041408/14/color_76704.png?v=44') }}) no-repeat center center; background-size: cover"></i>
                                                                Xám
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li
                                                        class="filter-item color filter-item--check-box filter-item--green ">
                                                        <span>
                                                            <label class="custom-checkbox color" for="filter-tag-trang">
                                                                <input type="checkbox" id="filter-tag-trang"
                                                                    data-group="tag1" data-field="tag" data-text="Trắng"
                                                                    value="product contains Trắng" data-operator="||">
                                                                <i class="fa trang"
                                                                    style="--filter-color: url({{asset('assets/theme/200000685745/1001041408/14/color_16704.png?v=44') }}) no-repeat center center; background-size: cover"></i>
                                                                Trắng
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li
                                                        class="filter-item color filter-item--check-box filter-item--green  overflow-item ">
                                                        <span>
                                                            <label class="custom-checkbox color" for="filter-tag-den">
                                                                <input type="checkbox" id="filter-tag-den"
                                                                    data-group="tag1" data-field="tag" data-text="Đen"
                                                                    value="product contains Đen" data-operator="||">
                                                                <i class="fa den"
                                                                    style="--filter-color: url({{asset('assets/theme/200000685745/1001041408/14/color_26704.png?v=44') }}) no-repeat center center; background-size: cover"></i>
                                                                Đen
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li class="filter-item-toggle text-center cursor-pointer btn">
                                                        Xem thêm <i class="fas fa-chevron-down "></i>
                                                    </li>

                                                </ul>
                                            </div>
                                        </aside>
                                        <!-- End Lọc theo Tag (Màu sắc)-->
                                        <aside class="aside-item filter-price dq-filterxx">
                                            <div class="aside-title">
                                                <h2 class="title-head margin-top-0"><span>Mức giá </span></h2>
                                            </div>
                                            <div class="aside-content filter-group scroll">
                                                <div class="showstt d-none">
                                                    <!--<span>Mức giá</span> -->
                                                </div>
                                                <ul style>
                                                    <li class="filter-item filter-item--check-box filter-item--green">
                                                        <span>
                                                            <label class="custom-checkbox" for="filter-duoi-1000000">
                                                                <input type="checkbox" id="filter-duoi-1000000" onchange
                                                                    data-group="Khoảng giá" data-field="price"
                                                                    data-text="Dưới 1000000"
                                                                    value="(price:product <1000000)" data-operator="||">
                                                                <i class="fa "></i>
                                                                Giá dưới 1,000,000₫
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li class="filter-item filter-item--check-box filter-item--green">
                                                        <span>
                                                            <label class="custom-checkbox" for="filter-1000000-2000000">
                                                                <input type="checkbox" id="filter-1000000-2000000"
                                                                    onchange data-group="Khoảng giá" data-field="price"
                                                                    data-text="Trên 2000000"
                                                                    value="(price:product >=1000000 )&& (price:product <=2000000)"
                                                                    data-operator="||">
                                                                <i class="fa "></i>
                                                                1,000,000₫ - 2,000,000₫
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li class="filter-item filter-item--check-box filter-item--green">
                                                        <span>
                                                            <label class="custom-checkbox" for="filter-2000000-3000000">
                                                                <input type="checkbox" id="filter-2000000-3000000"
                                                                    onchange data-group="Khoảng giá" data-field="price"
                                                                    data-text="Trên 3000000"
                                                                    value="(price:product >=2000000 )&& (price:product <=3000000)"
                                                                    data-operator="||">
                                                                <i class="fa "></i>
                                                                2,000,000₫ - 3,000,000₫
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li class="filter-item filter-item--check-box filter-item--green">
                                                        <span>
                                                            <label class="custom-checkbox" for="filter-3000000-5000000">
                                                                <input type="checkbox" id="filter-3000000-5000000"
                                                                    onchange data-group="Khoảng giá" data-field="price"
                                                                    data-text="Trên 5000000"
                                                                    value="(price:product >=3000000 )&& (price:product <=5000000)"
                                                                    data-operator="||">
                                                                <i class="fa "></i>
                                                                3,000,000₫ - 5,000,000₫
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li class="filter-item filter-item--check-box filter-item--green">
                                                        <span>
                                                            <label class="custom-checkbox" for="filter-5000000-7000000">
                                                                <input type="checkbox" id="filter-5000000-7000000"
                                                                    onchange data-group="Khoảng giá" data-field="price"
                                                                    data-text="Trên 7000000"
                                                                    value="(price:product >=5000000 )&& (price:product <=7000000)"
                                                                    data-operator="||">
                                                                <i class="fa "></i>
                                                                5,000,000₫ - 7,000,000₫
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li class="filter-item filter-item--check-box filter-item--green">
                                                        <span>
                                                            <label class="custom-checkbox" for="filter-tren-10000000">
                                                                <input type="checkbox" id="filter-tren-10000000" onchange
                                                                    data-group="Khoảng giá" data-field="price"
                                                                    data-text="Trên 10000000"
                                                                    value="(price:product >=10000000)" data-operator="||">
                                                                <i class="fa "></i>
                                                                Giá trên 10,000,000₫
                                                            </label>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </aside>
                                        <!-- Lọc Loại -->
                                        <!-- End Lọc Loại -->

                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="main_container collection col-lg-9 col-12 pl-lg-0">
                        <div class="filter-content aside-filter">
                            <div class="filter-container">
                                <div class="filter-container__selected-filter" style="display: none;">
                                    <div class="filter-container__selected-filter-list mb-2 ">
                                        <ul></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="category-products products">
                            <div class="products-view products-view-grid collection_reponsive list_hover_pro">
                                <div class="row product-list content-col">

                                    <div class="col-6  col-sm-3  col-md-4 col-lg-4  product-col">
                                        <div class="item_product_main">

                                            <form action="https://eunoiabyan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1046875203"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/danbi-dress.html" title="Danbi Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid0514_b177025fb31f4c9f81a4474229e02937.jpg')}}"
                                                            alt="Danbi Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid0509_d82f9aefadfe404fbee9fb50d7e08022.jpg')}}"
                                                            alt="Danbi Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105798098" />
                                                    <div class="action-bar">
                                                        <a href="../products/danbi-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/danbi-dress.html" data-handle="danbi-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046875203">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44') }}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/danbi-dress.html"
                                                            title="Danbi Dress">Danbi Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046875203">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,790,000₫</span>
                                                        </div>
                                                    </div>

                                                    <div class="item-color-chosen">

                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-6  col-sm-3  col-md-4 col-lg-4  product-col">
                                        <div class="item_product_main">

                                            <form action="https://eunoiabyan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1046926704"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/danmi-dress.html" title="Danmi Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid0961_13e9055bcdd3433f9953b40d41d1387d.jpg')}}"
                                                            alt="Danmi Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid0987_a338b3a720b949d6825d8c124c55b0ae.jpg')}}"
                                                            alt="Danmi Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105959808" />
                                                    <div class="action-bar">
                                                        <a href="../products/danmi-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/danmi-dress.html" data-handle="danmi-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046926704">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44') }}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/danmi-dress.html"
                                                            title="Danmi Dress">Danmi Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046926704">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,690,000₫</span>
                                                        </div>
                                                    </div>

                                                    <div class="item-color-chosen">

                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-6  col-sm-3  col-md-4 col-lg-4  product-col">
                                        <div class="item_product_main">

                                            <form action="https://eunoiabyan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1046884101"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/hana-dress.html" title="Hana Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid1164_d9c2388e5d97441c8b1a6bd44eb5fc11.jpg')}}"
                                                            alt="Hana Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid1159_d292e1d0a30241c9ad05b53eae5b22e8.jpg')}}"
                                                            alt="Hana Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105838533" />
                                                    <div class="action-bar">
                                                        <a href="../products/hana-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/hana-dress.html" data-handle="hana-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046884101">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44') }}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/hana-dress.html"
                                                            title="Hana Dress">Hana Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046884101">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,790,000₫</span>
                                                        </div>
                                                    </div>

                                                    <div class="item-color-chosen">

                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-6  col-sm-3  col-md-4 col-lg-4  product-col">
                                        <div class="item_product_main">

                                            <form action="https://eunoiabyan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1046884176"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/harin.html" title="Harin Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid1253_909fe808fe6a4bceada44515ab4cd79f.jpg')}}"
                                                            alt="Harin Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid1218_5ec9bfa1296445b1b16532c9a369165a.jpg')}}"
                                                            alt="Harin Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105838710" />
                                                    <div class="action-bar">
                                                        <a href="../products/harin.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/harin.html" data-handle="harin"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046884176">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44') }}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/harin.html"
                                                            title="Harin Dress">Harin
                                                            Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046884176">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,790,000₫</span>
                                                        </div>
                                                    </div>

                                                    <div class="item-color-chosen">

                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-6  col-sm-3  col-md-4 col-lg-4  product-col">
                                        <div class="item_product_main">

                                            <form action="https://eunoiabyan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1046875496"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/jennie-dress.html" title="Jennie Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid0730_f548d71fe5c04c468234e537fa96c76f.jpg')}}"
                                                            alt="Jennie Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid0702_46e382b1d1894ab4bf12349cf493c360.jpg')}}"
                                                            alt="Jennie Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105798880" />
                                                    <div class="action-bar">
                                                        <a href="../products/jennie-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/jennie-dress.html" data-handle="jennie-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046875496">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44') }}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/jennie-dress.html"
                                                            title="Jennie Dress">Jennie Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046875496">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,890,000₫</span>
                                                        </div>
                                                    </div>

                                                    <div class="item-color-chosen">

                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-6  col-sm-3  col-md-4 col-lg-4  product-col">
                                        <div class="item_product_main">

                                            <form action="https://eunoiabyan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1046928305"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/lisa-dress.html" title="Lisa Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid0648_9ee2583cab1d444fbedb5b65bf78ba4a.jpg')}}"
                                                            alt="Lisa Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid0641_cd7e6bce0fe04ee5bbae5c2095c44c7b.jpg')}}"
                                                            alt="Lisa Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105962568" />
                                                    <div class="action-bar">
                                                        <a href="../products/lisa-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/lisa-dress.html" data-handle="lisa-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046928305">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44') }}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/lisa-dress.html"
                                                            title="Lisa Dress">Lisa Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046928305">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,990,000₫</span>
                                                        </div>
                                                    </div>

                                                    <div class="item-color-chosen">

                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-6  col-sm-3  col-md-4 col-lg-4  product-col">
                                        <div class="item_product_main">

                                            <form action="https://eunoiabyan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1046173522"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/mia-dress.html" title="Mia Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/mia_dress_2_-_nang_tho_d4ae4fc5039947f78ea64afc3a89dd60.jpg')}}"
                                                            alt="Mia Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/mia_dress_1_-_nang_tho_9d869f7c39414f6f9d72292e5dc2eefe.jpg')}}"
                                                            alt="Mia Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1102645209" />
                                                    <div class="action-bar">
                                                        <a href="../products/mia-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/mia-dress.html" data-handle="mia-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046173522">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44') }}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/mia-dress.html"
                                                            title="Mia Dress">Mia Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046173522">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,950,000₫</span>
                                                        </div>
                                                    </div>

                                                    <div class="item-color-chosen">

                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-6  col-sm-3  col-md-4 col-lg-4  product-col">
                                        <div class="item_product_main">

                                            <form action="https://eunoiabyan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1046874414"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/micha-dress.html" title="Micha Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid0486_ff4cd9eeaf9f43e98ff625f7fc5445c4.jpg')}}"
                                                            alt="Micha Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid0443_67c13b537306466da1fff6cd4892925e.jpg')}}"
                                                            alt="Micha Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105795827" />
                                                    <div class="action-bar">
                                                        <a href="../products/micha-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/micha-dress.html" data-handle="micha-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046874414">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44') }}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/micha-dress.html"
                                                            title="Micha Dress">Micha Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046874414">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,690,000₫</span>
                                                        </div>
                                                    </div>

                                                    <div class="item-color-chosen">

                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-6  col-sm-3  col-md-4 col-lg-4  product-col">
                                        <div class="item_product_main">

                                            <form action="https://eunoiabyan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1046173562"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/mikasa-dress.html" title="Mikasa Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/mikasa_dress_1_-_nang_tho_dea6b6a3a87a4867a75cbb5d5822e661.jpg')}}"
                                                            alt="Mikasa Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/mikasa_dress_2_-_nang_tho_ea4c2e328cb5437fadf828aac51dca52.jpg')}}"
                                                            alt="Mikasa Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1102645275" />
                                                    <div class="action-bar">
                                                        <a href="../products/mikasa-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/mikasa-dress.html" data-handle="mikasa-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046173562">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44') }}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/mikasa-dress.html"
                                                            title="Mikasa Dress">Mikasa Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046173562">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,990,000₫</span>
                                                        </div>
                                                    </div>

                                                    <div class="item-color-chosen">

                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-6  col-sm-3  col-md-4 col-lg-4  product-col">
                                        <div class="item_product_main">

                                            <form action="https://eunoiabyan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1046885637"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/minji-dress.html" title="Minji Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid1288_22af1d56230044bc9c9166bf0371d240.jpg')}}"
                                                            alt="Minji Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid1274_cd84b5f6c8e34ae782300cecb8930eee.jpg')}}"
                                                            alt="Minji Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105841656" />
                                                    <div class="action-bar">
                                                        <a href="../products/minji-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/minji-dress.html" data-handle="minji-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046885637">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44') }}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/minji-dress.html"
                                                            title="Minji Dress">Minji Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046885637">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">2,290,000₫</span>
                                                        </div>
                                                    </div>

                                                    <div class="item-color-chosen">

                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-6  col-sm-3  col-md-4 col-lg-4  product-col">
                                        <div class="item_product_main">

                                            <form action="https://eunoiabyan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1046173577"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/misumi-dress.html" title="Misumi Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/misumi_dress_1_-_nang_tho_ffaedc76860b41b597199f8ace75a89a.jpg')}}"
                                                            alt="Misumi Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/misumi_dress_2_-_nang_tho_d305421b37324a3aaa4cbf62049ade0a.jpg')}}"
                                                            alt="Misumi Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1102645398" />
                                                    <div class="action-bar">
                                                        <a href="../products/misumi-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/misumi-dress.html" data-handle="misumi-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046173577">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44') }}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/misumi-dress.html"
                                                            title="Misumi Dress">Misumi Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046173577">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,650,000₫</span>
                                                        </div>
                                                    </div>

                                                    <div class="item-color-chosen">

                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-6  col-sm-3  col-md-4 col-lg-4  product-col">
                                        <div class="item_product_main">

                                            <form action="https://eunoiabyan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1046926134"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/nabi-dress.html" title="Nabi Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid1443_df3830b7cc01469aae9b588f362e9493.jpg')}}"
                                                            alt="Nabi Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid1348_4d896f3fab644a1a96ea03b578c6a0ad.jpg')}}"
                                                            alt="Nabi Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105959078" />
                                                    <div class="action-bar">
                                                        <a href="../products/nabi-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/nabi-dress.html" data-handle="nabi-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046926134">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44') }}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/nabi-dress.html"
                                                            title="Nabi Dress">Nabi Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046926134">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,790,000₫</span>
                                                        </div>
                                                    </div>

                                                    <div class="item-color-chosen">

                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-6  col-sm-3  col-md-4 col-lg-4  product-col">
                                        <div class="item_product_main">

                                            <form action="https://eunoiabyan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1046173630"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/rinka-dress.html" title="Rinka Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/rinka_dress_1_-_nang_tho_18fbb32976d94d688c187cf1f4f701cc.jpg')}}"
                                                            alt="Rinka Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/rinka_dress_2_-_nang_tho_c22ef2dd777a42bea52ec6666ee004c9.jpg')}}"
                                                            alt="Rinka Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1102645517" />
                                                    <div class="action-bar">
                                                        <a href="../products/rinka-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/rinka-dress.html" data-handle="rinka-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046173630">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44') }}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/rinka-dress.html"
                                                            title="Rinka Dress">Rinka Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046173630">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,790,000₫</span>
                                                        </div>
                                                    </div>

                                                    <div class="item-color-chosen">

                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-6  col-sm-3  col-md-4 col-lg-4  product-col">
                                        <div class="item_product_main">

                                            <form action="https://eunoiabyan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1046173637"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/ruka-dress.html" title="Ruka Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/ruka_dress_1_-_nang_tho_7241ddded29f4f1f8df3263ad25df0f8.jpg')}}"
                                                            alt="Ruka Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/ruka_dress_2_-_nang_tho_2c6a26f87a564b0693d0ac5296e10210.jpg')}}"
                                                            alt="Ruka Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1102645576" />
                                                    <div class="action-bar">
                                                        <a href="../products/ruka-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/ruka-dress.html" data-handle="ruka-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046173637">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44') }}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/ruka-dress.html"
                                                            title="Ruka Dress">Ruka Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046173637">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,690,000₫</span>
                                                        </div>
                                                    </div>

                                                    <div class="item-color-chosen">

                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-6  col-sm-3  col-md-4 col-lg-4  product-col">
                                        <div class="item_product_main">

                                            <form action="https://eunoiabyan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1046875062"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/sarang-dress.html" title="Sarang Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid0427_584b8454e5a947e28813f9d66eb98ee7.jpg')}}"
                                                            alt="Sarang Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/kid0408_fbd848923f6a4ab7985968259ef802c7.jpg')}}"
                                                            alt="Sarang Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105797739" />
                                                    <div class="action-bar">
                                                        <a href="../products/sarang-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/sarang-dress.html"
                                                            data-handle="sarang-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046875062">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44') }}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/sarang-dress.html"
                                                            title="Sarang Dress">Sarang Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046875062">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,790,000₫</span>
                                                        </div>
                                                    </div>

                                                    <div class="item-color-chosen">

                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-6  col-sm-3  col-md-4 col-lg-4  product-col">
                                        <div class="item_product_main">

                                            <form action="https://eunoiabyan.com/cart/add" method="post"
                                                class="variants product-action" data-id="product-actions-1046173646"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/sumire-dress.html" title="Sumire Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/sumire_dress_1_-_nang_tho_e98b36b5ca2f4baba4dd7f16d0cd32f3.jpg')}}"
                                                            alt="Sumire Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/sumire_dress_2_-_nang_tho_e6b22f023cff4b7cb7c10bdbf65af62e.jpg')}}"
                                                            alt="Sumire Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1102645604" />
                                                    <div class="action-bar">
                                                        <a href="../products/sumire-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/sumire-dress.html"
                                                            data-handle="sumire-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046173646">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44') }}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/sumire-dress.html"
                                                            title="Sumire Dress">Sumire Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046173646">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,590,000₫</span>
                                                        </div>
                                                    </div>

                                                    <div class="item-color-chosen">

                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                </div>
                                <div class="section pagenav">

                                    <nav class="clearfix relative nav_pagi w_100">
                                        <ul class="pagination clearfix float-right">

                                            <li class="page-item disabled"><a class="page-link" href="#"><i
                                                        class="fa fa-angle-left"></i></a></li>

                                            <li class="active page-item disabled"><a class="page-link"
                                                    href="javascript:;">1</a></li>

                                            <li class="page-item"><a class="page-link" onclick="doSearch(2)"
                                                    href="bst-nang-thocf0d.html?&amp;page=2&amp;view=grid">2</a></li>

                                            <li class="page-item hidden-xs"><a class="page-link" onclick="doSearch(2)"
                                                    href="bst-nang-thocf0d.html?&amp;page=2&amp;view=grid"><i
                                                        class="fa fa-angle-right" aria-hidden="true"></i>
                                                </a></li>

                                        </ul>
                                    </nav>
                                    <script>
                                        var cuPage = 1
                                    </script>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section container" id="recent-view-coll">
        <div class="title_module section heading-bar d-flex justify-content-between align-items-center">
            <h2 class="bf_flower heading-bar__title">
                Sản phẩm đã xem
            </h2>
        </div>
        <link rel="preload" as='style' type="text/css"
            href="{{asset('assets/theme/200000685745/1001041408/14/recentview6704.css?v=44') }}">
        <link rel="stylesheet" href="{{asset('assets/theme/200000685745/1001041408/14/recentview6704.css?v=44') }}">

        <div class="recent-view-list row"></div>

        <script>
            let data = []

            function getProductByView(handle) {
                return $.ajax({
                    url: `/products/${handle}?view=product-item`,
                    success: function(res) {
                        data.push(res)
                    }
                })

            }

            function renderRecentView(data, query) {
                if (data && data.length) {
                    let wrapper = $(query).find('.recent-view-list');
                    data = data.map(item => {
                        return `<div class="product-col">
                        ${item}
                    </div>`
                    }).join('')
                    wrapper.html(data)
                    productsCallback()

                    window.matchMedia('(min-width: 768px)').matches && wrapper.find('.item_product_main').length >= 5 && $(
                        `${query} .recent-view-list:not(.slick-initialized)`).slick({
                        autoplay: false,
                        autoplaySpeed: 6000,
                        dots: false,
                        arrows: true,
                        infinite: false,
                        speed: 300,
                        slidesToShow: 5,
                        slidesToScroll: 5,
                        centerMode: false,
                        responsive: [{
                                breakpoint: 1200,
                                settings: {
                                    slidesToShow: 5,
                                    slidesToScroll: 5
                                }
                            },
                            {
                                breakpoint: 991,
                                settings: {
                                    slidesToShow: 5,
                                    slidesToScroll: 1
                                }
                            },
                            {
                                breakpoint: 767,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2
                                }
                            }
                        ]
                    });

                } else {
                    $(query).remove()
                }
            }

            function getRecentView(query) {
                try {
                    let storage = JSON.parse(localStorage.getItem('recentProduct')) || []
                    if (storage && storage.length && Array.isArray(storage)) {
                        //	$.when.apply($, my_array).then( ___ )
                        let getProductArr = storage.map((handle) => getProductByView(handle));
                        $.when.apply($, getProductArr).then(() => {
                            renderRecentView(data, query)
                        }, () => {
                            renderRecentView(data, query)
                        })
                    } else {
                        $(query).remove()
                    }
                } catch (e) {
                    console.log(e)
                }
            }
            if (typeof getRecentView != 'undefined') {
                getRecentView('#recent-view-coll')
            }
        </script>
    </section>
    <script>
        var colName = "BST Nàng Thơ";
        var colId = 1003553600;
        var selectedViewData = "data";
    </script>
@endsection
