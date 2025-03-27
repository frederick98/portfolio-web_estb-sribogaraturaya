@extends('layouts.app')

@section('title', 'PT Mulia Inti Pangan | Pioneer in Non-MSG Food Seasoning')

@section('metaTitle')
  <meta name="title" content="PT Mulia Inti Pangan | Pioneer in Non-MSG Food Seasoning">
@endsection

@section('metaKeyword')
  <meta name="keywords" content="sriboga, pizza hut, marugame udon">
@endsection

@section('metaDesc')
  <meta name="description" content="​PT Mulia Inti Pangan is a food ingredient manufacturer specializing 
  in the formulation and production of premix ingredients and heat-treated flour.">
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
                    <img alt="Cherry Muffin made from Easymix flour" src="{{asset('images/assets/companies/banner_pg.webp')}}">
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
                        <h2 class="section-2-title">Developing More Enjoyable Products for Your Customers</h2>
                    </div>
                    <div class="row">
                        <p class="section-2-text">
                            PT Mulia Inti Pangan was established in 2019 
                            and is a food ingredient manufacturer 
                            specializing in the formulation and production 
                            of premix ingredients and heat-treated flour.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="https://easymix.co.id/id" role="button" target="_blank" rel="noopener noreferrer" class="btn btn-lg btn-block btn-round btn-warning section-2-btn">Visit Website</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 smk-about-right">
                    <div class="row">
                        <img class="section-2-img" alt="Women researcher develops premix flour formula" src="{{asset('images/assets/companies/mip-s2-img.webp')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3 2nd About -->
    <section class="section-3"> 
        <div class="smk-about">
            <div class="row justify-content-evenly">
                <div class="col-md-5 smk-about-left">
                    <div class="row">
                        <img class="section-3-img" alt="Indonesian farmer sifting wheat grain" src="{{asset('images/assets/companies/mip-s3-img.webp')}}">
                    </div>
                </div>
                <div class="col-md-5 align-self-center smk-about-right">
                    <div class="row">
                        <h1 class="section-3-title">The Pioneer in Non-MSG Food Seasoning</h1>
                    </div>
                    <div class="row">
                        <p class="section-3-text">
                            PT Mulia Inti Pangan provides continuous innovation 
                            concepts and best-suited technical support. The company 
                            also commits to long-term research in natural ingredients 
                            to deliver sustainable and value-added food ingredients 
                            solutions that provide healthier lifestyles to the customers, 
                            as well as keeping the whole business operation sustainable and environmentally friendly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5 Product's Line-Up -->
    <section class="section-5">
        <div class="locations">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <img style="width: 100%" src="{{asset('images/assets/layout/hline-yellow.png')}}" >
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="section-5-title">Products Line-up</h2>
                </div>
            </div>  
            <div class="row justify-content-center">
                <div class="smk-location-img">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="section-5-img" alt="Products Line-up from PT Mulia Inti Pangan" src="{{asset('images/assets/companies/Products_3-09.webp')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="section-5-text">Click <a class="section-5-link" href="https://easymix.co.id/id#resep" target="_blank" rel="noopener noreferrer">here</a> for more product details.</p>
                </div>
            </div> 
        </div>
    </section>

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
                        <img class="section-6-img" alt="Waffle made from Easymix flour " src="{{asset('images/assets/companies/mip-s6-img1.webp')}}">
                    </div>
                    <div class="col-md-4">
                        <img class="section-6-img" alt="Ingen Tempura made from Easymix flour" src="{{asset('images/assets/companies/mip-s6-img2.webp')}}">
                    </div>
                    <div class="col-md-4">
                        <img class="section-6-img" alt="Strawberry Pancakes made from Easymix flour" src="{{asset('images/assets/companies/mip-s6-img3.webp')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script class="u-script" type="text/javascript" src="{{asset('source/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('source/nicepage.js')}}" defer=""></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection