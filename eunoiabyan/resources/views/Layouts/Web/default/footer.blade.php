<footer>
    <div class="mid-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-block footer-click">

                        <a href="/" class="logo-wrapper mb-3 d-block ">
                            <img loading="lazy"
                                src="{{ asset('assets/theme/200000685745/1001041408/14/logo-footer6704.png?v=44') }}"
                                alt="logo EUNOIA" width="164" height="50">
                        </a>

                        <div class="single-contact">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="content">Địa chỉ:
                                <span>56A Trần Nhân Tông, Quận Hai Bà Trưng, TP Hà Nội</span>

                            </div>
                        </div>
                        <div class="single-contact">
                            <i class="fa fa-mobile-alt"></i>
                            <div class="content">
                                Số điện thoại: <a class="link" title="0868601369" href="tel:0868601369">0868601369</a>
                            </div>
                        </div>
                        <div class="single-contact">
                            <i class="fa fa-envelope"></i>
                            <div class="content">
                                Email: <a title="eunoia.byan@gmail.com" class="link"
                                    href="mailto:eunoia.byan@gmail.com">eunoia.byan@gmail.com</a>
                            </div>
                        </div>

                        <div id="copyright" class="fot_copyright mt-3">
                            <span class="wsp">
                                © Bản quyền thuộc về
                                <a href="https://egany.com" rel="nofollow" target="_blank">EGANY</a> | Cung cấp bởi <a
                                    href="javascript:;">Haravan</a>
                            </span>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-block footer-click">
                                <h3 class="footer-title title-menu clicked">
                                    THÔNG TIN CÔNG TY 
                                    <i class="fa fa-angle-down d-md-none d-inline-block"></i>
                                </h3>
                                <ul class="list-menu toggle-mn">

                                    <li class="li_menu">
                                        <a class="link" href="{{route('home')}}" title="Trang chủ">Trang chủ</a>
                                    </li>

                                    <li class="li_menu">
                                        <a class="link" href="{{route('collection.all')}}" title="Sản phẩm">Sản phẩm</a>
                                    </li>

                                    <li class="li_menu">
                                        <a class="link" href="{{route('blogs.news')}}" title="Blog">Blog</a>
                                    </li>

                                    <li class="li_menu">
                                        <a class="link" href="{{route('introduce')}}" title="Giới thiệu">Giới thiệu</a>
                                    </li>

                                    <li class="li_menu">
                                        <a class="link" href="{{route('contact')}}" title="Liên hệ">Liên hệ</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-block footer-click">
                                <h3 class="footer-title title-menu clicked">
                                    HỖ TRỢ KHÁCH HÀNG
                                    <i class="fa fa-angle-down d-md-none d-inline-block"></i>
                                </h3>
                                <ul class="list-menu toggle-mn">

                                    <li class="li_menu">
                                        <a class="link" href="{{route('support.size')}}" title="Hướng dẫn chọn size">Hướng dẫn chọn size</a>
                                    </li>

                                    <li class="li_menu">
                                        <a class="link" href="{{route('support.privaryPolicy')}}" title="Chính sách bảo mật ">Chính sách bảo mật </a>
                                    </li>

                                    <li class="li_menu">
                                        <a class="link" href="{{route('support.payment')}}" title="Chính sách thanh toán ">Chính sách thanh toán </a>
                                    </li>

                                    <li class="li_menu">
                                        <a class="link" href="{{route('support.shippingPolicy')}}" title="Chính sách vận chuyển">Chính sách vận chuyển</a>
                                    </li>

                                    <li class="li_menu">
                                        <a class="link" href="{{route('support.returnPolicy')}}" title="Chính sách đổi trả">Chính sách đổi trả</a>
                                    </li>
                                    <li class="li_menu">
                                        <a class="link" href="{{route('support.termsOfService')}}" title="Điều khoản dịch vụ ">Điều khoản dịch vụ </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-block footer-click">

                                <h3 class="footer-title title-menu">ĐĂNG KÝ NHẬN TIN</h3>
                                <div class="form_register ">
                                    <div class="custom-input-group mb-3 form_newsletter form_newsletter_customer">
                                        <form accept-charset='UTF-8' action='/account/contact' class='contact-form'
                                            method='post'>
                                            <input name='form_type' type='hidden' value='customer'>
                                            <input name='utf8' type='hidden' value='✓'>
                                            <div class="input-group">
                                                <input type="hidden" id="newsletter-tags" name="contact[tags]"
                                                    value="khách hàng tiềm năng, bản tin" />
                                                <input class="form-control input-group-field "
                                                    aria-label="Địa chỉ Email" type="email"
                                                    placeholder="Nhập địa chỉ email" id="newsletter-email"
                                                    name="contact[email]"
                                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required
                                                    autocomplete="off">
                                                <div class="input-group-btn btn-action">
                                                    <button class="h-100 btn text-white button_subscribe subscribe"
                                                        type="submit" aria-label="Đăng ký nhận tin"
                                                        name="subscribe">Đăng
                                                        ký</button>
                                                </div>

                                            </div>
                                            <div class="sitebox-recaptcha hidden">
                                                This site is protected by reCAPTCHA and the Google
                                                <a href="https://policies.google.com/privacy" target="_blank"
                                                    rel="noreferrer">Privacy Policy</a>
                                                and <a href="https://policies.google.com/terms" target="_blank"
                                                    rel="noreferrer">Terms of Service</a> apply.
                                            </div>

                                            <input id='f597b7cce09b420899aad1925bb56159' name='g-recaptcha-response'
                                                type='hidden'><noscript
                                                src='https://www.google.com/recaptcha/api.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-'></noscript><noscript>grecaptcha.ready(function()
                                                {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-',
                                                {action: 'submit'}).then(function(token)
                                                {document.getElementById('f597b7cce09b420899aad1925bb56159').value
                                                = token;});});</noscript>
                                        </form>
                                    </div>

                                </div>

                                <ul class="follow_option d-flex flex-wrap align-items-center list-unstyled mt-2">

                                    <li>
                                        <a class="facebook link" href="https://www.facebook.com/eunoiabyan.kids/"
                                            target="_blank" title="Theo dõi Facebook EUNOIA">
                                            <img src="{{ asset('assets/theme/200000685745/1001041408/14/facebook6704.png?v=44') }}"
                                                loading="lazy" width="32" height="32" alt="facebook" />
                                        </a>
                                    </li>

                                    <li>
                                        <a class="instgram link" href="https://www.instagram.com/eunoiabyan/"
                                            target="_blank" title="Theo dõi instgram EUNOIA">
                                            <img src="{{ asset('assets/theme/200000685745/1001041408/14/instagram6704.png?v=44') }}"
                                                loading="lazy" width="32" height="32" alt="instgram" />
                                        </a>
                                    </li>

                                    <li>
                                        <a class="youtube link" href="https://www.youtube.com/@eunoiabyanofficial4371"
                                            target="_blank" title="Theo dõi youtube EUNOIA">
                                            <img src="{{ asset('assets/theme/200000685745/1001041408/14/youtube6704.png?v=44') }}"
                                                loading="lazy" width="36" height="36" alt="youtube" />
                                        </a>
                                    </li>

                                    <li>
                                        <a class="tiktok link" href="https://www.tiktok.com/@eunoiabyan"
                                            target="_blank" title="Theo dõi tiktok EUNOIA">
                                            <img src="{{ asset('assets/theme/200000685745/1001041408/14/tiktok6704.png?v=44') }}"
                                                loading="lazy" width="36" height="36" alt="tiktok" />
                                        </a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-4">
                        </div>
                        <div class="col-lg-4">

                            <div class="trustbadge-wrap mt-4">
                                <div class="product-trustbadge d-flex flex-wrap align-items-center">
                                    <a href="/collections/all" target="_blank" title="Phương thức thanh toán">
                                        <img class=" img-fluid" loading="lazy"
                                            src="{{ asset('assets/theme/200000685745/1001041408/14/footer_trustbadge6704.png?v=44') }}"
                                            alt="Phương thức thanh toán" width height>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<svg style="display:none">
    <defs>
        <symbol class="icon " id="icon-cart" viewBox="0 0 16 19" fill="none">
            <path
                d="M15.594 16.39a.703.703 0 0 1-.703.704h-.704v.703a.703.703 0 0 1-1.406 0v-.703h-.703a.703.703 0 0 1 0-1.407h.703v-.703a.703.703 0 1 1 1.406 0v.704h.704c.388 0 .703.314.703.703Zm0-10.968v6.75a.703.703 0 0 1-1.406 0V6.125H12.78v2.11a.703.703 0 1 1-1.406 0v-2.11h-6.75v2.11a.703.703 0 1 1-1.406 0v-2.11H1.813v10.969h7.453a.703.703 0 1 1 0 1.406H1.109a.703.703 0 0 1-.703-.703V5.422c0-.388.315-.703.703-.703h2.143A4.788 4.788 0 0 1 8 .5a4.788 4.788 0 0 1 4.748 4.219h2.143c.388 0 .703.315.703.703Zm-4.266-.703A3.38 3.38 0 0 0 8 1.906 3.38 3.38 0 0 0 4.672 4.72h6.656Z"
                fill="currentColor" />
        </symbol>
    </defs>
