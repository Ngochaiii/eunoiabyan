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
                            <span>Liên hệ</span>
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="page_contact section ">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="left-contact px-lg-2">
                        <h1 class="title_page mb-3">EUNOIA BY AN</h1>
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
                        <div id="pagelogin" class="pt-3 mt-3 border-top">
                            <h2 class="title-head">Liên hệ với chúng tôi</h2>
                            <form accept-charset='UTF-8' action='https://eunoiabyan.com/contact' class='contact-form'
                                method='post'>
                                <input name='form_type' type='hidden' value='contact'>
                                <input name='utf8' type='hidden' value='✓'>

                                <div class="form-signup clearfix">
                                    <div class="row group_contact">
                                        <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input placeholder="Họ tên*" type="text"
                                                class="form-control  form-control-lg" required value name="contact[Name]">
                                        </fieldset>
                                        <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input placeholder="Email*" type="email"
                                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required id="email1"
                                                class="form-control form-control-lg" value name="contact[email]">
                                        </fieldset>
                                        <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input placeholder="Số điện thoại*" type="text"
                                                class="form-control  form-control-lg" required pattern="\d+"
                                                name="contact[Phone]" value>
                                        </fieldset>
                                        <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <textarea placeholder="Nhập nội dung*" name="contact[body]" id="comment"
                                                class="form-control content-area form-control-lg" rows="5" Required></textarea>
                                        </fieldset>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit" class="btn btn-main--primary btn-block btn-lienhe">Gửi
                                                liên hệ của
                                                bạn</button>
                                        </div>
                                    </div>
                                </div>

                                
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="iFrameMap px-2 mt-3 mt-lg-0">
                        <div id="contact_map" class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5289.915993891256!2d105.84089136616338!3d21.018043589634765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab8dc55e7bb7%3A0xa8fbb6160678e9de!2zNTZBIFAuIFRy4bqnbiBOaMOibiBUw7RuZywgTmd1eeG7hW4gRHUsIEhhaSBCw6AgVHLGsG5nLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1681444783424!5m2!1svi!2s"
                                width="600" height="450" style="border:0;" allowfullscreen loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
