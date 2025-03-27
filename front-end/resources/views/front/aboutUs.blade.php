@extends('layouts.app')

@section('title', 'About Us')

@section('metaTitle')
  <meta name="title" content="About Sriboga Raturaya">
@endsection

@section('metaKeyword')
  <meta name="keywords" content="sriboga, pizza hut, marugame udon">
@endsection

@section('metaDesc')
  <meta name="description" content="As a leading player in Indonesia's food sector, 
  PT Sriboga Raturaya is committed to serving Indonesia's growing middle class. Know more about 
  our stories here.">
@endsection

@section('css') 
	<link rel="stylesheet" href="{{asset('css/aboutUs.css')}}" media="screen" />  
	<link rel="stylesheet" href="{{asset('source/nicepage.css')}}" media="screen" />
	<link rel="stylesheet" href="{{asset('source/About-Us.css')}}" media="screen" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>  
@endsection


@section('content')
    <!-- Section 1 -->
    <section class="u-align-center u-clearfix u-white u-section-1 section-1" id="">
        <div class="container-fluid" style="margin: 2% 0 0 0; padding: 0 5% 0 5%;">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-1-title" style="">Prosperity Through Quality Foods</h1>
                </div>
                <div class="col-lg-6">
                    <p class="section-1-text">As a leading player in Indonesia's food sector established in 1994, we are committed to serving the country's growing middle class through expanding our position in Indonesia's dynamic upstream and downstream food industry.</p>
                </div>
            </div>
        </div>
        <div class="brShape1"></div>
        <div class="embed-class">
            <div class="row video-slider">
                @foreach($banner as $items)
                    <div class="col-md-12">
                        <iframe class="embed-responsive-item" src="{{ $items->url }}" title="{{$items->name}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section 2 Our Mission -->
    <section class="u-align-center u-clearfix u-section-2" id="">
        <div class="container-fluid flex-row section2">
            <div class="row justify-content-center section2Title">
                <h2 class="section2Title">Our Missions</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col col-4 align-items-center">
                    {{-- <div class="container-fluid">
                        <div class="row justify-content-center">
                            <img style="width: 150px; height: 130px;" src="{{asset('source/images/Rectangle 75.png')}}">
                        </div>
                        <div class="row justify-content-center">
                            <p class="u-text u-text-custom-color-1 u-text-2 "> Be the food company of choice in services, ingredients, and logistics.</p>
                        </div>
                    </div> --}}
                    <div class="row r-om-1">
                        <div class="om-1">
                            <img alt="PT Sriboga Raturaya become the food company of choice in services, ingredients, and logistics" src="{{asset('images/assets/about/s2-icon1.png')}}">
                        </div>
                        <p class="section2Text">{{$about->mission1_txt}}</p>
                        <!-- <p class="section2Text">Be the food company of choice in services, ingredients, and logistics.</p> -->
                    </div>
                </div>
                <div class="col col-4 align-items-center">
                    {{-- <div class="container-fluid">
                        <div class="row justify-content-center">
                            <img style="width: 150px; height: 130px;" src="{{asset('source/images/Rectangle 93.png')}}">
                        </div>
                        <div class="row justify-content-center">
                            <p class="u-text u-text-custom-color-1 u-text-3 "> Provide halal, hygiene, safe food products.</p>
                        </div>
                    </div> --}}
                    <div class="row r-om-1">
                        <div class="om-1">
                            <img alt="PT Sriboga Raturaya provides halal, hygiene, safe food products" src="{{asset('images/assets/about/s2-icon2.png')}}">
                        </div>
                        <p class="section2Text">{{$about->mission2_txt}}</p>
                        <!-- <p class="section2Text">Provide halal, hygiene, safe food products.</p> -->
                     </div>
                </div>
                <div class="col col-4 align-items-center">
                    {{-- <div class="container-fluid">
                        <div class="row justify-content-center">
                            <img style="width: 150px; height: 130px;" src="{{asset('source/images/Rectangle 94.png')}}">
                        </div>
                        <div class="row justify-content-center">
                            <p class="u-text u-text-custom-color-1 u-text-4 "> That loves and is loved by the community where we belong.</p>
                        </div>
                    </div> --}}
                    <div class="row r-om-1">
                        <div class="om-1">
                            <img alt="PT Sriboga Raturaya is loved by the community" src="{{asset('images/assets/about/s2-icon3.png')}}">
                        </div>
                        <p class="section2Text">{{$about->mission3_txt}}</p>
                        <!-- <p class="section2Text">That loves and is loved by the community where we belong.</p> -->
                     </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Section 3 Our Values -->
    <section class="u-align-center u-clearfix u-section-3 section3" id="">
        <div class="row justify-content-center">
            <div class="col-lg-6" style="text-align: left">
                <img style="width:100%" alt="Sriboga Flour" src="{{asset('images/assets/about/s3-img.webp')}}" class="img-fluid "/>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="row justify-content-center section3Title">
                    <h2 class="section3Title">Our Values</h2>
                </div>
                <div class="row content-section3">
                    <div class="col-md-4">
                        <div class="row justify-content-left img-section3">
                            <img class="img-fluid" alt="PT Sriboga Raturaya valued Integrity & Reliability" style="width: 150px; height: 130px;" src="{{asset('images/assets/about/s3-icon1.png')}}">
                        </div>
                        <div class="row justify-content-center">
                            <p class="section3Capt">{{$about->vision1_txt}}</p>
                            <!-- <p class="section3Capt"> Integrity & Reliability. </p>-->
                        </div>            
                    </div>
                    <div class="col-md-4">
                        <div class="row justify-content-left img-section3">
                            <img class="img-fluid" alt="PT Sriboga Raturaya is Determined & Committed." style="width: 150px; height: 130px;" src="{{asset('images/assets/about/s3-icon2.png')}}">
                        </div>
                        <div class="row justify-content-center">
                            <p class="section3Capt">{{$about->vision2_txt}}</p>
                            <!-- <p class="section3Capt"> Determined & Committed. </p> -->
                        </div>            
                    </div>
                        <div class="col-md-4">
                            <div class="row justify-content-left img-section3">
                                <img class="img-fluid" alt="PT Sriboga Raturaya will continuously gain Profitable Growth." style="width: 150px; height: 130px;" src="{{asset('images/assets/about/s3-icon3.png')}}">
                            </div>
                            <div class="row justify-content-center">
                                <p class="section3Capt">{{$about->vision3_txt}}</p>
                                <!-- <p class="section3Capt"> Continuous Profitable Growth. </p> -->
                            </div>            
                        </div>
                    </div>
                </div>
                <!-- other icon's alt -->
                <!-- <div class="row content-section3">
                    <div class="col-md-4">
                        <div class="img-section3">
                            <img class="img-fluid" style="width: 150px; height: 150px;" src="{{asset('images/assets/about/s3-icon1.png')}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-section3">
                            <img class="img-fluid" style="width: 150px; height: 150px;" src="{{asset('images/assets/about/s3-icon2.png')}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-section3">
                            <img class="img-fluid" style="width: 150px; height: 150px;" src="{{asset('images/assets/about/s3-icon3.png')}}">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center content-section3">
                    <div class="col-md-4">
                        <p class="section3Capt"> Integrity & Reliability. </p>    
                    </div>  
                    <div class="col-md-4">
                        <p class="section3Capt"> Determined & Committed. </p>    
                    </div>  
                    <div class="col-md-4">
                        <p class="section3Capt"> Continuous Profitable Growth. </p>               
                    </div>
                </div> -->
            </div>
     
        <!-- <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xs u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
                <div class="u-layout" style="">
                    <div class="u-layout-row" style="">
                        <div class="u-align-left u-container-style u-image u-image-contain u-image-round u-layout-cell u-left-cell u-radius-20 u-size-30 u-size-xs-60 u-image-1" src="" data-image-width="710" data-image-height="646">
                            <div class="u-container-layout u-valign-middle u-container-layout-1" src=""></div>
                        </div>
                        <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-white u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                <h2 class="u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-text u-text-custom-color-1 u-text-font u-text-1">Our Values</h2>
                                <div class="u-expanded-width-lg u-expanded-width-xs u-layout-grid u-list u-list-1">
                                    <div class="u-repeater u-repeater-1">
                                        <div class="u-align-left u-container-style u-list-item u-repeater-item">
                                            <div class="u-container-layout u-similar-container u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-3">
                                                <span class="u-icon u-icon-1">
                                                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8c27"></use></svg>
                                                    <svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-8c27" style="enable-background:new 0 0 58 58;"><rect x="1" y="7" style="fill:#C3E1ED;stroke:#E7ECED;stroke-width:2;stroke-miterlimit:10;" width="56" height="44"></rect><circle style="fill:#ED8A19;" cx="16" cy="17.569" r="6.569"></circle><polygon style="fill:#1A9172;" points="56,36.111 55,35 43,24 32.5,35.5 37.983,40.983 42,45 56,45 "></polygon><polygon style="fill:#1A9172;" points="2,49 26,49 21.983,44.983 11.017,34.017 2,41.956 "></polygon><rect x="2" y="45" style="fill:#6B5B4B;" width="54" height="5"></rect><polygon style="fill:#25AE88;" points="37.983,40.983 27.017,30.017 10,45 42,45 "></polygon></svg>
                                                </span>
                                                <p class="u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-2"> Pellentesque diam volutpat commodo sed egestas egestas.</p>
                                            </div>
                                        </div>
                                        <div class="u-align-left u-container-style u-list-item u-repeater-item">
                                            <div class="u-container-layout u-similar-container u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-4">
                                                <span class="u-icon u-icon-2">
                                                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-85b9"></use></svg>
                                                    <svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-85b9" style="enable-background:new 0 0 58 58;"><rect x="1" y="7" style="fill:#C3E1ED;stroke:#E7ECED;stroke-width:2;stroke-miterlimit:10;" width="56" height="44"></rect><circle style="fill:#ED8A19;" cx="16" cy="17.569" r="6.569"></circle><polygon style="fill:#1A9172;" points="56,36.111 55,35 43,24 32.5,35.5 37.983,40.983 42,45 56,45 "></polygon><polygon style="fill:#1A9172;" points="2,49 26,49 21.983,44.983 11.017,34.017 2,41.956 "></polygon><rect x="2" y="45" style="fill:#6B5B4B;" width="54" height="5"></rect><polygon style="fill:#25AE88;" points="37.983,40.983 27.017,30.017 10,45 42,45 "></polygon></svg>
                                                </span>
                                                <p class="u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-3"> Relit dignissim sodales ut eu sem integer vitae.</p>
                                            </div>
                                        </div>
                                        <div class="u-align-left u-container-style u-list-item u-repeater-item">
                                            <div class="u-container-layout u-similar-container u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-5">
                                                <span class="u-icon u-icon-3">
                                                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b7a0"></use></svg>
                                                    <svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-b7a0" style="enable-background:new 0 0 58 58;"><rect x="1" y="7" style="fill:#C3E1ED;stroke:#E7ECED;stroke-width:2;stroke-miterlimit:10;" width="56" height="44"></rect><circle style="fill:#ED8A19;" cx="16" cy="17.569" r="6.569"></circle><polygon style="fill:#1A9172;" points="56,36.111 55,35 43,24 32.5,35.5 37.983,40.983 42,45 56,45 "></polygon><polygon style="fill:#1A9172;" points="2,49 26,49 21.983,44.983 11.017,34.017 2,41.956 "></polygon><rect x="2" y="45" style="fill:#6B5B4B;" width="54" height="5"></rect><polygon style="fill:#25AE88;" points="37.983,40.983 27.017,30.017 10,45 42,45 "></polygon></svg>
                                                </span>
                                                <p class="u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-4"> Nunc consequat interdum varius sit amet mattis vulputate. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>

    <!-- Section 4 Quotes-->
    <section class="section4BG" id="section4">
        <div class="section4BG container-fluid section4">
            <div class="row">
                <div class="col-md-1 justify-content-end">
                    <p class="mb-0 section4QuoteStart">“</p>
                </div>
                <div class="col-md-10 quote-s">
                    <div class="row align-items-center">
                        <p class="mb-0 section4Text">{{$about->quote_txt}}</p>
                        <!-- <p class="mb-0 section4Text">Staying true to the traditional values of Sriboga, we actively engage in collaboration and 
                        dialogue with local communities and work towards sustainable development to support the economy.</p> -->
                    </div>
                    <!-- <div class="row align-items-center">
                        <p class="mb-0 section4TextName">Edni Aswita Basri</p>
                    </div>
                    <div class="row align-items-center">
                        <p class="mb-0 section4TextRole">HR & Corporate Communication Director</p>
                    </div> -->
                </div>
                <div class="col-md-1 justify-content-start">
                    <p class="mb-0 section4QuoteEnd" style="transform: rotate(180deg)">“</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <p class="mb-0 section4TextName">Edni Aswita Basri</p>
                    </div>
                    <div class="row">
                        <p class="mb-0 section4TextRole">HR & Corporate Communication Director</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5 Our Businesses -->
    <section class="section-5" id="sec-f78e">
        <div class="row">
            <div class="section-carousel col-md-12">
                <div class="row">
                    <div class="col-md-5 slider-for-desc align-self-center">
                        @foreach($business as $items)
                            <div class="section-5-text">
                                <h2 class="my-3 section-5-title">{{($items->name)}}</h2>
                                <h2 class="section-5-capt">{{($items->caption)}}</h2>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-7 slider-nav-img">
                        @foreach($business as $items)
                            <div class="section-5-img">
                                <img alt="{{ $items->alt_text }}" class="section-5-img-1" src="{{ env('APP_BACKEND').($items->image) }}"/>
                            </div>
                        @endforeach
                    </div>
                    <!-- <div class="col-md-5 slider-for-desc align-self-center">
                        <div class="section-5-text">
                            <h1 class="my-3 section-5-title">Our Businesses</h1>
                            <h2 class="section-5-capt">We continue to grow with our extensive experience in food logistics, operations, human resources, and restaurant management.</h2>
                        </div>
                        <div class="section-5-text">
                            <h1 class="my-3 section-5-title">Our Businesses</h1>
                            <h2 class="section-5-capt">We continue to grow with our extensive experience in food logistics, operations, human resources, and restaurant management.</h2>
                        </div>
                        <div class="section-5-text">
                            <h1 class="my-3 section-5-title">Our Businesses</h1>
                            <h2 class="section-5-capt">We continue to grow with our extensive experience in food logistics, operations, human resources, and restaurant management.</h2>
                        </div>
                        <div class="section-5-text">
                            <h1 class="my-3 section-5-title">Our Businesses</h1>
                            <h2 class="section-5-capt">We continue to grow with our extensive experience in food logistics, operations, human resources, and restaurant management.</h2>
                        </div>
                        <div class="section-5-text">
                            <h1 class="my-3 section-5-title">Our Businesses</h1>
                            <h2 class="section-5-capt">We continue to grow with our extensive experience in food logistics, operations, human resources, and restaurant management.</h2>
                        </div>
                    </div>
                    <div class="col-md-7 slider-nav-img">
                        <div class="section-5-img">
                            <img class="section-5-img-1" src="{{asset('images/assets/about/s5-img1.webp')}}"/>
                        </div>
                        <div class="section-5-img">
                            <img class="section-5-img-1" src="{{asset('images/assets/about/s5-img2.webp')}}"/>
                        </div>
                        <div class="section-5-img">
                            <img class="section-5-img-1" src="{{asset('images/assets/about/s5-img3.webp')}}"/>
                        </div>
                        <div class="section-5-img">
                            <img class="section-5-img-1" src="{{asset('images/assets/about/s5-img4.webp')}}"/>
                        </div>
                        <div class="section-5-img">
                            <img class="section-5-img-1" src="{{asset('images/assets/about/s5-img5.webp')}}"/>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
            {{-- <div class="col-lg-4 leftCol align-self-center">
                    <div class="row">
                        <h4 class="section5Title">Our Businesses</h4>
                    </div>
                    <div class="row">
                        <p class="section5Caption">We continue to grow with our extensive experience in food logistics, operations, human resources, and restaurant management.</p>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <a href="#"><img src="{{asset('images/assets/about/left.svg')}}"></a>
                        </div>
                        <div class="col-auto">
                            <a href="#"><img src="{{asset('images/assets/about/right.svg')}}"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 rightCol justify-content-end">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 rounded-left carouselImg" src="{{asset('images/assets/about/our-business.png')}}" alt="slide content">
                            </div>
                        </div>
                    </div> --}}
        <!-- <div id="carousel-bd35" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-slider u-slider-1">
            <ol class="u-absolute-hcenter u-carousel-indicators u-hidden u-carousel-indicators-1">
                <li data-u-target="#carousel-bd35" class="u-active u-grey-30" data-u-slide-to="0"></li>
            </ol>
            <div class="u-carousel-inner" role="listbox">
                <div class="u-active u-align-left-xl u-carousel-item u-container-style u-slide">
                    <div class="u-container-layout u-valign-top-lg u-container-layout-1">
                        <img alt="" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-1" data-image-width="657" data-image-height="466" src="{{asset('source/images/Rectangle90-18.png')}}">
                        <h4 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-text u-text-custom-color-1 u-text-font u-text-1"> Our Businesses</h4>
                        <p class="u-align-center-xs u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-2"> PT Sriboga Raturaya continues to grow with its extensive experience in food logistics, operations, human resources and restaurant management. <span style="font-size: 1.25rem;"></span>&nbsp;</p>
                    </div>
                </div>
            </div>
            <a class="u-carousel-control u-carousel-control-prev u-custom-color-2 u-icon-circle u-spacing-9 u-text-white u-carousel-control-1" href="#carousel-bd35" role="button" data-u-slide="prev">
                <span aria-hidden="true">
                    <svg viewBox="0 0 451.847 451.847">
                        <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                            c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                            c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                        </path>
                    </svg>
                </span>
                <span class="sr-only">
                    <svg viewBox="0 0 451.847 451.847">
                        <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                            c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                            c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                        </path>
                    </svg>
                </span>
            </a>
            <a class="u-carousel-control u-carousel-control-next u-custom-color-2 u-icon-circle u-spacing-9 u-text-white u-carousel-control-2" href="#carousel-bd35" role="button" data-u-slide="next">
                <span aria-hidden="true">
                    <svg viewBox="0 0 451.846 451.847">
                        <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                            L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                            c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                        </path>
                    </svg>
                </span>
                <span class="sr-only">
                    <svg viewBox="0 0 451.846 451.847">
                        <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                            L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                            c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                        </path>
                    </svg>
                </span>
            </a>
        </div> -->
    </section>
    <!-- <section class="u-align-center u-clearfix u-valign-middle-xl u-section-5" id="sec-f78e">
        <div id="carousel-bd35" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-slider u-slider-1">
            <ol class="u-absolute-hcenter u-carousel-indicators u-hidden u-carousel-indicators-1">
                <li data-u-target="#carousel-bd35" class="u-active u-grey-30" data-u-slide-to="0"></li>
            </ol>
            <div class="u-carousel-inner" role="listbox">
                <div class="u-active u-align-left-xl u-carousel-item u-container-style u-slide">
                    <div class="u-container-layout u-valign-top-lg u-container-layout-1">
                        <img alt="" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-1" data-image-width="657" data-image-height="466" src="{{asset('source/images/Rectangle90-18.png')}}">
                        <h4 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-text u-text-custom-color-1 u-text-font u-text-1"> Our Businesses</h4>
                        <p class="u-align-center-xs u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-2"> PT Sriboga Raturaya continues to grow with its extensive experience in food logistics, operations, human resources and restaurant management. <span style="font-size: 1.25rem;"></span>&nbsp;</p>
                    </div>
                </div>
            </div>
            <a class="u-carousel-control u-carousel-control-prev u-custom-color-2 u-icon-circle u-spacing-9 u-text-white u-carousel-control-1" href="#carousel-bd35" role="button" data-u-slide="prev">
                <span aria-hidden="true">
                    <svg viewBox="0 0 451.847 451.847">
                        <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                            c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                            c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                        </path>
                    </svg>
                </span>
                <span class="sr-only">
                    <svg viewBox="0 0 451.847 451.847">
                        <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                            c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                            c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                        </path>
                    </svg>
                </span>
            </a>
            <a class="u-carousel-control u-carousel-control-next u-custom-color-2 u-icon-circle u-spacing-9 u-text-white u-carousel-control-2" href="#carousel-bd35" role="button" data-u-slide="next">
                <span aria-hidden="true">
                    <svg viewBox="0 0 451.846 451.847">
                        <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                            L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                            c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                        </path>
                    </svg>
                </span>
                <span class="sr-only">
                    <svg viewBox="0 0 451.846 451.847">
                        <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                            L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                            c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                        </path>
                    </svg>
                </span>
            </a>
        </div>
    </section> -->

    <!-- Section 6 Our Stories -->
    <section class="u-clearfix u-section-6 section-6" id="sec-0b93">
        <div class="our-stories" style="margin-bottom: 30px; margin-top: 50px;">
            <div class="row justify-content-center">
                <div class="companies-header-logo col-md-6">
                    <img style="width: 100%" src="{{asset('images/assets/layout/hline-yellow.png')}}" >
                </div>
            </div>
            <div class="row my-3 justify-content-center">
                <div class="col-md-6">
                    <h2 class="section-6-title">Our Stories</h2>
                </div>
            </div>
        </div>
        <div class=" u-border-1 u-border-custom-color-1 u-expanded-width u-line u-line-horizontal u-line-2"></div>
        <!-- <div class=" u-layout-horizontal u-list u-list-1">
            <div class="slider-for-year" style="display: flex; justify-content: space-evenly;">
                <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-3">
                        <div class="u-custom-color-2 u-custom-item u-shape u-shape-circle u-shape-2"></div>
                        <h2 class="u-align-center u-custom-item u-text u-text-3"> 1995</h2>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-list-item-3">
                    <div class="u-container-layout u-similar-container u-container-layout-4">
                        <div class="u-custom-color-2 u-custom-item u-shape u-shape-circle u-shape-3"></div>
                        <h2 class="u-align-center u-custom-item u-hover-feature u-text u-text-4">1998</h2>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-list-item-4">
                    <div class="u-container-layout u-similar-container u-container-layout-5">
                        <div class="u-custom-color-2 u-custom-item u-shape u-shape-circle u-shape-4"></div>
                        <h2 class="u-align-center u-custom-item u-hover-feature u-text u-text-5">2004</h2>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-list-item-5">
                    <div class="u-container-layout u-similar-container u-container-layout-6">
                        <div class="u-custom-color-2 u-custom-item u-shape u-shape-circle u-shape-5"></div>
                        <h2 class="u-align-center u-custom-item u-hover-feature u-text u-text-6">2012</h2>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-list-item-5">
                    <div class="u-container-layout u-similar-container u-container-layout-6">
                        <div class="u-custom-color-2 u-custom-item u-shape u-shape-circle u-shape-5"></div>
                        <h2 class="u-align-center u-custom-item u-hover-feature u-text u-text-6">2013</h2>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-list-item-5">
                    <div class="u-container-layout u-similar-container u-container-layout-6">
                        <div class="u-custom-color-2 u-custom-item u-shape u-shape-circle u-shape-5"></div>
                        <h2 class="u-align-center u-custom-item u-hover-feature u-text u-text-6">2018</h2>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-list-item-5">
                    <div class="u-container-layout u-similar-container u-container-layout-6">
                        <div class="u-custom-color-2 u-custom-item u-shape u-shape-circle u-shape-5"></div>
                        <h2 class="u-align-center u-custom-item u-hover-feature u-text u-text-6">2019</h2>
                    </div>
                </div>
            </div>
        </div> -->
        <div class=" u-layout-horizontal u-list u-list-1">
            <div class="slider-for-year" style="display: flex; justify-content: space-evenly;">
                @foreach($stories as $items)
                    <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-3">
                            <div class="u-custom-color-2 u-custom-item u-shape u-shape-circle u-shape-2"></div>
                            <h2 class="u-align-center u-custom-item u-text u-text-3">{{($items->year)}}</h2>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="row slider-for-img-stories">
            @foreach($stories as $items)
                <div class="col-md-12">
                    <img alt="{{ $items->alt_text }}" class="u-image u-image-contain u-image-default u-image-1" src="{{ env('APP_BACKEND').($items->image) }}" alt="" data-image-width="657" data-image-height="466" style="border-radius:15px;">
                    <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-font u-text-7">{{($items->name)}}</h2>
                    <p class="desc-stories-p u-align-left u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-8">{{($items->caption)}}</p>
                </div>
            @endforeach
        </div>
        <!-- <div class="row slider-for-img-stories">
            <div class="">
                <img class="u-image u-image-contain u-image-default u-image-1" src="{{asset('images/assets/about/s6-img1.webp')}}" alt="" data-image-width="657" data-image-height="466" style="border-radius:15px;">
                <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-font u-text-7"> The Start of Something Big</h2>
                <p class="u-align-left u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-8"> PT Sriboga Raturaya, a subsidiary of PT Dani Prisma Mitra, founded as a wheat flour mill located in Semarang, Central Java.</p>
            </div>
            <div class="">
                <img class="u-image u-image-contain u-image-default u-image-1" src="{{asset('images/assets/about/s6-img2.webp')}}" alt="" data-image-width="657" data-image-height="466" style="border-radius:15px;">
                <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-font u-text-7"> Thriving for Success</h2>
                <p class="u-align-left u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-8"> PT Sriboga Raturaya commenced commercial operations at the peak of Asian financial crisis.</p>
            </div>
            <div class="">
                <img class="u-image u-image-contain u-image-default u-image-1" src="{{asset('images/assets/about/s6-img3.webp')}}" alt="" data-image-width="657" data-image-height="466" style="border-radius:15px;">
                <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-font u-text-7"> Expanding the Business</h2>
                <p class="u-align-left u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-8"> Acqusition of PT Sarimelati Kencana Tbk, country franchisee of Pizza Hut Restaurants in Indonesia.</p>
            </div>
            <div class="">
                <img class="u-image u-image-contain u-image-default u-image-1" src="{{asset('images/assets/about/s6-img4.webp')}}" alt="" data-image-width="657" data-image-height="466" style="border-radius:15px;">
                <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-font u-text-7"> A Big Year for A Bigger Dream</h2>
                <p class="u-align-left u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-8"> PT Sriboga Raturaya spun off flour business unit under the name of PT Sriboga Flour Mill.
                    PT Sriboga Marugame Indonesia was appointed as Indonesia franchisee of Marugame Udon & Tempura. The flourmill, pizza franchise, and udon franchise are now majority-owned subsidiaries of PT Sriboga Raturaya.</p>
            </div>
            <div class="">
                <img class="u-image u-image-contain u-image-default u-image-1" src="{{asset('images/assets/about/s6-img5.webp')}}" alt="" data-image-width="657" data-image-height="466" style="border-radius:15px;">
                <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-font u-text-7"> A New Partner Joins</h2>
                <p class="u-align-left u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-8"> Mitsubishi Corporation becomes equity investor in PT Sriboga Flour Mill.</p>
            </div>
            <div class="">
                <img class="u-image u-image-contain u-image-default u-image-1" src="{{asset('images/assets/about/s6-img6.webp')}}" alt="" data-image-width="657" data-image-height="466" style="border-radius:15px;">
                <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-font u-text-7"> PT Sarimelati Kencana Going Public</h2>
                <p class="u-align-left u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-8"> PT Sarimelati Kencana Tbk, through Initial Public Offering (IPO) listing on Indonesian Stock Exchange (IDX) offering 30 percent of shares to the public, now becomes PT Sarimelati Kencana Tbk.</p>
            </div>
            <div class="">
                <img class="u-image u-image-contain u-image-default u-image-1" src="{{asset('images/assets/about/s6-img7.webp')}}" alt="" data-image-width="657" data-image-height="466" style="border-radius:15px;">
                <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-font u-text-7"> Establishing PT Mulia Inti Pangan</h2>
                <p class="u-align-left u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-8"> PT Mulia Inti Pangan was established as part of our family, specialising in customized premix flour & food ingredient manufacturer with a set of state-of-the-art technology to produce Heat-treated Flour (HTF).</p>
            </div>
        </div> -->
    </section>
    <!-- <section class="u-clearfix u-section-6 section-6" id="sec-0b93">
        <div class="u-align-center u-container-style u-group u-group-1">
            <div class="u-container-layout">
                <div class="u-border-3 u-border-custom-color-2 u-expanded-width u-line u-line-horizontal u-line-1"></div>
                <h2 class="u-custom-font u-text u-text-custom-color-1 u-text-default u-text-font u-text-1"> Our Stories</h2>
            </div>
        </div>
        <div class=" u-border-1 u-border-custom-color-1 u-expanded-width u-line u-line-horizontal u-line-2"></div>
        <div class=" u-layout-horizontal u-list u-list-1">
            <div class="slider-for-year" style="display: flex; justify-content: space-evenly;">
                <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-2">
                        <div class="u-custom-color-2 u-custom-item u-shape u-shape-circle u-shape-1"></div>
                        <h2 class="u-align-center u-custom-item u-text u-text-2"> 1987</h2>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-container-layout-3">
                        <div class="u-custom-color-2 u-custom-item u-shape u-shape-circle u-shape-2"></div>
                        <h2 class="u-align-center u-custom-item u-text u-text-3"> 1995</h2>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-list-item-3">
                    <div class="u-container-layout u-similar-container u-container-layout-4">
                        <div class="u-custom-color-2 u-custom-item u-shape u-shape-circle u-shape-3"></div>
                        <h2 class="u-align-center u-custom-item u-hover-feature u-text u-text-4">1998</h2>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-list-item-4">
                    <div class="u-container-layout u-similar-container u-container-layout-5">
                        <div class="u-custom-color-2 u-custom-item u-shape u-shape-circle u-shape-4"></div>
                        <h2 class="u-align-center u-custom-item u-hover-feature u-text u-text-5">2004</h2>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-list-item-5">
                    <div class="u-container-layout u-similar-container u-container-layout-6">
                        <div class="u-custom-color-2 u-custom-item u-shape u-shape-circle u-shape-5"></div>
                        <h2 class="u-align-center u-custom-item u-hover-feature u-text u-text-6">2012</h2>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-list-item-5">
                    <div class="u-container-layout u-similar-container u-container-layout-6">
                        <div class="u-custom-color-2 u-custom-item u-shape u-shape-circle u-shape-5"></div>
                        <h2 class="u-align-center u-custom-item u-hover-feature u-text u-text-6">2013</h2>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-list-item-5">
                    <div class="u-container-layout u-similar-container u-container-layout-6">
                        <div class="u-custom-color-2 u-custom-item u-shape u-shape-circle u-shape-5"></div>
                        <h2 class="u-align-center u-custom-item u-hover-feature u-text u-text-6">2018</h2>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-custom-item u-hover-feature u-list-item u-repeater-item u-shape-rectangle u-list-item-5">
                    <div class="u-container-layout u-similar-container u-container-layout-6">
                        <div class="u-custom-color-2 u-custom-item u-shape u-shape-circle u-shape-5"></div>
                        <h2 class="u-align-center u-custom-item u-hover-feature u-text u-text-6">2019</h2>
                    </div>
                </div>
            </div>
            {{-- <a class="u-gallery-nav u-gallery-nav-prev u-icon-rectangle u-opacity u-opacity-70 u-spacing-10 u-text-custom-color-1 u-gallery-nav-1" href="#" role="button">
                <span aria-hidden="true">
                    <svg viewBox="0 0 451.847 451.847">
                        <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                            c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                            c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                        </path>
                    </svg>
                </span>
                <span class="sr-only">
                    <svg viewBox="0 0 451.847 451.847">
                        <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                            c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                            c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                        </path>
                    </svg>
                </span>
            </a>
            <a class="u-gallery-nav u-gallery-nav-next u-icon-rectangle u-opacity u-opacity-70 u-spacing-10 u-text-custom-color-1 u-gallery-nav-2" href="#" role="button">
                <span aria-hidden="true">
                    <svg viewBox="0 0 451.846 451.847">
                        <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                            L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                            c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                        </path>
                    </svg>
                </span>
                <span class="sr-only">
                    <svg viewBox="0 0 451.846 451.847">
                        <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                            L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                            c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                        </path>
                    </svg>
                </span>
            </a> --}}
        </div>

        <div class="row slider-for-img-stories">
            <div class="">
                <img class="u-image u-image-contain u-image-default u-image-1" src="{{asset('source/images/Rectangle 955.png')}}" alt="" data-image-width="657" data-image-height="466">
                <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-font u-text-7"> Founding</h2>
                <p class="u-align-left u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-8"> PT Dani Prisma Mitra was established as a family-owned trading and holding company.</p>
            </div>
            <div class="">
                <img class="u-image u-image-contain u-image-default u-image-1" src="{{asset('source/images/Rectangle 901.png')}}" alt="" data-image-width="657" data-image-height="466">
                <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-font u-text-7"> The Start of Something Big</h2>
                <p class="u-align-left u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-8"> PT Sriboga Raturaya, a subsidiary of PT Dani Prisma Mitra, founded as a wheat flour mill located in Semarang, Central Java.</p>
            </div>
            <div class="">
                <img class="u-image u-image-contain u-image-default u-image-1" src="{{asset('source/images/Rectangle 90 (7).png')}}" alt="" data-image-width="657" data-image-height="466">
                <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-font u-text-7"> Thriving for Success</h2>
                <p class="u-align-left u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-8"> PT Sriboga Raturaya commenced commercial operations at the peak of Asian financial crisis.</p>
            </div>
            <div class="">
                <img class="u-image u-image-contain u-image-default u-image-1" src="{{asset('source/images/Rectangle 90 (1).png')}}" alt="" data-image-width="657" data-image-height="466">
                <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-font u-text-7"> Expanding the Business</h2>
                <p class="u-align-left u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-8"> Acqusition of PT Sarimelati Kencana Tbk, country franchisee of Pizza Hut Restaurants in Indonesia.</p>
            </div>
            <div class="">
                <img class="u-image u-image-contain u-image-default u-image-1" src="{{asset('source/images/Rectangle 90 (2).png')}}" alt="" data-image-width="657" data-image-height="466">
                <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-font u-text-7"> A Big Year for A Bigger Dream</h2>
                <p class="u-align-left u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-8"> PT Sriboga Raturaya spun off flour business unit under the name of PT Sriboga Flour Mill.
                    PT Sriboga Marugame Indonesia was appointed as Indonesia franchisee of Marugame Udon & Tempura. The flourmill, pizza franchise, and udon franchise are now majority-owned subsidiaries of PT Sriboga Raturaya.</p>
            </div>
            <div class="">
                <img class="u-image u-image-contain u-image-default u-image-1" src="{{asset('source/images/Rectangle 90 (3).png')}}" alt="" data-image-width="657" data-image-height="466">
                <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-font u-text-7"> A New Partner Joins</h2>
                <p class="u-align-left u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-8"> Mitsubishi Corporation becomes equity investor in PT Sriboga Flour Mill.</p>
            </div>
            <div class="">
                <img class="u-image u-image-contain u-image-default u-image-1" src="{{asset('source/images/Rectangle 90 (4).png')}}" alt="" data-image-width="657" data-image-height="466">
                <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-font u-text-7"> PT Sarimelati Kencana Going Public</h2>
                <p class="u-align-left u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-8"> PT Sarimelati Kencana Tbk, through Initial Public Offering (IPO) listing on Indonesian Stock Exchange (IDX) offering 30 percent of shares to the public, now becomes PT Sarimelati Kencana Tbk.</p>
            </div>
            <div class="">
                <img class="u-image u-image-contain u-image-default u-image-1" src="{{asset('source/images/Rectangle 26.png')}}" alt="" data-image-width="657" data-image-height="466">
                <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-font u-text-7"> Establishing PT Mulia Inti Pangan</h2>
                <p class="u-align-left u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-8"> PT Mulia Inti Pangan was established as part of our family, specialising in customized premix flour & food ingredient manufacturer with a set of state-of-the-art technology to produce Heat-treated Flour (HTF).</p>
            </div>
        </div>
    </section> -->

    <!-- Section 7 Our Leadership -->
    <section class="u-clearfix u-section-7 section-7" id="sec-2220">
        <div class="our-leadership">
            <div class="row justify-content-center">
                <div class="companies-header-logo col-md-6">
                    <img style="width: 100%" src="{{asset('images/assets/layout/hline-yellow.png')}}" >
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="section-7-title">Our Leadership</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <p class="section-7-text">We are grateful to have this dedicated, focused, and experienced team of experts. Our leaders bring their ideas, knowledge, and experience to embed our values and culture, develop our people, and continue to maintain great results.</p>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <h2 class="section-7-capt">Board of Commisioners</h2>
                    </div>
                </div>
                <div class="row justify-content-evenly">
                    <div class="col-md-4">
                        <div class="row my-5 justify-content-center">
                            <img class="section-7-img" alt="President Commissioner Of PT Sriboga Raturaya, Dr. Anh Dung Do, MBA, Ph.D" src="{{asset('images/assets/about/s7-profile1.png')}}" >
                        </div>
                        <div class="row my-2 justify-content-center">
                            <h2 class="section-7-name">Dr. Anh Dung Do, MBA, Ph.D</h2>
                        </div>
                        <div class="row my-2 justify-content-center">
                            <h2 class="section-7-role">President Commissioner</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row my-5 justify-content-center">
                            <img class="section-7-img" alt="President Commissioner Of PT Sriboga Raturaya, Dr. Ir.Sjoufjan Awal, M.M., M.S.E.E, P.E" src="{{asset('images/assets/about/s7-profile2.png')}}" >
                        </div>
                        <div class="row my-2 justify-content-center">
                            <h2 class="section-7-name">Dr. Ir.Sjoufjan Awal, M.M., M.S.E.E, P.E</h2>
                        </div>
                        <div class="row my-2 justify-content-center">
                            <h2 class="section-7-role">President Commissioner</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <h2 class="section-7-capt">Board of Directors</h2>
                    </div>
                </div>
                <div class="row justify-content-evenly">
                    <div class="col-md-3">
                        <div class="row my-5 justify-content-center">
                            <img class="section-7-img" alt="President Director Of PT Sriboga Raturaya, Alwin Arifin" src="{{asset('images/assets/about/s7-profile3.png')}}" >
                        </div>
                        <div class="row my-2 justify-content-center">
                            <h2 class="section-7-name">Alwin Arifin</h2>
                        </div>
                        <div class="row my-2justify-content-center">
                            <h2 class="section-7-role">President Director</h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row my-5 justify-content-center">
                            <img class="section-7-img" alt="Finance & Administration Director Of PT Sriboga Raturaya, Hadian Iswara" src="{{asset('images/assets/about/s7-profile4.png')}}" >
                        </div>
                        <div class="row my-2 justify-content-center">
                            <h2 class="section-7-name">Hadian Iswara</h2>
                        </div>
                        <div class="row my-2 justify-content-center">
                            <h2 class="section-7-role">Finance & Administration Director</h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row my-5 justify-content-center">
                            <img class="section-7-img" alt="HR & Corporate Communication Director Of PT Sriboga Raturaya, Edni Aswita Basri             " src="{{asset('images/assets/about/s7-profile5.png')}}" >
                        </div>
                        <div class="row my-2 justify-content-center">
                            <h2 class="section-7-name">Edni Aswita Basri</h2>
                        </div>
                        <div class="row my-2 justify-content-center">
                            <h2 class="section-7-role">HR & Corporate Communication Director</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="u-clearfix u-section-7" id="sec-2220">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-align-center u-container-style u-group u-group-1">
                <div class="u-container-layout">
                    <div class="u-border-3 u-border-custom-color-2 u-expanded-width u-line u-line-horizontal u-line-1"></div>
                    <h2 class="u-custom-font u-text u-text-custom-color-1 u-text-default u-text-font u-text-1"> Our Leadership</h2>
                </div>
            </div>
            <h2 class="u-align-center u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-2"> We are grateful to have this dedicated, focused, and experienced team of experts. Our leaders bring their ideas, knowledge, and experience to embed our values and culture, develop our people, and continue to maintain great results.</h2>
            <h2 class="u-custom-font u-text u-text-custom-color-1 u-text-default u-text-font u-text-3"> Board of Comissioners</h2>
            <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-2">
                            <div class="u-image u-image-circle u-preserve-proportions u-image-1" alt="" data-image-width="250" data-image-height="250"></div>
                            <h5 class="u-align-center u-custom-font u-custom-item u-font-lato u-text u-text-custom-color-1 u-text-default u-text-4">
                                <span style="font-size: 1.25rem;">Dr. Anh Dung Do, MBA, Ph.D</span>
                                <br>
                            </h5>
                            <h5 class="u-align-center u-custom-font u-custom-item u-font-lato u-text u-text-custom-color-1 u-text-5"> Comissioner</h5>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-3">
                            <div class="u-image u-image-circle u-preserve-proportions u-image-2" alt="" data-image-width="250" data-image-height="250"></div>
                            <h5 class="u-align-center u-custom-font u-custom-item u-font-lato u-text u-text-custom-color-1 u-text-default u-text-6">Ir. Sjoufjan Awal</h5>
                            <h5 class="u-align-center u-custom-font u-custom-item u-font-lato u-text u-text-custom-color-1 u-text-7"> Comissioner</h5>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="u-custom-font u-text u-text-custom-color-1 u-text-default u-text-font u-text-8"> Board of Directors</h2>
            <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-2">
                <div class="u-repeater u-repeater-2">
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-4">
                            <div class="u-image u-image-circle u-preserve-proportions u-image-3" alt="" data-image-width="250" data-image-height="250"></div>
                            <h5 class="u-align-center u-custom-font u-custom-item u-font-lato u-text u-text-custom-color-1 u-text-default u-text-9">
                                <span style="font-size: 1.25rem;"> Alwin A​rifin</span>
                                <br>
                            </h5>
                            <h5 class="u-align-center u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-10">President Director</h5>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-5">
                            <div class="u-image u-image-circle u-preserve-proportions u-image-4" alt="" data-image-width="250" data-image-height="250"></div>
                            <h5 class="u-align-center u-custom-font u-custom-item u-font-lato u-text u-text-custom-color-1 u-text-default u-text-11"> Hadian Iswara</h5>
                            <h5 class="u-align-center u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-12">Finance & Administration Director</h5>
                        </div>
                    </div>
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-6">
                            <div class="u-image u-image-circle u-preserve-proportions u-image-5" alt="" data-image-width="250" data-image-height="250"></div>
                            <h5 class="u-align-center u-custom-font u-custom-item u-font-lato u-text u-text-custom-color-1 u-text-default u-text-13"> Edni Aswita Basri</h5>
                            <h5 class="u-align-center u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-14"> Director of Human Resources<br/> & Corporate Communication</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Section Achievements -->
    @include('layouts.achievements')
    {{-- <section class="u-clearfix u-section-8 section-8" id="sec-1d65">
        <div class="achievements">
            <div class="row justify-content-center">
                <div class="companies-header-logo col-md-6">
                    <img style="width: 100%" src="{{asset('images/assets/layout/hline-yellow.png')}}" >
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="section-8-title">Achievements</h2>
                </div>
            </div>  
            <div class="container">
                <div class="row justify-content-evenly">
                    <div class="col-md-3">
                        <div class="row my-3 justify-content-center">
                            <img class="section-8-img" src="{{asset('images/assets/about/s8-img1.png')}}" >
                        </div>
                        <div class="row my-1 justify-content-center">
                            <p class="section-8-name">UNICEF</p>
                        </div>
                        <div class="row my-1 justify-content-center" style="padding: 0 5% 0 0;">
                            <p class="section-8-text">Certificate of Appreciation for PT Sriboga Flour Mill</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row my-3 justify-content-center">
                            <img class="section-8-img" src="{{asset('images/assets/about/s8-img2.png')}}" >
                        </div>
                        <div class="row my-1 justify-content-center">
                            <p class="section-8-name">Asia Franchise</p>
                        </div>
                        <div class="row my-1 justify-content-center" style="padding: 0 5% 0 0;">
                            <p class="section-8-text">Franchise of the Year 2019 for PT Sarimelati Kencana Tbk</p>
                        </div>
                    </div>
                </div>
            </div>
       <!-- <div class="acvm-body">
         <div class="container">
           <div class="row">
             <div class="col-md-6">
               <div class="acvm-content">
                 <div class="acvm-content-media col-md-6 offset-md-3">
                   <img src="{{asset('source/images/Rectangle29.png')}}">
                 </div>
                 <div class="acvm-content-desc">
                   <p> UNICEF </p>
                   <p> Certificate of Appreciation </p>
                 </div>
               </div>
             </div>
             <div class="col-md-6">
               <div class="acvm-content">
                 <div class="acvm-content-media col-md-6 offset-md-3">
                   <img src="{{asset('source/images/Rectangle58.png')}}">
                 </div>
                 <div class="acvm-content-desc">
                   <p> Asia Franchise </p>
                   <p> Franchise of the Year 2019 </p>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div> -->
    </section> --}}