</svg>
<svg style="display:none">
    <defs>
        <symbol id="icon-minus" class="icon icon-minus" viewBox="0 0 16 2" fill="none">
            <path
                d="M15.375 0H0.625C0.279813 0 0 0.279813 0 0.625C0 0.970187 0.279813 1.25 0.625 1.25H15.375C15.7202 1.25 16 0.970187 16 0.625C16 0.279813 15.7202 0 15.375 0Z"
                fill="#8C9196" />
        </symbol>
    </defs>
</svg>

<svg style="display:none">
    <defs>
        <symbol id="icon-plus" class="icon icon-plus" viewBox="0 0 93.562 93.562" fill="none">
            <path
                d="M87.952,41.17l-36.386,0.11V5.61c0-3.108-2.502-5.61-5.61-5.61c-3.107,0-5.61,2.502-5.61,5.61l0.11,35.561H5.61   c-3.108,0-5.61,2.502-5.61,5.61c0,3.107,2.502,5.609,5.61,5.609h34.791v35.562c0,3.106,2.502,5.61,5.61,5.61   c3.108,0,5.61-2.504,5.61-5.61V52.391h36.331c3.108,0,5.61-2.504,5.61-5.61C93.562,43.672,91.032,41.17,87.952,41.17z"
                fill="currentColor" />
        </symbol>
    </defs>
