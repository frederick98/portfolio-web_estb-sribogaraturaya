@extends('layouts.app')

@section('title', 'PT Sarimelati Kencana | Building Pizza Hut in Indonesia')

@section('metaTitle')
  <meta name="title" content="PT Sarimelati Kencana | Building Pizza Hut in Indonesia">
@endsection

@section('metaKeyword')
  <meta name="keywords" content="sriboga, pizza hut, marugame udon">
@endsection

@section('metaDesc')
  <meta name="description" content="PT Sarimelati Kencana Tbk is the franchisee of the Pizza Hut brand 
  in Indonesia. Explore how the company builds the largest pizza brand in the country.">
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
                    <img alt="Pizza Hut website banner" src="{{asset('images/assets/companies/smk-banner.webp')}}">
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
                        <h1 class="section-2-title">
                            Building the Pizza Hut Brand in Indonesia
                        </h1>
                    </div>
                    <div class="row">
                        <p class="section-2-text">
                            PT Sarimelati Kencana, Tbk was established in 1987 and 
                            is engaged in the consumer foodservice industry, 
                            particularly pizza and pasta.
                        </p>
                        </br>
                        <p class="section-2-text">
                            In 2004, the company was acquired by Sriboga Group 
                            and since then, Pizza Hut Indonesia has successfully 
                            expanded into 516 outlets with an average of 6 million 
                            customers served monthly.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="https://sarimelatikencana.co.id/" role="button" target="_blank" rel="noopener noreferrer" class="btn btn-lg btn-block btn-round btn-warning section-2-btn">Visit Website</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 smk-about-right">
                    <div class="row">
                        <img class="section-2-img" alt="Pizza Hut restaurant" src="{{asset('images/assets/companies/smk-s2-img.webp')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="section-2 smk-about">
        <div class="" style="margin-top: 100px; margin-bottom: 150px;">
            <div class="row">
                <div class="col-md-6">
                    <div class="smk-about-left">
                        <p class="smk-about-left-title">
                            Building the Pizza Hut Brand in Indonesia
                        </p>
                        <p class="smk-about-left-desc">
                            PT Sarimelati Kencana, Tbk was established in 1987 and 
                            is engaged in the consumer foodservice industry, 
                            particularly pizza and pasta.
                        </p>
                        <p class="smk-about-left-desc">
                            In 2004, the company was acquired by Sriboga Group 
                            and since then, Pizza Hut Indonesia has successfully 
                            expanded into 516 outlets with an average of 6 million 
                            customers served monthly.
                        </p>
                        <a href="https://sarimelatikencana.co.id/" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1"> Visit Website</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="smk-about-right">
                        <div class="smk-about-right-img">
                            <img src="{{asset('source/images/Rectangle919.png')}}">
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
                        <img class="section-3-img" alt="Innovative menu from Pizza Hut" src="{{asset('images/assets/companies/smk-s3-img.webp')}}">
                    </div>
                </div>
                <div class="col-md-5 align-self-center smk-about-right">
                    <div class="row">
                        <h2 class="section-3-title">Introducing American Pizza to the Locals</h2>
                    </div>
                    <div class="row">
                        <p class="section-3-text">
                            Pizza Hut Indonesia offers a range of innovative menus. 
                            From the popular original pan pizza to the iconic cheesy 
                            bites, the brand has innovated its recipe to suit the local 
                            taste buds.
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
                            <img src="{{asset('source/images/Rectangle99.png')}}">
                            
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="smk-about-right">
                        <div class="smk-about-right-bio">
                            <p class="smk-about-right-title">
                                Introducing American Pizza to the Locals
                            </p>
                            <p class="smk-about-right-desc">
                                Pizza Hut Indonesia offers a range of innovative menus. 
                                From the popular original pan pizza to the iconic cheesy 
                                bites, the brand has innovated its recipe to suit the local 
                                taste buds.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Section 4 3rd About -->
    <section class="section-4">
        <div class="smk-about">
            <div class="row">
                <div class="col-md-6 align-self-center smk-about-left">
                    <div class="row">
                        <h2 class="section-4-title">Penetrating the Online Delivery Services</h2>
                    </div>
                    <div class="row">
                        <p class="section-4-text">
                            In 2007, PT Sarimelati Kencana, Tbk decided to 
                            expand its expertise into the delivery service, widely 
                            known as PHD. Today, there are a total of 257 outlets 
                            across the archipelago, earning the brand a total of 
                            86.6% market share in the country.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 smk-about-right">
                    <div class="row">
                        <img class="section-4-img" alt="Pizza Hut delivery service" src="{{asset('images/assets/companies/smk-s4-img.webp')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="section-4">
        <div class="smk-about">
            <div class="row">
                <div class="col md-6">
                    <div class="smk-about-left">
                        <p class="smk-about-left-title">
                            Penetrating the Online Delivery Services
                        </p>
                        <p class="smk-about-left-desc">
                            In 2007, PT Sarimelati Kencana, Tbk decided to 
                            expand its expertise into the delivery service, widely 
                            known as PHD. Today, there are a total of 257 outlets 
                            across the archipelago, earning the brand a total of 
                            86.6% market share in the country.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="smk-about-right">
                        <div class="smk-about-right-img">
                            <img src="{{asset('source/images/Rectangle 100.png')}}">
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
                            <img class="section-5-img" alt="Pizza Hut locations in Indonesia" src="{{asset('images/assets/companies/smk-s5-img.webp')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="section-5-text">Click <a class="section-5-link" href="https://www.pizzahut.co.id/stores" target="_blank" rel="noopener noreferrer">here</a> for more detailed locations.</p>
                </div>
            </div> 
        </div>
    </section>
    <!-- <section class="section-5">
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
                        <img src="{{asset('source/images/Rectangle 105 (1).png')}}">
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
                        <img class="section-6-img" alt="Pizza Hut pasta" src="{{asset('images/assets/companies/smk-s6-img1.webp')}}">
                    </div>
                    <div class="col-md-4">
                        <img class="section-6-img" alt="Pizza Hut ice cream" src="{{asset('images/assets/companies/smk-s6-img2.webp')}}">
                    </div>
                    <div class="col-md-4">
                        <img class="section-6-img" alt="Delicious pizza from Pizza Hut" src="{{asset('images/assets/companies/smk-s6-img3.webp')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="section-6">
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
                        <img src="{{asset('source/images/Rectangle 106.png')}}">
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('source/images/Rectangle 107.png')}}">
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('source/images/Rectangle 108.png')}}">
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