@endsection


@section('script')
    <script class="u-script" type="text/javascript" src="{{asset('source/nicepage.js')}}" defer=""></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            // YouTube Video Slider
            $('.video-slider').slick({
                draggable: true,
                arrows: true,
                mobileFirst: true,
                prevArrow:"<img class='a-left embed prev slick-prev' src='../images/assets/layout/btn-prev.png'>",
                nextArrow:"<img class='a-right embed next slick-next' src='../images/assets/layout/btn-next.png'>"
            });

            // Our Business Text-Caption Slider
            $('.slider-for-desc').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav-img'
            });

            // Our Business Img Slider
            $('.slider-nav-img').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                asNavFor: '.slider-for-desc',
                dots: false,
                arrows: true,
                prevArrow:"<img class='a-left control-c prev slick-prev' src='../images/assets/layout/btn-prev.png'>",
                nextArrow:"<img class='a-right control-c next slick-next' src='../images/assets/layout/btn-next.png'>",
                responsive: [{
                    breakpoint: 480,
                    settings:{
                        autoplay: true,
                        arrows: false,
                        centerMode:true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplaySpeed: 0,
                        speed: 3000,
                        infinite: true,
                        cssEase: 'linear',
                    }},
                ]
            });

            // Our Stories Year Slider
            $('.slider-for-year').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: false,
                asNavFor: '.slider-for-img-stories',
                dots: false,
                arrows: true,
                centerMode:true,
                focusOnSelect: true,
                swipeToSlide: true,
                prevArrow:"<img class='a-left control-c-stories prev slick-prev' src='../images/assets/layout/arrow1-prev.png'>",
                nextArrow:"<img class='a-right control-c-stories next slick-next' src='../images/assets/layout/arrow1-next.png'>", 
                responsive: [{
                    breakpoint: 480,
                    settings:{
                        centerMode:true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }},
                ]
            });

            // Our Stories Img Slider
            $('.slider-for-img-stories').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                infinite: false,
                asNavFor: '.slider-for-year'
            });
        });

        // Resize Window
        jQuery(document).ready(function($) {
            var alterClass = function() {
                var ww = document.body.clientWidth;
                if (ww < 500) {
                $('.img-section3').removeClass('justify-content-left');
                $('.img-section3').addClass('justify-content-center');
                } 
            };
            $(window).resize(function(){
                alterClass();
            });

            //Fire it when the page first loads:
            alterClass();
        });
    </script>
@endsection('script') 