</svg>

<svg style="display:none">
    <defs>
        <symbol class="icon icon-arrow" id="icon-arrow" viewBox="0 0 490.8 490.8" fill="none" aria-hidden="true"
            focusable="false" role="presentation">
            <path
                d="M135.685 3.128c-4.237-4.093-10.99-3.975-15.083.262-3.992 4.134-3.992 10.687 0 14.82l227.115 227.136-227.136 227.115c-4.237 4.093-4.354 10.845-.262 15.083 4.093 4.237 10.845 4.354 15.083.262.089-.086.176-.173.262-.262l234.667-234.667c4.164-4.165 4.164-10.917 0-15.083L135.685 3.128z"
                fill="currentColor" />
            <path
                d="M128.133 490.68a10.667 10.667 0 01-7.552-18.219l227.136-227.115L120.581 18.232c-4.171-4.171-4.171-10.933 0-15.104 4.171-4.171 10.933-4.171 15.104 0l234.667 234.667c4.164 4.165 4.164 10.917 0 15.083L135.685 487.544a10.663 10.663 0 01-7.552 3.136z" />
        </symbol>
    </defs>
</svg>

<svg style="display:none">
    <defs>
        <symbol id="icon-search" class="icon icon-search" viewBox="0 0 192.904 192.904">
            <path
                d="M190.707 180.101l-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 005.303 2.197 7.498 7.498 0 005.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z" />
        </symbol>
    </defs>
