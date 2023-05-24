<header class="ega-header ega-pos--relative">
    <div class="header-wrap container">
        <div class="toggle-nav btn menu-bar mr-4 ml-0 p-0  d-lg-none d-flex text-white">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <div id="logo">

            <a href="index.html" class="logo-wrapper ">
                <img class="img-fluid" src="{{ asset('assets/theme.hstatic.net/200000685745/1001041408/14/logo6704.png?v=44') }}"
                    alt="logo EUNOIA" width="134" height="45">
            </a>

        </div>
        <div class="navigation--horizontal d-lg-flex align-items-center d-none">
            <div class=" navigation-wrapper navigation-horizontal-wrapper ">
                <nav>
                    <ul class="navigation navigation-horizontal list-group list-group-flush scroll">

                        <li class="menu-item list-group-item">
                            <a href="index.html" class="menu-item__link" title="Trang chủ">
                                <span>
                                    Trang chủ</span>
                            </a>

                        </li>

                        <li class="menu-item list-group-item">
                            <a href="collections/all.html" class="menu-item__link" title="Sản phẩm">
                                <span>
                                    Sản phẩm</span>

                                <i class='float-right' data-toggle-submenu>

                                    <svg class="icon">
                                        <use xlink:href="#icon-arrow" />
                                    </svg> </i>

                            </a>

                            <div class="submenu scroll  default ">
                                <div class='toggle-submenu d-lg-none d-xl-none'>
                                    <i class='mr-3'>

                                        <svg class="icon" style="transform: rotate(180deg)">
                                            <use xlink:href="#icon-arrow" />
                                        </svg> </i>
                                    <span>Sản phẩm </span>
                                </div>
                                <ul class="submenu__list container">

                                    <li class="submenu__item submenu__item--main">
                                        <a class="link" href="collections/bst-nang-tho.html" title="BST Nàng Thơ">BST
                                            Nàng Thơ</a>
                                    </li>

                                    <li class="submenu__item submenu__item--main">
                                        <a class="link" href="collections/bst-black-swan.html"
                                            title="BST Black Swan">BST Black Swan</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="menu-item list-group-item">
                            <a href="blogs/news.html" class="menu-item__link" title="Blog">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHgCAMAAABKCk6nAAAAA1BMVEXr6+uInxNMAAAA9UlEQVR42u3BgQAAAADDoPtTH2TVAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADghg0AAVGLwCwAAAAASUVORK5CYII="
                                    alt="Blog" />
                                <span>
                                    Blog</span>
                            </a>

                        </li>

                        <li class="menu-item list-group-item">
                            <a href="pages/about-us.html" class="menu-item__link" title="Giới thiệu">
                                <span>
                                    Giới thiệu</span>
                            </a>

                        </li>

                        <li class="menu-item list-group-item">
                            <a href="pages/lien-he.html" class="menu-item__link" title="Liên hệ">
                                <span>
                                    Liên hệ</span>
                            </a>

                        </li>

                    </ul>
                </nav>
            </div>
            <div class=" navigation-arrows ">
                <i class="fas fa-chevron-left prev disabled"></i>
                <i class="fas fa-chevron-right next"></i>
            </div>
        </div>

        <div class="header-right ega-d--flex">
            <div class="icon-action header-right__icons" style='--header-grid-template: repeat(4, 1fr);'>
                <a href="javascript:;" class="header-action header-action_translate">
                    <img width="25" height="25"
                        src="{{ asset('assets/theme.hstatic.net/200000685745/1001041408/14/language6704.jpg?v=44') }}"
                        aria-label="Translate into your language" />
                    <div id="google_translate_element"></div>
                </a>
                <span class="header-icon icon-action__search icon-action__search--desktop toggle_form_search">
                    <svg class="icon">
                        <use xlink:href="#icon-search" />
                    </svg> </span>
                <div id="icon-account" class="ega-color--inherit header-icon icon-account d-none d-md-block d-lg-block">
                    <svg class="icon">
                        <use xlink:href="#icon-user" />
                    </svg>
                    <div class="account-action">
                        <a href="account/login.html" title="Đăng nhập">Đăng nhập</a>
                        <a href="account/register.html" title="Đăng ký">Đăng ký</a>
                    </div>
                </div>
                <div class="mini-cart text-xs-center">
                    <a class="header-icon cart-count ega-color--inherit" href="cart.html" title="Giỏ hàng">
                        <svg class="icon">
                            <use xlink:href="#icon-cart" />
                        </svg> <span class="count_item count_item_pr">0</span>
                    </a>
                    <div class="top-cart-content card ">
                        <ul id="cart-sidebar" class="mini-products-list count_li list-unstyled">
                            <li class="list-item">
                                <ul></ul>
                            </li>
                            <li class="action">

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script type="text/x-custom-template" data-template="stickyHeader">
<header class="ega-header header header_sticky">
<div class="container">	
<div class="header-wrap">
    <div id="logo">


        
        <a href="/" class="logo-wrapper ">	
            <img class="img-fluid"
                 src="{{ asset('assets/theme.hstatic.net/200000685745/1001041408/14/logo6704.png?v=44') }}" 
                 alt="logo EUNOIA"
                 width="134"
                 height="45"
                 >
        </a>
        


    </div>

    <div class="ega-form-search">
        <form action="/search" method="get" class="input-group search-bar custom-input-group" role="search">
