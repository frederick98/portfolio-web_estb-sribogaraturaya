@extends('layouts.app')

@section('title', 'PT Sriboga Flour Mill | Leading the Flour Business')

@section('metaTitle')
    <meta name="title" content="PT Sriboga Flour Mill | Leading the Flour Business">
@endsection

@section('metaKeyword')
    <meta name="keywords" content="sriboga, flour mill, sriboga flour mill">
@endsection

@section('metaDesc')
    <meta name="description" content="PT Sriboga Flour Mill (SFM) has been producing the highest 
    flour quality and strives to become the best wheat flour producer through constant innovations.">
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
                    <img alt="PT Sriboga Raturaya Mill factory" src="{{asset('images/assets/companies/sfm-banner.webp')}}">
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
                        <h1 class="section-2-title">Leading the Flour Business</h1>
                    </div>
                    <div class="row">
                        <p class="section-2-text">
                            PT Sriboga Flour Mill (SFM) has been producing the 
                            highest flour quality for Indonesians since 1998. Its 
                            factory covers a total of 41,835m2 at the Port of Tanjung 
                            Mas, Semarang, Central Java, producing 1,850 tonnes of 
                            wheat daily through machineries which have been 
                            equipped with the latest technology in the industry.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="https://www.sriboga-flourmill.com" role="button" target="_blank" rel="noopener noreferrer" class="btn btn-lg btn-block btn-round btn-warning section-2-btn">Visit Website</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 smk-about-right">
                    <div class="row">
                        <img class="section-2-img" alt="T Sriboga Flour Mill's truck that distribute Sriboga flour throughout Indonesia" src="{{asset('images/assets/companies/sfm-s2-img.webp')}}">
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
                            Leading the Flour Business
                        </p>
                        <p class="smk-about-left-desc">
                            PT Sriboga Flour Mill (SFM) has been producing the 
                            highest flour quality for Indonesians since 1998. Its 
                            factory covers a total of 41,835m2 at the Port of Tanjung 
                            Mas, Semarang, Central Java, producing 1,850 tonnes of 
                            wheat daily through machineries which have been 
                            equipped with the latest technology in the industry.
                        </p>
                        <a href="https://www.sriboga-flourmill.com" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1"> Visit Website</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="smk-about-right">
                        <div class="smk-about-right-img">
                            <img src="{{asset('source/images/Rectangle 910.png')}}">
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
                        <img class="section-3-img" alt="Udon Workshop for small business owner" src="{{asset('images/assets/companies/sfm-s3-img.webp')}}">
                    </div>
                </div>
                <div class="col-md-5 align-self-center smk-about-right">
                    <div class="row">
                        <h2 class="section-3-title">Being Part of the Community</h2>
                    </div>
                    <div class="row">
                        <p class="section-3-text">
                            SFM products are trusted by a wide-range of 
                            businesses, from large food manufacturers to medium 
                            and small-sized local businesses in your neighborhood. 
                            SFM strives to become a wheat flour producer that 
                            constantly innovates to suit the customers' desires, 
                            needs, and requirements.
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
                            <img src="{{asset('source/images/Rectangle 997.png')}}">
                            
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="smk-about-right">
                        <div class="smk-about-right-bio">
                            <p class="smk-about-right-title">
                                Being Part of the Community
                            </p>
                            <p class="smk-about-right-desc">
                                SFM products are trusted by a wide-range of 
                                businesses, from large food manufacturers to medium 
                                and small-sized local businesses in your neighborhood. 
                                SFM strives to become a wheat flour producer that 
                                constantly innovates to suit the customers' desires, 
                                needs, and requirements.
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
                        <h2 class="section-4-title">Internationally Recognized</h2>
                    </div>
                    <div class="row">
                        <p class="section-4-text">
                            Since its first year, SFM has been recognized by 
                            international organizations for their innovation, 
                            quality and business development. One of its 
                            achievement was being recognized as the first and 
                            only flour producer in Southeast Asia to apply the 
                            latest technology for heat-treated flour.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 smk-about-right">
                    <div class="row">
                        <img class="section-4-img" alt="PT Sriboga Flour Mill factory workers" src="{{asset('images/assets/companies/sfm-s4-img.webp')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section>
        <div class="smk-about">
            <div class="row">
                <div class="col md-6">
                    <div class="smk-about-left">
                        <p class="smk-about-left-title">
                            Internationally Recognized
                        </p>
                        <p class="smk-about-left-desc">
                            Since its first year, SFM has been recognized by 
                            international organizations for their innovation, 
                            quality and business development. One of its 
                            achievement was being recognized as the first and 
                            only flour producer in Southeast Asia to apply the 
                            latest technology for heat-treated flour.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="smk-about-right">
                        <div class="smk-about-right-img">
                            <img src="{{asset('source/images/Rectangle 100 (1).png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Section 5 Products Line Up -->
    <section class="section-5">
        <div class="locations">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <img style="width: 100%" src="{{asset('images/assets/layout/hline-yellow.png')}}" >
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="section-5-title">Products Line-Up</h2>
                </div>
            </div>  
            <div class="row justify-content-center">
                <div class="smk-location-img">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="section-5-img" alt="Product Line-up of PT Sriboga Flour Mill" src="{{asset('images/assets/companies/sfm-s5-img.webp')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="section-5-text">Click <a class="section-5-link" href="https://www.sriboga-flourmill.com/product" target="_blank" rel="noopener noreferrer">here</a> for more product details.</p>
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
                        Products Line-up
                    </p>
                </div>
            </div>
            
            <div class="smk-location-img">
                <div class="row" style="max-width: 1300px;
                margin: auto;">
                    <div class="col-md-12">
                        <img src="{{asset('source/images/Rectangle 105 (2).png')}}">
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
                        <img class="section-6-img" alt="PT Sriboga Flour Mill factory in Semarang" src="{{asset('images/assets/companies/sfm-s6-img1.webp')}}">
                    </div>
                    <div class="col-md-4">
                        <img class="section-6-img" alt="PT Sriboga Flour Mill factory workers checking tools" src="{{asset('images/assets/companies/sfm-s6-img2.webp')}}">
                    </div>
                    <div class="col-md-4">
                        <img class="section-6-img" alt="Sriboga flour being brought from PT Sriboga Flour Mill" src="{{asset('images/assets/companies/sfm-s6-img3.webp')}}">
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
                        <img src="{{asset('source/images/Rectangle 116.png')}}">
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('source/images/Rectangle 117.png')}}">
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('source/images/Rectangle 118.png')}}">
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