</svg>

<svg style="display:none">
    <defs>
        <symbol id="icon-play" viewBox="0 0 18 18" fill="currentColor">
            <path
                d="M15.562 8.1L3.87.225c-.818-.562-1.87 0-1.87.9v15.75c0 .9 1.052 1.462 1.87.9L15.563 9.9c.584-.45.584-1.35 0-1.8z"
                fill="currentColor"></path>
        </symbol>
    </defs>
</svg>

<svg style="display:none">
    <defs>
        <symbol id="icon-user" fill="currentColor" stroke="currentColor" viewBox="0 0 448 512">
            <path
                d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z">
            </path>
        </symbol>
    </defs>
</svg>

<svg style="display:none">
    <defs>
        <symbol id="icon-star" viewBox="0 0 26 28">
            <path
                d="M26 10.109c0 0.281-0.203 0.547-0.406 0.75l-5.672 5.531 1.344 7.812c0.016 0.109 0.016 0.203 0.016 0.313 0 0.406-0.187 0.781-0.641 0.781-0.219 0-0.438-0.078-0.625-0.187l-7.016-3.687-7.016 3.687c-0.203 0.109-0.406 0.187-0.625 0.187-0.453 0-0.656-0.375-0.656-0.781 0-0.109 0.016-0.203 0.031-0.313l1.344-7.812-5.688-5.531c-0.187-0.203-0.391-0.469-0.391-0.75 0-0.469 0.484-0.656 0.875-0.719l7.844-1.141 3.516-7.109c0.141-0.297 0.406-0.641 0.766-0.641s0.625 0.344 0.766 0.641l3.516 7.109 7.844 1.141c0.375 0.063 0.875 0.25 0.875 0.719z">
            </path>
        </symbol>
    </defs>
</svg>

<svg style="display:none">
    <defs>
        <symbol id="icon-star-half" viewBox="0 0 26 28">
            <path
                d="M18.531 14.953l4.016-3.906-6.594-0.969-0.469-0.938-2.484-5.031v15.047l0.922 0.484 4.969 2.625-0.938-5.547-0.187-1.031zM25.594 10.859l-5.672 5.531 1.344 7.812c0.109 0.688-0.141 1.094-0.625 1.094-0.172 0-0.391-0.063-0.625-0.187l-7.016-3.687-7.016 3.687c-0.234 0.125-0.453 0.187-0.625 0.187-0.484 0-0.734-0.406-0.625-1.094l1.344-7.812-5.688-5.531c-0.672-0.672-0.453-1.328 0.484-1.469l7.844-1.141 3.516-7.109c0.203-0.422 0.484-0.641 0.766-0.641v0c0.281 0 0.547 0.219 0.766 0.641l3.516 7.109 7.844 1.141c0.938 0.141 1.156 0.797 0.469 1.469z">
            </path>
        </symbol>
    </defs>
</svg>

<svg style="display:none">
    <defs>
        <symbol id="icon-instagram" viewBox="0 0 448 512">
            <path fill="currentColor"
                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
            </path>
        </symbol>
    </defs>
</svg>