<input type="text" name="query" value="" autocomplete="off" 
   class="input-group-field auto-search form-control " required="" 
   data-placeholder="Tìm theo tên sản phẩm...; Tìm theo Bộ sưu tập...;">
<input type="hidden" name="type" value="product">
<span class="input-group-btn btn-action">
<button type="submit"  aria-label="search" class="btn text-white icon-fallback-text h-100">
    <svg class="icon">
<use xlink:href="#icon-search" />
</svg>		</button>
</span>
</form>
        
                        
                        <div class="search-dropdow">
            <ul class="search__list pl-0 d-flex list-unstyled mb-0 flex-wrap">
                                        <li class="mr-2" >
                    <a id="filter-search-vay" href="/search?q=filter=(tag:product=váy)">váy</a>
                </li>	
                <li class="mr-2" >
                    <a id="filter-search-vay-thiet-ke" href="/search?q=filter=(tag:product=váy+thiết+kê)"> váy thiết kê</a>
                </li>	
                <li class="mr-2" >
                    <a id="filter-search-vay-cong-chua" href="/search?q=filter=(tag:product=váy+công+chúa)"> váy công chúa</a>
                </li>	
            </ul>
        </div>
                                    </div>

    <div class="header-right ega-d--flex">
        <div class="icon-action header-right__icons" style='--header-grid-template: repeat(3, 1fr);'>
            <span class="header-icon icon-action__search icon-action__search--desktop toggle_form_search">
                <svg class="icon">
<use xlink:href="#icon-search" />
</svg>					</span>
            <div id="icon-account" class="ega-color--inherit header-icon icon-account d-none d-md-block d-lg-block">
                <svg class="icon">
<use xlink:href="#icon-user" />
</svg>						<div class="account-action">
                                                <a href="/account/login" title="Đăng nhập">Đăng nhập</a>
                    <a href="/account/register" title="Đăng ký">Đăng ký</a>
                                            </div>
            </div>
                                <div class="mini-cart text-xs-center">
                <a class="header-icon cart-count ega-color--inherit" href="/cart"  title="Giỏ hàng">
                    <svg class="icon">
<use xlink:href="#icon-cart" />
</svg>							<span class="count_item count_item_pr">0</span>
                </a>
                <div class="top-cart-content card ">
                    <ul id="cart-sidebar" class="mini-products-list count_li list-unstyled">
                        <li class="list-item">
                            <ul></ul>
                        </li>
                        <li class="action">

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ega-header-layer"></div>
</div>
</header>

</script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        
            new google.translate.TranslateElement({pageLanguage: 'vi'}, 'google_translate_element');
        
    }
</script>

<h1 class="d-none">EUNOIA - </h1>
