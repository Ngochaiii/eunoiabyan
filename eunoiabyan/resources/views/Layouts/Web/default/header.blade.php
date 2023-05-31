<header class="ega-header ega-pos--relative">



    <div class="header-wrap container">
        <div class="toggle-nav btn menu-bar mr-4 ml-0 p-0  d-lg-none d-flex text-white">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

        <div id="logo">

            <a href="index.html" class="logo-wrapper ">
                <img class="img-fluid" src="{{ asset('assets/theme/200000685745/1001041408/14/logo6704.png?v=44') }}"
                    alt="logo EUNOIA" width="134" height="45">
            </a>

        </div>
        <div class="navigation--horizontal d-lg-flex align-items-center d-none">
            <div class=" navigation-wrapper navigation-horizontal-wrapper ">
                <nav>
                    <ul class="navigation navigation-horizontal list-group list-group-flush scroll">

                        <li class="menu-item list-group-item">
                            <a href="{{ route('home') }}" class="menu-item__link" title="Trang chủ">
                                <span>
                                    Trang chủ</span>
                            </a>

                        </li>

                        <li class="menu-item list-group-item">
                            <a href="{{ route('collection.all') }}" class="menu-item__link" title="Sản phẩm">
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
                                        <a class="link" href="{{ route('collection.nangtho') }}"
                                            title="BST Nàng Thơ">BST
                                            Nàng Thơ</a>
                                    </li>

                                    <li class="submenu__item submenu__item--main">
                                        <a class="link" href="{{ route('collection.black') }}"
                                            title="BST Black Swan">BST Black Swan</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="menu-item list-group-item">
                            <a href="{{ route('blogs.news') }}" class="menu-item__link" title="Blog">
                                <img src="https://theme.hstatic.net/200000685745/1001041408/14/menu_icon_3.png?v=67"
                                    alt="Blog" />
                                <span>
                                    Blog</span>
                            </a>

                        </li>

                        <li class="menu-item list-group-item">
                            <a href="{{ route('introduce') }}" class="menu-item__link" title="Giới thiệu">
                                <span>
                                    Giới thiệu</span>
                            </a>

                        </li>

                        <li class="menu-item list-group-item">
                            <a href="{{ route('contact') }}" class="menu-item__link" title="Liên hệ">
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
                        src="{{ asset('assets/theme/200000685745/1001041408/14/language6704.jpg?v=44') }}"
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
                    <a class="header-icon cart-count ega-color--inherit" href="{{ route('cart') }}" title="Giỏ hàng">
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
<div id="mobile-menu" class="scroll">
    <div class="media d-flex user-menu">

        <i class="fas fa-user-circle mr-3 align-self-center"></i>
        <div class="media-body d-md-flex flex-column ">
            <a rel="nofollow" href="/account/login" class="d-block" title="Tài khoản">
                Tài khoản
            </a>
            <small>
                <a href="/account/login" title="Đăng nhập" class="font-weight: light">
                    Đăng nhập
                </a> </small>

        </div>
    </div>

    <div class="mobile-menu-body scroll">
        <nav>
            <ul class="navigation navigation-horizontal list-group list-group-flush scroll">
                <li class="menu-item list-group-item">
                    <a href="/" class="menu-item__link" title="Trang chủ">
                        <span>
                            Trang chủ</span>
                    </a>
                </li>
                <li class="menu-item list-group-item">
                    <a href="/collections/all" class="menu-item__link" title="Sản phẩm">
                        <span>
                            Sản phẩm</span>
                        <i class="float-right" data-toggle-submenu="">
                            <svg class="icon">
                                <use xlink:href="#icon-arrow"></use>
                            </svg> </i>
                    </a>
                    <div class="submenu scroll  default ">
                        <div class="toggle-submenu d-lg-none d-xl-none">
                            <i class="mr-3">
                                <svg class="icon" style="transform: rotate(180deg)">
                                    <use xlink:href="#icon-arrow"></use>
                                </svg> </i>
                            <span>Sản phẩm </span>
                        </div>
                        <ul class="submenu__list container">
                            <li class="submenu__item ">
                                <a class="link" href="/collections/bst-nang-tho-2" title="BST Nàng Thơ Mùa Hè">BST
                                    Nàng Thơ Mùa Hè</a>
                            </li>
                            <li class="submenu__item ">
                                <a class="link" href="/collections/bst-nang-tho-1"
                                    title="BST Nàng Thơ Mùa Xuân">BST Nàng Thơ Mùa Xuân</a>
                            </li>
                            <li class="submenu__item ">
                                <a class="link" href="/collections/bst-black-swan" title="BST Black Swan">BST Black
                                    Swan</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item list-group-item">
                    <a href="/blogs/news" class="menu-item__link" title="Blog">
                        <img src="//theme.hstatic.net/200000685745/1001041408/14/menu_icon_3.png?v=73" alt="Blog">
                        <span>
                            Blog</span>
                    </a>

                </li>
                <li class="menu-item list-group-item">
                    <a href="/pages/about-us" class="menu-item__link" title="Giới thiệu">
                        <span>
                            Giới thiệu</span>
                    </a>

                </li>
                <li class="menu-item list-group-item">
                    <a href="/pages/lien-he" class="menu-item__link" title="Liên hệ">
                        <span>
                            Liên hệ</span>
                    </a>

                </li>

            </ul>
        </nav>

    </div>

    <div class="mobile-menu-footer border-top w-100 d-flex align-items-center text-center">
        <div class="hotline  w-50   p-2 ">
            <a href="tel:0868601369" title="0868601369">
                Gọi điện <i class="fas fa-phone ml-3"></i>
            </a>
        </div>
        <div class="messenger border-left p-2 w-50 border-left">

            <a href="https://m.me/eunoiabyan.kids" title="https://m.me/eunoiabyan.kids">
                Nhắn tin
                <i class="fab fa-facebook-messenger ml-3"></i>
            </a>
        </div>

    </div>
</div>

<div class="menu-overlay"></div>

<script type="text/javascript">
    function googleTranslateElementInit() {

        new google.translate.TranslateElement({
            pageLanguage: 'vi'
        }, 'google_translate_element');

    }
</script>

<h1 class="d-none">EUNOIA - </h1>

<style>
    @media (max-width: 991px) #mobile-menu.active+.menu-overlay {
        position: fixed;
        left: 0;
        top: 0;
        z-index: 9998;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }
</style>