<svg style="display:none">
    <defs>
        <symbol id="icon-share" width="14" height="16" fill="none" viewBox="0 0 14 16">
            <path fill="#000"
                d="M11 10c.8333 0 1.5417.2917 2.125.875.5833.5833.875 1.2917.875 2.125 0 .8333-.2917 1.5417-.875 2.125-.5833.5833-1.2917.875-2.125.875-.8333 0-1.54167-.2917-2.125-.875C8.29167 14.5417 8 13.8333 8 13c0-.3125.04167-.6146.125-.9062l-3.0625-1.9063C4.47917 10.7292 3.79167 11 3 11c-.83333 0-1.54167-.2917-2.125-.875C.291667 9.54167 0 8.83333 0 8c0-.83333.291667-1.54167.875-2.125C1.45833 5.29167 2.16667 5 3 5c.79167 0 1.47917.27083 2.0625.8125L8.125 3.90625C8.04167 3.61458 8 3.3125 8 3c0-.83333.29167-1.54167.875-2.125C9.45833.291667 10.1667 0 11 0c.8333 0 1.5417.291667 2.125.875C13.7083 1.45833 14 2.16667 14 3c0 .83333-.2917 1.54167-.875 2.125C12.5417 5.70833 11.8333 6 11 6c-.7917 0-1.47917-.27083-2.0625-.8125L5.875 7.09375c.1875.60417.1875 1.20833 0 1.8125l3.0625 1.90625C9.52083 10.2708 10.2083 10 11 10zm1.0625-8.0625C11.7708 1.64583 11.4167 1.5 11 1.5c-.4167 0-.7708.14583-1.0625.4375C9.64583 2.22917 9.5 2.58333 9.5 3s.14583.77083.4375 1.0625c.2917.29167.6458.4375 1.0625.4375.4167 0 .7708-.14583 1.0625-.4375.2917-.29167.4375-.64583.4375-1.0625s-.1458-.77083-.4375-1.0625zm-10.125 7.125C2.22917 9.35417 2.58333 9.5 3 9.5s.77083-.14583 1.0625-.4375S4.5 8.41667 4.5 8s-.14583-.77083-.4375-1.0625S3.41667 6.5 3 6.5s-.77083.14583-1.0625.4375S1.5 7.58333 1.5 8s.14583.77083.4375 1.0625zm8 5c.2917.2917.6458.4375 1.0625.4375.4167 0 .7708-.1458 1.0625-.4375.2917-.2917.4375-.6458.4375-1.0625 0-.4167-.1458-.7708-.4375-1.0625-.2917-.2917-.6458-.4375-1.0625-.4375-.4167 0-.7708.1458-1.0625.4375C9.64583 12.2292 9.5 12.5833 9.5 13c0 .4167.14583.7708.4375 1.0625z">
            </path>
        </symbol>
    </defs>
</svg>

<svg style="display:none">
    <defs>
        <symbol id="icon-compare" fill="currentColor" viewBox="0 0 384 512">
            <path fill="currentColor"
                d="M164 384h-44V48a16 16 0 0 0-16-16H88a16 16 0 0 0-16 16v336H28a12 12 0 0 0-8.73 20.24l68 72a12 12 0 0 0 17.44 0l68-72A12 12 0 0 0 164 384zm200.72-276.24l-68-72a12 12 0 0 0-17.44 0l-68 72A12 12 0 0 0 220 128h44v336a16 16 0 0 0 16 16h16a16 16 0 0 0 16-16V128h44a12 12 0 0 0 8.72-20.24z"
                class></path>
        </symbol>
    </defs>
