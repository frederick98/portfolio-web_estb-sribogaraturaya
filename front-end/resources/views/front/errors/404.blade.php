@extends('layouts.app')

@section('title', 'Oops!')

@section('metaTitle')
  <meta name="title" content="404 Sriboga Raturaya">
@endsection

@section('metaKeyword')
  <meta name="keywords" content="url not found">
@endsection

@section('metaDesc')
  <meta name="description" content="​PT Sriboga Raturaya was founded in 1995 and since then, it has become the pioneer in producing  high quality flour. We have strategically built our business by expanding into the F&amp;B service franchise management, ensuring an end-to-end business operation that will be ready to serve the ever-growing middle class market in Indonesia.&nbsp;">
@endsection

@section('css') 
	<link rel="stylesheet" href="{{asset('css/errors.css')}}" media="screen" />  
	<!-- <link rel="stylesheet" href="{{asset('source/nicepage.css')}}" media="screen" />
	<link rel="stylesheet" href="{{asset('source/Our-Company.css')}}" media="screen" />   -->
@endsection

    
@section('content')
    <section class="section-1">
        <div class="errors">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="row my-2">
                        <div class="container">
                          <img class="img section-1-img" src="{{asset('images/assets/errors/404.png')}}" alt="Error Image" >
                        </div>
                    </div>
                    <div class="row my-3">
                        <h1 class="section-1-title">Sorry!</h1>
                    </div>
                    <div class="row my-3">
                        <p class="section-1-text">
                            We were sure we had something here for you to see.<br>
                            Hopefully you can come back anytime soon to see what we’ve done with this space.<br><br> 
                            Keep in touch!
                        </p>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <a href="/" role="button" style="" class="btn btn-lg btn-block btn-round btn-success section-1-btn">Back to Homepage</a>
                        </div>
                        <div class="col-md-6">
                            <a href="/contact-us" role="button" style="" class="btn btn-lg btn-block btn-round btn-warning section-1-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="u-clearfix u-section-1" id="sec-7a55">
        <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
            <img class="u-image u-image-default u-image-1" src="{{asset('source/images/404.png')}}" alt="" data-image-width="459" data-image-height="238">
            <h1 class="u-custom-font u-text u-text-custom-color-1 u-text-default u-text-font u-text-1"> Sorry!</h1>
            <h5 class="u-align-center u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-2"> We were sure we had something here for you to see.<br>Hopefully you can come back anytime soon to see what we’ve done with this space.<br>
                <br> Keep in touch!
            </h5>
            <a href="/" data-page-id="2661301293" class="u-align-center u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-custom-color-2 u-radius-50 u-text-hover-white u-btn-1">Back to Homepage</a>
            <a href="/contact-us" data-page-id="95633866" class="u-align-center u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-50 u-text-hover-white u-text-white u-btn-2">Contact Us</a>
      </div>
    </section> -->
@endsection


@section('script')
    <script class="u-script" type="text/javascript" src="{{asset('source/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('source/nicepage.js')}}" defer=""></script>
@endsection('script') 