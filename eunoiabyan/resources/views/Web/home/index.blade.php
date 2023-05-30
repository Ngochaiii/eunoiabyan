@extends('layouts.web.default')

@section('content')
    @include('Web.home.blocks.main_slide')
    @include('Web.home.blocks.gallery')
    @include('Web.home.blocks.video')
    @include('Web.home.blocks.hot_products')
    @include('Web.home.blocks.shortcut_blog')
    @include('Web.home.blocks.instagram_gallery')
    @include('Web.home.blocks.news')
@endsection