</svg>
<svg style="display:none">
    <defs>
        <symbol id="icon-calendar" viewBox="0 0 25.881 25.88">
            <path id="Exclusão_32" data-name="Exclusão 32"
                d="M6150.835-12351.079h-17.79a4.047,4.047,0,0,1-4.043-4.042v-15.771a4.048,4.048,0,0,1,4.044-4.043h1.264v-1.012a1.014,1.014,0,0,1,1.011-1.012,1.014,1.014,0,0,1,1.012,1.011v1.013h4.547v-1.012a1.013,1.013,0,0,1,1.011-1.012,1.014,1.014,0,0,1,1.012,1.011v1.013h4.6v-1.012a1.012,1.012,0,0,1,1.011-1.011,1.013,1.013,0,0,1,1.012,1.011v1.012h1.315a4.048,4.048,0,0,1,4.044,4.042v15.773A4.05,4.05,0,0,1,6150.835-12351.079Zm-2.107-7.4a.974.974,0,0,0-.973.975.973.973,0,0,0,.973.969.971.971,0,0,0,.969-.97.972.972,0,0,0-.275-.707.969.969,0,0,0-.7-.293Zm-4.379,0a.973.973,0,0,0-.97.974.968.968,0,0,0,.283.687.97.97,0,0,0,.687.285.973.973,0,0,0,.973-.973.971.971,0,0,0-.276-.707.972.972,0,0,0-.7-.293Zm-4.76,0a.974.974,0,0,0-.973.975.973.973,0,0,0,.973.97.973.973,0,0,0,.97-.972.973.973,0,0,0-.274-.705.967.967,0,0,0-.7-.294Zm-4.38,0a.975.975,0,0,0-.973.975.973.973,0,0,0,.973.97.973.973,0,0,0,.974-.971.971.971,0,0,0-.275-.705.967.967,0,0,0-.7-.295Zm13.52-4.374a.972.972,0,0,0-.974.968.974.974,0,0,0,.973.974.972.972,0,0,0,.97-.973.962.962,0,0,0-.263-.727.971.971,0,0,0-.711-.3Zm-4.379,0a.97.97,0,0,0-.97.967.972.972,0,0,0,.97.976.976.976,0,0,0,.972-.975.969.969,0,0,0-.265-.726.971.971,0,0,0-.711-.3Zm-4.76,0a.972.972,0,0,0-.973.968.975.975,0,0,0,.973.974.973.973,0,0,0,.97-.974.969.969,0,0,0-.263-.725.969.969,0,0,0-.708-.306Zm-4.38,0a.972.972,0,0,0-.973.968.975.975,0,0,0,.973.974.971.971,0,0,0,.973-.973.969.969,0,0,0-.263-.726.97.97,0,0,0-.708-.306Zm13.519-4.381a.974.974,0,0,0-.973.973.974.974,0,0,0,.973.975.973.973,0,0,0,.969-.975.971.971,0,0,0-.28-.7.977.977,0,0,0-.695-.289Zm-4.379,0a.972.972,0,0,0-.969.973.971.971,0,0,0,.969.974.972.972,0,0,0,.973-.974.971.971,0,0,0-.281-.7.976.976,0,0,0-.7-.288Zm-4.76,0a.974.974,0,0,0-.973.973.975.975,0,0,0,.973.975.974.974,0,0,0,.971-.975.972.972,0,0,0-.279-.7.972.972,0,0,0-.693-.29Zm-4.379,0a.973.973,0,0,0-.973.973.974.974,0,0,0,.973.975.974.974,0,0,0,.973-.975.971.971,0,0,0-.28-.7.974.974,0,0,0-.693-.29Z"
                transform="translate(-6129.002 12376.958)" fill="currentColor" />
        </symbol>

    </defs>
