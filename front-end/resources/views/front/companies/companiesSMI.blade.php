@extends('layouts.app')

@section('title', 'Our Companies - Sriboga Marugame Indonesia')

@section('metaTitle')
  <meta name="title" content="Our Companies - Sriboga Marugame Indonesia">
@endsection

@section('metaKeyword')
  <meta name="keywords" content="sriboga, pizza hut, marugame udon">
@endsection

@section('metaDesc')
  <meta name="description" content="Aims to be the best Udon & Tempura Restaurant in Indonesia, 
  PT Sriboga Marugame Indonesia delivers authentic Japanese flavours through Marugame Udon.;">
@endsection

@section('css') 
	<link rel="stylesheet" href="{{asset('source/Companies_SMK.css')}}" media="screen" />  
	<link rel="stylesheet" href="{{asset('css/companies.css')}}" media="screen" />  
@endsection

@section('content')
    <!-- Banner -->
    <section>
        <div class="companies-header">
            <div class="row">
                <div class="col-md-12">
                    <img alt="Product of Marugame Udon" src="{{asset('images/assets/companies/smi-banner.webp')}}">
                </div>
            </div>
        </div>
    </section>

    <!-- Profile Carousel -->
    @include('layouts.carouselProfile')

    <!-- Section 2 1st About -->
    <section class="section-2">
        <div class="smk-about">
            <div class="row">
                <div class="col-md-6 align-self-center smk-about-left">
                    <div class="row">
                        <h2 class="section-2-title">Providing a First-class Appetite</h2>
                    </div>
                    <div class="row">
                        <p class="section-2-text">
                            PT Sriboga Marugame Indonesia was established in 2012 and opened its first 
                            store in Mall Taman Anggrek on February 14th, 2013. The company aims to be 
                            the best Udon & Tempura Restaurant in Indonesia.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="https://www.marugameudon.co.id" role="button" target="_blank" rel="noopener noreferrer" class="btn btn-lg btn-block btn-round btn-warning section-2-btn">Visit Website</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 smk-about-right">
                    <div class="row">
                        <img class="section-2-img" alt="Marugame Udon chef is preparing udon" src="{{asset('images/assets/companies/smi-s2-img.webp')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section>
        <div class="smk-about" style="margin-top: 100px; margin-bottom: 150px;">
            <div class="row">
                <div class="col-md-6">
                    <div class="smk-about-left">
                        <p class="smk-about-left-title">
                            Providing a First-class Appetite
                        </p>
                        <p class="smk-about-left-desc">
                            PT Sriboga Marugame Indonesia was 
                            established in 2012 and opened its first store in 
                            Mall Taman Anggrek on February 14th, 2013. 
                            The company aims to be the best Udon & 
                            Tempura Restaurant in Indonesia.
                        </p>
                        <a href="https://www.marugameudon.co.id" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1"> Visit Website</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="smk-about-right">
                        <div class="smk-about-right-img">
                            <img src="{{asset('source/images/Rectangle 91.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Section 3 2nd About -->
    <section class="section-3"> 
        <div class="smk-about">
            <div class="row justify-content-evenly">
                <div class="col-md-5 smk-about-left">
                    <div class="row">
                        <img class="section-3-img" alt="Close-up shot of Niku Udon from Marugame Udon" src="{{asset('images/assets/companies/smi-s3-img.webp')}}">
                    </div>
                </div>
                <div class="col-md-5 align-self-center smk-about-right">
                    <div class="row">
                        <h1 class="section-3-title">Committed in Delivering Authentic Japanese Flavours</h1>
                    </div>
                    <div class="row">
                        <p class="section-3-text">
                            Marugame Indonesia have been serving its 500,000+ 
                            monthly customers original Japanese recipes made 
                            with high-quality, natural ingredients. 
                            It has also acquired MUI’s Halal certification since 
                            2015 to ensure that everyone can taste the best Udon 
                            & Tempura in Indonesia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section> 
        <div class="smk-about" style="background-color: #307430;">
            <div class="row">
                <div class="col-md-6">
                        <div class="smk-about-left-img">
                            <img src="{{asset('source/images/Rectangle 999.png')}}">
                            
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="smk-about-right">
                        <div class="smk-about-right-bio">
                            <p class="smk-about-right-title">
                                Committed in Delivering Authentic Japanese Flavours
                            </p>
                            <p class="smk-about-right-desc">
                                Marugame Indonesia have been serving its 500,000+ 
                                monthly customers original Japanese recipes made 
                                with high-quality, natural ingredients. 
                                It has also acquired MUI’s Halal certification since 
                                2015 to ensure that everyone can taste the best Udon 
                                & Tempura in Indonesia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Section 5 Locations -->
    <section class="section-5">
        <div class="locations">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <img style="width: 100%" src="{{asset('images/assets/layout/hline-yellow.png')}}" >
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="section-5-title">Locations</h2>
                </div>
            </div>  
            <div class="row justify-content-center">
                <div class="smk-location-img">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="section-5-img" alt="Marugame Udon Branches in Indonesia" src="{{asset('images/assets/companies/smi-s5-img.webp')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="section-5-text">Click <a class="section-5-link" href="https://www.marugameudon.co.id/store-locations" target="_blank" rel="noopener noreferrer">here</a> for more detailed locations.</p>
                </div>
            </div> 
        </div>
    </section>
    <!-- <section> 
        <div class="smk-location" style="margin-top: 100px; margin-bottom: 30px">
            <div class="smk-location-header-logo col-md-6">
                <img src="{{asset('source/images/Line 10.png')}}" >
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="smk-location-title"> 
                    Locations
                    </p>
                </div>
            </div>
            
            <div class="smk-location-img">
                <div class="row" style="max-width: 1300px;
                margin: auto;">
                    <div class="col-md-12">
                        <img src="{{asset('source/images/Rectangle 133.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Section 6 Gallery -->
    <section class="section-6">
        <div class="gallery">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <img style="width: 100%" src="{{asset('images/assets/layout/hline-yellow.png')}}" >
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="section-6-title">Gallery</h2>
                </div>
            </div> 
            <div class="row section-6-img">
                <div class="row">
                    <div class="col-md-4">
                        <img class="section-6-img" alt="Various Products of Marugame Udon" src="{{asset('images/assets/companies/smi-s6-img1.webp')}}">
                    </div>
                    <div class="col-md-4">
                        <img class="section-6-img" alt="Niku Udon from Marugame Udon" src="{{asset('images/assets/companies/smi-s6-img2.webp')}}">
                    </div>
                    <div class="col-md-4">
                        <img class="section-6-img" alt="Nori Tempura from Marugame Udon" src="{{asset('images/assets/companies/smi-s6-img3.webp')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section> 
        <div class="smk-location" style="margin-top: 100px; margin-bottom: 30px">
            <div class="smk-location-header-logo col-md-6">
                <img src="{{asset('source/images/Line 10.png')}}" >
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="smk-location-title"> 
                    Gallery
                    </p>
                </div>
            </div>

            <div class="smk-galery-img">
                <div class="row" style="max-width: 1300px;
                margin: auto;">
                    <div class="col-md-4">
                        <img src="{{asset('source/images/Rectangle 109.png')}}">
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('source/images/Rectangle 110.png')}}">
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('source/images/Rectangle 111.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </section> -->

@endsection

@section('script')
    <script class="u-script" type="text/javascript" src="{{asset('source/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('source/nicepage.js')}}" defer=""></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection 