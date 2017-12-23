
@extends('app_layout.layout_blank')

@section('title', '|Home')

@section('content')

    @include('home_pages.slider')
    @include('home_pages.abouts')
    @include('home_pages.features')
    @include('home_pages.portfolio')
    @include('home_pages.our_package')
    @include('home_pages.mobileapps')

@endsection

@section('scrollup')

    @include('home_pages.scrollup')

@endsection