</svg>
<svg style="display:none">
    <defs>
        <symbol id="icon-clock" viewBox="0 0 28.145 28.163">
            <path id="União_49" data-name="União 49"
                d="M.4,10.781C1.864,4.681,6.792.6,13.385.021a13.276,13.276,0,0,1,3.692.308,15.16,15.16,0,0,1-.346,1.885,6.058,6.058,0,0,1-.682-.091,11.8,11.8,0,0,0-8.537,1.8,12.137,12.137,0,0,0,2.17,21.469,12.674,12.674,0,0,0,8.151.22,12.314,12.314,0,0,0,7.538-7.061c.1-.247.2-.4.24-.393s.453.165.909.347l.834.33-.11.287c-.063.158-.17.421-.236.595a14.559,14.559,0,0,1-4.145,5.371c-.165.132-.311.252-.327.271A15.556,15.556,0,0,1,18.8,27.353a14.471,14.471,0,0,1-4.74.81A14.076,14.076,0,0,1,.4,10.781ZM7.339,21.3a10.008,10.008,0,0,1,5.523-17c7.88-1.28,13.973,7.071,10.462,14.338a9.93,9.93,0,0,1-9.006,5.538A9.771,9.771,0,0,1,7.339,21.3ZM14.046,8.479c-.507.236-.5.158-.5,3.431v2.909l.685.748c1.019,1.114,3.893,3.928,4.066,3.979a.841.841,0,0,0,.992-1c-.04-.1-.973-1.093-2.079-2.2l-2-2.015-.024-2.677c-.02-2.9-.02-2.881-.4-3.126a.711.711,0,0,0-.4-.135.8.8,0,0,0-.34.086Zm12.037,7.6a2.655,2.655,0,0,1,.039-.543c.036-.287.063-.964.063-1.5,0-.747.02-.989.075-.992s.417-.039.838-.078.823-.084.89-.087c.24-.017.2,3.349-.039,3.5h-.018a18.522,18.522,0,0,1-1.848-.3Zm-.575-6.049c0-.013-.066-.165-.133-.346a13.968,13.968,0,0,0-.929-1.9c-.186-.311-.256-.481-.217-.521s.39-.278.787-.55.736-.494.74-.5a16.158,16.158,0,0,1,1.479,2.831l.123.333-.158.064c-.338.131-1.646.582-1.691.582ZM21.856,4.787a14.121,14.121,0,0,0-1.72-1.2l-.547-.323.351-.656c.189-.362.39-.744.444-.851.123-.235.079-.245.646.082,1.385.8,2.437,1.626,2.287,1.811-.248.315-1.161,1.331-1.193,1.331a1.381,1.381,0,0,1-.268-.194Z"
                transform="translate(-0.006 0)" fill="currentColor" />
        </symbol>
    </defs>
</svg>
<div class="addThis_listSharing ">

    <a href="#" id="back-to-top" class="backtop back-to-top d-flex align-items-center justify-content-center"
        title="Lên đầu trang">

        <svg class="icon" style="transform: rotate(-90deg)">
            <use xlink:href="#icon-arrow" />
        </svg>
    </a>

    <ul class="addThis_listing list-unstyled  d-none d-sm-block">

        <li class="addThis_item">
            <a class="addThis_item--icon" href="tel:0868601369" rel="nofollow">
                <img class="img-fluid"
                    src="http://theme.hstatic.net/200000685745/1001041408/14/addthis-phone.svg?v=44"
                    alt="Gọi ngay cho chúng tôi" loading="lazy" width="44" height="44" />
                <span class="tooltip-text">Gọi ngay cho chúng tôi</span>
            </a>
        </li>
        <li class="addThis_item">
            <a class="addThis_item--icon" href="https://zalo.me/1527872632788362305" target="_blank" rel="nofollow">
                <img class="img-fluid" src="http://theme.hstatic.net/200000685745/1001041408/14/addthis-zalo.svg?v=44"
                    alt="Gọi ngay cho chúng tôi" loading="lazy" width="44" height="44" />
                <span class="tooltip-text">Chat với chúng tôi qua Zalo</span>
            </a>
        </li>

    </ul>
</div>
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>



<script>
    window.EGASmartSearchConfigs = {
        // color
        colorBg: '#ffffff',
        colorBgHover: '#f7f7f7',
        colorItemTextTitle: '#251f1f',
        colorItemTextPrice: '#f3283d',
        colorItemTextCompareAtPrice: '#666666',
        colorItemTextViewAll: '#000000',
        colorHeaderText: '#a0a0a0',
        navBg: '#f7f7f7',
        navTextColor: '#a0a0a0',
        navBgActive: '#a0a0a0',
        navTextColorActive: '#fff',
        colorLoading: '#d82e4d',
        // general
        searchAccuracy: 'title',
        searchWidth: '450px',
        searchHeight: '400px',
        // product
        productSortby: 'default',
        productLimit: 7,
        // article
        displayArticle: false,
        articleLimit: 3,
        moneyFormat: "0",
        shopDomain: '',
        textHeaderSectionTitle: 'Kết quả tìm kiếm cho ',
        textProductSectionTitle: 'Sản phẩm ',
        textArticleSectionTitle: 'Bài viết',
        notFound: 'Không tìm thấy kết quả ',
        textFrom: '',
        textShowAll: 'Xem thêm sản phẩm có chứa '
    }
