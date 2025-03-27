@extends('layouts.app')

@section('title', 'Investors')

@section('metaTitle')
  <meta name="title" content="Investor Sriboga Raturaya">
@endsection

@section('metaKeyword')
  <meta name="keywords" content="sriboga, pizza hut, marugame udon">
@endsection

@section('metaDesc')
  <meta name="description" content="A proven expert in the food industry, PT Sriboga Raturaya is 
  committed to turning visions into reality. Reach us for your business end-to-end solution.">
@endsection

@section('css') 
	<link rel="stylesheet" href="{{asset('css/investors.css')}}" media="screen" />  
	<link rel="stylesheet" href="{{asset('source/Investors.css')}}" media="screen" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
@endsection

@section('content')
    <!-- Section 1 -->
    <section class="section-1">
        <div class="sub-1 my-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-1-left">
                        <img alt="Pizza Hut's happy customers" src="{{asset('images/assets/investors/s1-img.webp')}}">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="section-1-right">
                        <h1 class="my-4 section-1-title">An End-to-end Expertise</h1>
                        <p class="section-1-text">With extensive experience in food logistics, operations, 
                            human resources, and restaurant management, PT Sriboga 
                            Raturaya ensures its presence in the end-to-end business. 
                            Hopefully, we will always deliver the best products to the 
                            customers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-2">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <h2 class="section-1-title">Realizing Visions</h2>
                </div>
                <div class="col-md-6">
                    <p class="section-1-text">
                        We believe that visions are to be explored. Throughout our 
                        business processes, we have committed to turning our 
                        visions into reality. We aim for the best, providing 
                        exceptional products and services for the people.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <div class="row my-2">
                        <h2 class="section-2-title">Establishing a Strong MSME Community</h2>
                    </div>
                    <div class="row">
                        <p class="section-2-text">Through Sriboga UKM Center, a division 
                            under PT Sriboga Flour Mill, we empower local MSMEs and guide them to become 
                            successful business owners. 
                        </p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="section-2-right invt-3-right">
                        <div class="section-2-right-content invt-3-right-content">
                            <div class="row responsive">
                                <div class="col-md-12">
                                    <img alt="Pizza Hut's happy customers" src="{{asset('images/assets/investors/s2-img1.webp')}}">
                                </div>
                                <div class="col-md-12">
                                    <img alt="MSME owners join a training session with UKM Sriboga " src="{{asset('images/assets/investors/s2-img2.webp')}}">
                                </div>
                                <div class="col-md-12">
                                    <img alt="UKM Sriboga making bakpia" src="{{asset('images/assets/investors/s2-img3.webp')}}">
                                </div>
                                <div class="col-md-12">
                                    <img alt="UKM Sriboga holds a training session" src="{{asset('images/assets/investors/s2-img4.webp')}}">
                                </div>
                                <div class="col-md-12">
                                    <img alt="Roti Dua Putra as one of UKM Sriboga partners" src="{{asset('images/assets/investors/s2-img5.webp')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3 -->
    <section class="section-3">
      <div class="container-fluid section3">
            <div class="row justify-content-start">
                <div class="col-md-5">
                    <h2 class="section-3-title">Let’s Explore Your Ideas Together</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6" style="padding: 0;">
                    <img class="img-fluid" src="{{asset('images/assets/contactUs/Rectangle 60.webp')}}" alt="" data-image-width="703" data-image-height="648"/>
                </div>
            <div class="col-md-6 align-self-center">
                <form method="POST" class="" style="padding: 15px">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nameField" class="labelField">Name</label>
                        <input onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" type="text" id="nameField" name="name" class="textField border-top-0 border-left-0 border-right-0" required/>
                    </div>
                    <div class="form-group">
                        <label for="phoneField" class="labelField">Phone</label>
                        <input onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" type="phone" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" id="phoneField" name="phone" class="textField border-top-0 border-left-0 border-right-0" required/>
                    </div>
                    <div class="form-group">
                        <label for="emailField" class="labelField">Email</label>
                        <input onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" type="email" id="emailField" name="email" class="textField border-top-0 border-left-0 border-right-0" required/>
                    </div>
                    <div class="form-group">
                        <label for="messageField" class="labelField">Message</label>
                        <textarea onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" rows="3" cols="50" id="messageField" name="message" class="textField border-top-0 border-left-0 border-right-0" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-block btn-lg" style="border-radius:30px; width:50%;">Submit</button>
                    </div>
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                        Thankyou for sending inquiries, we'll reach you soon.
                        </div>
                    @endif
                    @if(Session::has('fail'))
                        <div class="alert alert-danger" role="alert">
                        Unable to send messages, please check fields and try again.
                        </div>
                    @endif
                    <input type="hidden" value="" name="recaptchaResponse" />
                </form>
            </div>
        </div>
    </section>
    <!-- <section class="u-clearfix u-white u-section-8" id="sec-d298">
        <div class="cntc-header col-md-6">
            <p>Let’s Explore Your Ideas Together</p>
        </div>
        <div class="row" style="margin-bottom: 15%;">
            <div class="col-md-6">
                <div class="cnct-content-left">
                    <img src="{{asset('source/images/Rectangle 60.png')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="cnct-content-right">
                    <form action="{{asset('source/scripts/form-d298.php')}}" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;" source="customphp" name="form">
                        <div class="u-form-group u-form-name u-label-top u-form-group-1">
                        <label for="name-6797" class="u-label u-text-custom-color-1 u-label-1">Name</label>
                        <input type="text" id="name-6797" name="name" class="u-border-1 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-1" required="">
                        </div>
                        <div class="u-form-group u-form-phone u-label-top u-form-group-2">
                        <label for="phone-2b9e" class="u-label u-text-custom-color-1 u-label-2">Phone</label>
                        <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" id="phone-2b9e" name="phone" class="u-border-1 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-2" required="">
                        </div>
                        <div class="u-form-email u-form-group u-label-top u-form-group-3">
                        <label for="email-6797" class="u-label u-text-custom-color-1 u-label-3">Email</label>
                        <input type="email" id="email-6797" name="email" class="u-border-1 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-3" required="">
                        </div>
                        <div class="u-form-group u-form-message u-label-top u-form-group-4">
                        <label for="message-6797" class="u-label u-text-custom-color-1 u-label-4">Message</label>
                        <textarea rows="3" cols="50" id="message-6797" name="message" class="u-border-1 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required=""></textarea>
                        </div>
                        <div class="u-align-left u-form-group u-form-submit u-label-top u-form-group-5">
                        <a href="#" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-30 u-text-white u-btn-1">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
@endsection


@section('script')
    <script class="u-script" type="text/javascript" src="{{asset('source/nicepage.js')}}" defer=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>
        // Remove Class at Mobile
        jQuery(document).ready(function($) {
            var alterClass = function() {
                var ww = document.body.clientWidth;
                if (ww < 480) {
                $('.sub-1').removeClass('my-5');
                $('.section-1-title').addClass('my-4');
                } 
            };
            $(window).resize(function(){
                alterClass();
            });
            //Fire it when the page first loads:
            alterClass();
        });
        $(document).ready(function () {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
            $('.responsive').slick({
                arrows: true,
                prevArrow:"<img class='a-left inv-slide prev slick-prev' src='../images/assets/layout/btn-prev.png'>",
                nextArrow:"<img class='a-right inv-slide next slick-next' src='../images/assets/layout/btn-next.png'>",
                dots: false,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }}, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }}, {
                    breakpoint: 480,
                    settings: {
                        autoplay:true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows:false,
                        autoplaySpeed: 0,
                        speed: 2500,
                        infinite: true,
                        cssEase: 'linear',
                    }}
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
                }
            );
        });
    </script>
@endsection