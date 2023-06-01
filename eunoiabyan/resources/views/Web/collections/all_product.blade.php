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
                            <span>Tất cả sản phẩm</span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class='collection_banner mb-3 container text-center'>
        <a class="banner" href="{{route('collection.all')}}" title="Ảnh banner">
            <picture>
                <source media="(min-width: 768px)"
                    srcset="{{asset('assets/theme/200000685745/1001041408/14/collection_main_banner6704.jpg?v=44')}}"
                    data-srcset="{{asset('assets/theme/200000685745/1001041408/14/collection_main_banner6704.jpg?v=44')}}">
                <source media="(max-width: 767px)"
                    srcset="{{asset('assets/theme/200000685745/1001041408/14/collection_main_banner6704.jpg?v=44')}}"
                    data-srcset="{{asset('assets/theme/200000685745/1001041408/14/collection_main_banner_large.jpg?v=44')}}">
                <img class=' img-fluid'
                    src="{{asset('assets/theme.hstatic.net/200000685745/1001041408/14/collection_main_banner6704.jpg?v=44')}}"
                    loading="lazy" width="1410" height="183" alt="Ảnh banner" />
            </picture>
        </a>
    </div>

    <section class="section wrap_background">
        <div class="container">
            <div class="bg_collection section">
                <div class="coll-head">
                    <h1 class="title_page collection-title mb-0 pb-3">
                        Tất cả sản phẩm </h1>
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
                                                                    style="--filter-color: url({{asset('assets/theme/200000685745/1001041408/14/color_56704.png?v=44')}}) no-repeat center center; background-size: cover"></i>
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
                                                                    style="--filter-color: url({{asset('assets/theme/200000685745/1001041408/14/color_46704.png?v=44')}}) no-repeat center center; background-size: cover"></i>
                                                                Cam
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li
                                                        class="filter-item color filter-item--check-box filter-item--green ">
                                                        <span>
                                                            <label class="custom-checkbox color" for="filter-tag-tim">
                                                                <input type="checkbox" id="filter-tag-tim"
                                                                    data-group="tag1" data-field="tag" data-text="Tím"
                                                                    value="product contains Tím" data-operator="||">
                                                                <i class="fa tim"
                                                                    style="--filter-color: url({{asset('assets/theme/200000685745/1001041408/14/color_106704.png?v=44')}}) no-repeat center center; background-size: cover"></i>
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
                                                                    style="--filter-color: url({{asset('assets/theme/200000685745/1001041408/14/color_76704.png?v=44')}}) no-repeat center center; background-size: cover"></i>
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
                                                                    style="--filter-color: url({{asset('assets/theme/200000685745/1001041408/14/color_16704.png?v=44')}}) no-repeat center center; background-size: cover"></i>
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
                                                                    style="--filter-color: url({{asset('assets/theme/200000685745/1001041408/14/color_26704.png?v=44')}}) no-repeat center center; background-size: cover"></i>
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
                                        <aside class="aside-item aside-itemxx filter-type">
                                            <div class="aside-title">
                                                <h2 class="title-head margin-top-0"><span>Loại</span></h2>
                                            </div>
                                            <div class="aside-content filter-group scroll">
                                                <ul>
                                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                                        <span>
                                                            <label class="custom-checkbox" for="filter-bst-nang-tho">
                                                                <input type="checkbox" id="filter-bst-nang-tho"
                                                                    data-group="PRODUCT_TYPE" data-field="product_type"
                                                                    data-text value="product contains BST Nàng Thơ"
                                                                    data-operator="||">
                                                                <i class="fa"></i>
                                                                BST Nàng Thơ
                                                            </label>
                                                        </span>
                                                    </li>
                                                    <li class="filter-item filter-item--check-box filter-item--green ">
                                                        <span>
                                                            <label class="custom-checkbox" for="filter-bst-black-swan">
                                                                <input type="checkbox" id="filter-bst-black-swan"
                                                                    data-group="PRODUCT_TYPE" data-field="product_type"
                                                                    data-text value="product contains BST Black Swan"
                                                                    data-operator="||">
                                                                <i class="fa"></i>
                                                                BST Black Swan
                                                            </label>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </aside>
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
                                                class="variants product-action" data-id="product-actions-1046954526"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/elida-dress.html" title="Elida Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/11._elida_dress_000003_75ae7fd11c4d45e895712cf14b0b5b9f.jpg')}}"
                                                            alt="Elida Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/11._elida_dress_000006_5e92987694d149219d55e88fce871c9d.jpg')}}"
                                                            alt="Elida Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1106017568" />
                                                    <div class="action-bar">
                                                        <a href="../products/elida-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/elida-dress.html" data-handle="elida-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046954526">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44')}}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/elida-dress.html"
                                                            title="Elida Dress">Elida Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046954526">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,799,000₫</span>
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
                                                class="variants product-action" data-id="product-actions-1046953538"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/akira-dress.html" title="Akira Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/10._akira_dress_000003_9b72dc51663144d3b7324d32af752d4e.jpg')}}"
                                                            alt="Akira Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/10._akira_dress_000007_e7170cd6779b487e90c1d1fea7bc5940.jpg')}}"
                                                            alt="Akira Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1106013731" />
                                                    <div class="action-bar">
                                                        <a href="../products/akira-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/akira-dress.html" data-handle="akira-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046953538">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44')}}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/akira-dress.html"
                                                            title="Akira Dress">Akira Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046953538">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,799,000₫</span>
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
                                                class="variants product-action" data-id="product-actions-1046938743"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/aliana-dress.html" title="Aliana Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/9._aliana_dress_000003_5654cfd5c8734b05b1741a8a84a84584.jpg')}}"
                                                            alt="Aliana Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/9._aliana_dress_000006_c95a397ef7dc498ead1006327c52f07a.jpg')}}"
                                                            alt="Aliana Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105982978" />
                                                    <div class="action-bar">
                                                        <a href="../products/aliana-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/aliana-dress.html" data-handle="aliana-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046938743">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44')}}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/aliana-dress.html"
                                                            title="Aliana Dress">Aliana Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046938743">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">2,099,000₫</span>
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
                                                class="variants product-action" data-id="product-actions-1046938638"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/vasilisa-dress.html" title="Vasilisa Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/8._vasilisa_dress_000003_7f02a746c30241ecacf558e01af54b40.jpg')}}"
                                                            alt="Vasilisa Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/8._vasilisa_dress_000007_e2009d832b9e4bdda007e0b93a933f29.jpg')}}"
                                                            alt="Vasilisa Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105982701" />
                                                    <div class="action-bar">
                                                        <a href="../products/vasilisa-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/vasilisa-dress.html"
                                                            data-handle="vasilisa-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046938638">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44')}}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/vasilisa-dress.html"
                                                            title="Vasilisa Dress">Vasilisa Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046938638">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">2,099,000₫</span>
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
                                                class="variants product-action" data-id="product-actions-1046938563"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/irina-dress.html" title="Irina Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/7._irina_dress_000003_b68608bded634d14b224f77a3ddc5592.jpg')}}"
                                                            alt="Irina Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/7._irina_dress_000007_20cb6c5dc2c34c949674209b744b8078.jpg')}}"
                                                            alt="Irina Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105982575" />
                                                    <div class="action-bar">
                                                        <a href="../products/irina-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/irina-dress.html" data-handle="irina-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046938563">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44')}}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/irina-dress.html"
                                                            title="Irina Dress">Irina Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046938563">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,799,000₫</span>
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
                                                class="variants product-action" data-id="product-actions-1046938352"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/galina-dress.html" title="Galina Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/6._galina_dress_000003_5068ec51b18745eeb8cfd0eb97ad3fd3.jpg')}}"
                                                            alt="Galina Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/6._galina_dress_000007_0bff18dbaad54201b7f9628c87a20e5c.jpg')}}"
                                                            alt="Galina Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105982277" />
                                                    <div class="action-bar">
                                                        <a href="../products/galina-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/galina-dress.html" data-handle="galina-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046938352">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44')}}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/galina-dress.html"
                                                            title="Galina Dress">Galina Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046938352">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,699,000₫</span>
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
                                                class="variants product-action" data-id="product-actions-1046937253"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/larisa-dress.html" title="Larisa Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/5._larisa_dress_000003_e42fef0a584a4424a1718cb0eac4d89e.jpg')}}"
                                                            alt="Larisa Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/5._larisa_dress_000007_789ce1f648fd4f73b6330a069a5c8cb3.jpg')}}"
                                                            alt="Larisa Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105980429" />
                                                    <div class="action-bar">
                                                        <a href="../products/larisa-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/larisa-dress.html" data-handle="larisa-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046937253">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44')}}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/larisa-dress.html"
                                                            title="Larisa Dress">Larisa Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046937253">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,599,000₫</span>
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
                                                class="variants product-action" data-id="product-actions-1046935186"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/aydin-dress.html" title="Aydin Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/aydin_1_1152343e149e462e8e5967a81fb72e05.jpg')}}"
                                                            alt="Aydin Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/aydin_2_21c32bdb0a754eccb4d1147960372125.jpg')}}"
                                                            alt="Aydin Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105975714" />
                                                    <div class="action-bar">
                                                        <a href="../products/aydin-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/aydin-dress.html" data-handle="aydin-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046935186">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44')}}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/aydin-dress.html"
                                                            title="Aydin Dress">Aydin Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046935186">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,599,000₫</span>
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
                                                class="variants product-action" data-id="product-actions-1046934749"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/luchik-dress.html" title="Luchik Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/luchik_1_4e37ac99e7e8469da62eb1ad043465fb.jpg')}}"
                                                            alt="Luchik Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/luchik_2_c0c2df109e2f4a1da4ad1299ccef15a8.jpg')}}"
                                                            alt="Luchik Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105975024" />
                                                    <div class="action-bar">
                                                        <a href="../products/luchik-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/luchik-dress.html" data-handle="luchik-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046934749">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44')}}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/luchik-dress.html"
                                                            title="Luchik Dress">Luchik Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046934749">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,599,000₫</span>
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
                                                class="variants product-action" data-id="product-actions-1046928481"
                                                enctype="multipart/form-data">
                                                <div class="product-thumbnail pos-relative">

                                                    <a class="image_thumb pos-relative embed-responsive embed-responsive-2by3"
                                                        href="../products/katia-dress.html" title="Katia Dress">

                                                        <img loading="lazy" class='img-fetured' width="480"
                                                            height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/30_cbb90996a0f142b1887c55aacd0183a8.jpg')}}"
                                                            alt="Katia Dress">
                                                        <img loading="lazy"
                                                            class='product-thumbnail__img product-thumbnail__img--secondary'
                                                            width="480" height="480" style="--image-scale: 1;"
                                                            src="{{asset('assets/product.hstatic.net/200000685745/product/29_14143b91fa094ee6822d3e4e28ad24f6.jpg')}}"
                                                            alt="Katia Dress">

                                                    </a>
                                                    <input type="hidden" name="id" value="1105962904" />
                                                    <div class="action-bar">
                                                        <a href="../products/katia-dress.html"
                                                            class="action-child btn-circle btn-views btn_view btn right-to m-0">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span class="action-name">Tùy chọn</span>
                                                        </a>

                                                        <a href="../products/katia-dress.html" data-handle="katia-dress"
                                                            class="action-child xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                                                            <i class="fas fa-eye"></i>
                                                            <span class="action-name">Xem nhanh</span>
                                                        </a>
                                                    </div>

                                                    <div class="label_product product_gift_label hidden"
                                                        data-id="1046928481">
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44')}}"
                                                            loading='lazy' width='20' height='20'
                                                            alt="product gift">
                                                    </div>

                                                </div>
                                                <div class="product-info">

                                                    <span class="product-vendor">Eunoia by AN</span>
                                                    <div class="product-name">
                                                        <a class="link" href="../products/katia-dress.html"
                                                            title="Katia Dress">Katia Dress</a>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div class="haravan-product-reviews-badge" data-id="1046928481">
                                                        </div>

                                                    </div>

                                                    <div class="product-item-cta position-relative">
                                                        <div class="price-box">
                                                            <span class="price">1,599,000₫</span>
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
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44')}}"
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
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44')}}"
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
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44')}}"
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
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44')}}"
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
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44')}}"
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
                                                        <img src="{{asset('assets/theme/200000685745/1001041408/14/ega-product-gift6704.png?v=44')}}"
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

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
