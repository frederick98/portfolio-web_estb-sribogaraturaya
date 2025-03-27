@extends('layouts.app')

@section('title', 'Sriboga Raturaya: Indonesia leading food service company')

@section('metaTitle')
  <meta name="title" content="Sriboga Raturaya: Indonesia's leading food service company">
@endsection

@section('metaKeyword')
  <meta name="keywords" content="sriboga, pizza hut, marugame udon">
@endsection

@section('metaDesc')
  <meta name="description" content="​Welcome to PT Sriboga Raturaya. 
  Here you will know every step of our business journey to our achievements 
  in recent times. Visit us now.">
@endsection

@section('css')
	<link rel="stylesheet" href="{{asset('css/homepage.css')}}" media="screen" />  
	<link rel="stylesheet" href="{{asset('source/Home.css')}}" media="screen" />  
  <style>
		/* .titleSectionContact{
			font-family: 'Open Sans';
			font-style: normal;
			font-weight: 700;
			font-size: 72px;
			line-height: 120%;
			color: #307430;
		} */
		.labelField{
			font-family: 'Open Sans';
			font-style: normal;
			font-weight: 600;
			font-size: 18px;
			line-height: 25px;
			color: #307430;
		}

		.textField{
			height: 70px;
			border-width: 1px;
			border-color: #000000;
			border-style: solid;
			display: block;
			width: 100%;
			padding: 10px 12px;
			background-image: none;
			background-clip: padding-box;
		}
	</style>

  <!-- Slick Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>  
@endsection


@section('content')
    <!-- Section 1 Main Banner -->
    <section class="section-1">
        <div class="home-banner">
            {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('source/images/Group 72.png')}}" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('source/images/banner-home.png')}}" alt="Second slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              </div>
            </div> --}}
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach($banner as $items)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$items->id}}" class="{{$loop->first? 'active': ''}}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach($banner as $items)
                        <div class="carousel-item {{$loop->first? 'active': ''}}">
                            <a href="{{$items->url}}">
                                <img src="{{ env('APP_BACKEND').($items->image) }}" class="d-block w-100" alt="Sliding Banner Items" />
                            </a>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Section 2 Who We Are -->
    <section class="section-2 who-we-are">
        <!-- <div class="who-we-are"> -->
            <div class="row">
                <div class="col-md-4 align-self-center section-2-left ">
                    <div class="container">
                        {{-- <h2 class="section-2-title">Who We Are</h2> --}}
                    </div>
                </div>
                <div class="col-md-8 align-self-center section-2-right">
                    <div class="section-2-right-content">
                        <!-- <img class="section-2-img" src="{{asset('source/images/Rectangle28.png')}}" alt="Who We Are Img" data-image-width="957" data-image-height="476"> -->
                        <div class="row row-who-we-are">
                            <div class="col-md-7 div-desc-col" >
                              <h2 class="section-2-title">Who We Are</h2>
                                <p class="section-2-text">
                                    PT Sriboga Raturaya was founded in 1994 and since then, it has become the pioneer in producing 
                                    high quality flour. We have strategically built our business by expanding into the F&B service 
                                    franchise management, ensuring an end-to-end business operation that will be ready to serve the 
                                    ever-growing middle class market in Indonesia.
                                </p>
                                <a style="width: 206px" href="{{url('/about-us')}}" role="button" style="" class="btn btn-lg btn-block btn-round btn-warning section-2-btn">Learn More</a>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-3">
                                <a href="{{url('/about-us')}}" role="button" style="" class="btn btn-lg btn-block btn-round btn-warning section-2-btn">Learn More</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </section>
    <!-- <section class="u-clearfix u-valign-middle-lg u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-section-2" id="sec-c95e">
      <div class="wwa u-align-center-sm u-align-center-xs u-container-style u-expanded-width u-group u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <div class="u-absolute-hcenter u-custom-color-1 u-expanded u-shape u-shape-rectangle u-shape-1"></div>
            <div class="u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-xs u-group u-group-2">
              <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
                <img class="u-bottom-left-radius-20 u-expanded u-image u-image-contain u-image-round u-preserve-proportions u-top-left-radius-20" src="{{asset('source/images/Rectangle28.png')}}" alt="" data-image-width="957" data-image-height="476">
                <h4 class="u-custom-font u-font-lato u-text u-text-white u-text-1"> PT Sriboga Raturaya was founded in 1994 and since then, it has become the pioneer in producing  high quality flour. We have strategically built our business by expanding into the F&amp;B service franchise management, ensuring an end-to-end business operation that will be ready to serve the ever-growing middle class market in Indonesia.&nbsp;<br></h4>
                <a href="#section-contact-us" data-page-id="95633866" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1"> Contact Us</a>
              </div>
            </div>
            <h1 class=" u-align-center-lg u-align-center-md u-text u-text-font u-text-white u-text-2" >Who We Are</h1>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Section 3 Info Employee -->
    <section class="u-clearfix u-section-3 section-3" id="sec-cc1a">
        <div class="inemrest">
            <div class="container" style="max-width: 1120px">
                <div class="row justify-content-evenly">
                    <div class="col-md-3">
                        <div class="row my-3 justify-content-center">
                            <img class="section-3-img" alt="Total employees of PT Sriboga Raturaya" src="{{asset('images/assets/home/s3-img1.png')}}">
                        </div>
                        <div class="row my-2 justify-content-center">
                            <h2 class="section-3-num" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">18,000+</h2>
                        </div>
                        <div class="row my-2 justify-content-center">
                            <p class="section-3-text">Employees</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row my-3 justify-content-center">
                            <img class="section-3-img" alt="Total restaurants of PT Sriboga Raturaya" src="{{asset('images/assets/home/s3-img2.png')}}">
                        </div>
                        <div class="row my-2 justify-content-center">
                            <h2 class="section-3-num" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">625</h2>
                        </div>
                        <div class="row my-2 justify-content-center">
                            <p class="section-3-text">Restaurants</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row my-3 justify-content-center">
                            <img class="section-3-img" alt="Total food produced of PT Sriboga Raturaya" src="{{asset('images/assets/home/s3-img3.png')}}">
                        </div>
                        <div class="row my-2 justify-content-center">
                            <h2 class="section-3-num" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">700k+</h2>
                        </div>
                        <div class="row my-2 justify-content-center">
                            <p class="section-3-text">Tons Food Produced</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="u-clearfix u-section-3" id="sec-cc1a">
      <div class="inemrest">
      <div class="container" style="max-width: 1120px">
        
          <div class="row">
            <div class="col-md-4">
              <div class="inemrest-content">
                <img src="{{asset('source/images/counter_icon_employees.png')}}">
                <div class="inemrest-content-desc">
                  <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                    18,000+
                  </h1>
                  <h2 class="inemrest-alpha">
                    Employees
                  </h2>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="inemrest-content">
                <img src="{{asset('source/images/counter_icon_tonofproduced.png')}}">
                <div class="inemrest-content-desc">
                  <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                    579
                  </h1>
                  <h2 class="inemrest-alpha">
                    Restaurants
                  </h2>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="inemrest-content">
                <img src="{{asset('source/images/counter_icon_restarurant.png')}}">
                <div class="inemrest-content-desc">
                  <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                    700k
                  </h1>
                  <h2 class="inemrest-alpha">
                    Tons Food Produced
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        {{-- <div class="inemre u-clearfix u-sheet u-valign-middle-xl u-valign-middle-xs u-sheet-1">
            <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-align-center-xl u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <img class="u-image u-image-default u-preserve-proportions u-image-1" src="{{asset('source/images/counter_icon_employees.png')}}" alt="" data-image-width="100" data-image-height="100">
                            <h1 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-text u-text-custom-color-1 u-text-font u-title u-text-1" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">18,000+</h1>
                            <p class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-custom-color-1 u-text-2"> Employees</p>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-2">
                            <img class="u-image u-image-default u-preserve-proportions u-image-2" src="{{asset('source/images/counter_icon_restarurant.png')}}" alt="" data-image-width="100" data-image-height="100">
                            <h1 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-text u-text-custom-color-1 u-text-font u-title u-text-3" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">579</h1>
                            <p class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-custom-color-1 u-text-4">Restaurants</p>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-3">
                            <img class="u-image u-image-default u-preserve-proportions u-image-3" src="{{asset('source/images/counter_icon_tonofproduced.png')}}" alt="" data-image-width="100" data-image-height="100">
                            <h1 class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-text u-text-custom-color-1 u-text-font u-title u-text-5" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">700k</h1>
                            <p class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-custom-color-1 u-text-6"> Tons Food Produced</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section> -->

    <!-- Section 4 Keluarga Sriboga -->
    <section class="u-align-center u-clearfix u-section-5 section-5" id="sec-e500">
        <div class="keluarga-sriboga" style="margin-bottom: 50px">
            <div class="row my-5 justify-content-center">
                <div class="companies-header-logo col-md-6">
                    <img src="{{asset('images/assets/layout/hline-yellow.png')}}" >
                </div>
            </div>
            <div class="row my-5 justify-content-center">
                <div class="col-md-6">
                    <h1 class="section-5-title">#KeluargaSriboga</h1>
                </div>
            </div>
        </div>
        {{--<div class="row big-box-slider">
            <div class="col-md-12 slider-content">
                <div class="row justify-content-center slider-title">
                    <p>PT Sriboga Flour Mill</p>
                </div>
                <div class="row justify-content-evenly slider-text">
                    <div class="col-md-4">
                        <div class="row slider-num">
                            <p data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">41,853</p>
                        </div>
                        <div class="row slider-cap">
                            <p>m3 of factory area</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row slider-num">
                            <p data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">1,850</p>
                        </div>
                        <div class="row slider-cap">
                            <p>Tons of wheat processed daily</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row slider-num">
                            <p data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">700+</p>
                        </div>
                        <div class="row slider-cap">
                            <p>Employees</p>
                        </div>
                    </div>
                </div>
                <div class="row slider-logos">
                    <div class="col-md-3 section-4-brand">
                        <!-- <div class="row box-slider-brand"> -->
                            <!-- <div class="row section-4-brand"> -->
                        <img class="companies-profile-img" src="{{asset('images/assets/companies/crsl-smk.png')}}">
                    </div>
                    <div class="col-md-3 section-4-brand">
                        <img class="companies-profile-img" src="{{asset('images/assets/companies/crsl-smi.png')}}">
                    </div>
                    <div class="col-md-3 section-4-brand">
                        <img class="companies-profile-img" src="{{asset('images/assets/companies/crsl-sfm.png')}}">
                    </div>
                    <div class="col-md-3 section-4-brand">
                        <img class="companies-profile-img" src="{{asset('images/assets/companies/crsl-mip.png')}}">
                    </div>
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
                <div class="row justify-content-center slider-btn">
                    <div class="col-md-3">
                        <a href="{{url('/sriboga-flour-mill')}}" role="button" style="border-radius: 20px;" class="btn btn-lg btn-block btn-round btn-warning section-2-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>--}}
        {{--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item carousel-item-1 active slide-show">
                  <!-- <img class="d-block w-100 section-4-bg" src="{{asset('images/assets/home/s4-bg-sfm.png')}}" alt="Slide SFM"> -->
                  <div class="row content-1">
                      <h1 class="section-4-title">PT Sriboga Flour Mill</h1>
                      <div class="section-4-content">
                      <!-- <div class="inemrest-content"> -->
                        <div class="section-4-content-desc">
                        <!-- <div class="inemrest-content-desc"> -->
                            <!-- <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">41,853</h1>
                            <h2 class="inemrest-alpha">m3 of factory area</h2> -->
                            <p class="section-4-num" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">41,853</p>
                            <p class="section-4-cap">m3 of factory area</p>
                        </div>
                        <div class="section-4-content-desc">
                        <!-- <div class="inemrest-content-desc"> -->
                            <!-- <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">41,853</h1>
                            <h2 class="inemrest-alpha">m3 of factory area</h2> -->
                            <p class="section-4-num" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">1,850</p>
                            <p class="section-4-cap">Tons of wheat processsed daily</p>
                        </div>
                        <div class="section-4-content-desc">
                        <!-- <div class="inemrest-content-desc"> -->
                            <!-- <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">41,853</h1>
                            <h2 class="inemrest-alpha">m3 of factory area</h2> -->
                            <p class="section-4-num" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">700+</p>
                            <p class="section-4-cap">Employees</p>
                        </div>
                        <!-- <div class="inemrest-content-desc">
                            <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">1,850</h1>
                            <h2 class="inemrest-alpha">Tons of wheat processed daily</h2>
                        </div>
                        <div class="inemrest-content-desc">
                          <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                            700+
                          </h1>
                          <h2 class="inemrest-alpha">
                            Employees
                          </h2>
                        </div> -->
                      </div>
                      <div class="section-4-content-slide">
                          <div class="inemrest-content-img-1">
                            <div class="inemrest-content-img-1-sfm">
                              <img src="{{asset('images/assets/companies/crsl-sfm.png')}}">
                            </div>
                          </div>
                          <div class="inemrest-content-img-2">
                            <div class="inemrest-content-img-1-smk">
                              <img src="{{asset('images/assets/companies/crsl-smk.png')}}">
                            </div>
                          </div>
                      </div>
                      <!-- <div class="inemrest-content-img">
                        <div class="inemrest-content-img-1">
                          <div class="inemrest-content-img-1-sfm">
                            <img src="/source/images/Rectangle54.png">
                          </div>
                        </div>
                        <div class="inemrest-content-img-2">
                          <div class="inemrest-content-img-1-smk">
                            <img src="/source/images/Rectangle51.png">
                          </div>
                        </div>
                      </div> -->

                    <div class="btn-banner">
                      <a href="{{url('/sriboga-flour-mill')}}" data-page-id="1697802618" class="btn-companies">Learn More</a>
                    </div>            

                  </div>
                </div>
                <!-- <div class="carousel-item carousel-item-2">
                  <img class="d-block w-100" src="/source/images/Rectangle 3 (2).png" alt="First slide">
                  <div class="content-1">
                    <h1>PT Sarimelati Kencana Tbk</h1>

                    <div class="inemrest-content">
                      <div class="inemrest-content-desc">
                        <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                          97%
                        </h1>
                        <h2 class="inemrest-alpha">
                          Market share in Indonesia
                        </h2>
                      </div>
                      <div class="inemrest-content-desc">
                      
                        <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                          516
                        </h1>
                        <h2 class="inemrest-alpha">
                          Outlets
                        </h2>
                      
                      </div>
                      <div class="inemrest-content-desc">
                        <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                          15,500
                        </h1>
                        <h2 class="inemrest-alpha">
                          Employees
                        </h2>
                      </div>
                    </div>

                    <div class="smk-content-img">
                      <div class="smk-content-img-1">
                        <div class="smk-content-img-1-sfm">
                          <img src="/source/images/Rectangle54.png">
                        </div>
                      </div>
                      <div class="smk-content-img-2">
                        <div class="smk-content-img-1-smk">
                          <img src="/source/images/Rectangle51.png">
                        </div>
                      </div>
                      <div class="smk-content-img-3">
                        <div class="smk-content-img-1-smi">
                          <img src="/source/images/Rectangle52.png">
                        </div>
                      </div>
                    </div>

                    <div class="btn-banner">
                      <a href="{{url('/sarimelati-kencana')}}" data-page-id="1697802618" class="btn-companies">Learn More</a>
                    </div> 

                  </div>
                </div>
                <div class="carousel-item carousel-item-3">
                  <img class="d-block w-100" src="/source/images/banner1.png" alt="Third slide">
                  <div class="content-1">
                    <h1>PT Sarimelati Kencana Tbk</h1>

                    <div class="inemrest-content">
                      <div class="inemrest-content-desc">
                        <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                          #2
                        </h1>
                        <h2 class="inemrest-alpha">
                          Highest Marugame sales in the world
                        </h2>
                      </div>
                      <div class="inemrest-content-desc">
                      
                        <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                          63
                        </h1>
                        <h2 class="inemrest-alpha">
                          Outlets
                        </h2>
                      
                      </div>
                      <div class="inemrest-content-desc">
                        <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                          500,000+
                        </h1>
                        <h2 class="inemrest-alpha">
                          average customers monthly
                        </h2>
                      </div>
                    </div>

                    <div class="smi-content-img">
                      <div class="smi-content-img-1">
                        <div class="smi-content-img-1-sfm">
                          <img src="/source/images/Rectangle51.png">
                        </div>
                      </div>
                      <div class="smi-content-img-2">
                        <div class="smi-content-img-1-smk">
                          <img src="/source/images/Rectangle52.png">
                        </div>
                      </div>
                      <div class="smi-content-img-3">
                        <div class="smi-content-img-1-smi">
                          <img src="/source/images/Rectangle 124.png">
                        </div>
                      </div>
                    </div>

                    <div class="btn-banner">
                      <a href="{{url('/sriboga-marugame-indonesia')}}" data-page-id="1697802618" class="btn-companies">Learn More</a>
                    </div> 

                  </div>
                </div>
                <div class="carousel-item carousel-item-4">
                  <img class="d-block w-100" src="/source/images/Rectangle 3 (1).png" alt="Fourth slide">
                  <div class="content-1">
                    <h1>PT Mulia Inti Pangan</h1>

                    <div class="inemrest-content">
                      <div class="inemrest-content-desc">
                        <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                          5%
                        </h1>
                        <h2 class="inemrest-alpha">
                          Production is sold globally
                        </h2>
                      </div>
                      <div class="inemrest-content-desc">
                      
                        <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                          2,050
                        </h1>
                        <h2 class="inemrest-alpha">
                          MT of production cap. daily
                        </h2>
                      
                      </div>
                      <div class="inemrest-content-desc">
                        <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                          100+
                        </h1>
                        <h2 class="inemrest-alpha">
                          Employees
                        </h2>
                      </div>
                    </div>

                    <div class="mip-content-img">
                      <div class="mip-content-img-1">
                        <div class="mip-content-img-1-sfm">
                          <img src="/source/images/Rectangle52.png">
                        </div>
                      </div>
                      <div class="mip-content-img-2">
                        <div class="mip-content-img-1-smk">
                          <img src="/source/images/Rectangle 124.png">
                        </div>
                      </div>
                    </div>

                    <div class="btn-banner">
                      <a href="{{url('/mulia-inti-pangan')}}" data-page-id="1697802618" class="btn-companies">Learn More</a>
                    </div> 

                  </div>
                </div> -->
            </div>
            <a class="carousel-control-prev btn-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next btn-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon btn" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div> --}}
    </section>
    <!-- <section class="u-align-center u-clearfix u-section-5" id="sec-e500">
        <div class="companies-header" style="margin-bottom: 50px">
          <div class="row justify-content-center">
            <div class="companies-header-logo col-md-6">
              <img src="{{asset('source/images/Line 10.png')}}" >
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h2 class="u-custom-font u-text u-text-custom-color-1 u-text-default u-text-font u-text-1"> 
                #KeluargaSriboga
              </h2>
            </div>
          </div>
        </div>
    </section> -->

    <!-- Section 4 Carousel -->
    <section  class="crsl u-carousel u-carousel-duration-1000 u-slide u-block-f5c0-1" id="carousel_bb75" data-interval="3000" data-u-ride="carousel">
        <ol class="u-carousel-indicators u-hidden u-block-f5c0-2" >
            <li data-u-target="#carousel_bb75" data-u-slide-to="0" class="u-active u-grey-30"></li>
            <li data-u-target="#carousel_bb75" class="u-grey-30" data-u-slide-to="1"></li>
            <li data-u-target="#carousel_bb75" class="u-grey-30" data-u-slide-to="2"></li>
            <li data-u-target="#carousel_bb75" class="u-grey-30" data-u-slide-to="3"></li>
        </ol>
      <div class="u-carousel-inner" role="listbox" style="margin-bottom: 30px">
        <!--  PT Sriboga Flour Mill  -->
        <div class="u-active u-carousel-item u-clearfix u-image u-section-4-1" data-image-width="1440" data-image-height="681">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h4 class="u-align-center-xs u-text u-text-default-lg u-text-default-xl u-text-font u-text-white u-text-1"> PT Sriboga Flour Mill</h4>
            <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
              <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-1">
                    <h2 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-2" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">41,853</h2>
                    <p class="u-align-center u-text u-text-white u-text-3">m3 of factory area</p>
                  </div>
                </div>
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-2">
                    <h2 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-4" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">1,850</h2>
                    <p class="u-align-center u-text u-text-white u-text-5">Tons of wheat processed daily</p>
                  </div>
                </div>
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-3">
                    <h2 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-6" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">700+</h2>
                    <p class="u-align-center u-text u-text-white u-text-7">Employees</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-list u-list-2">
                <div class="u-repeater u-repeater-2">
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-container-layout-4">
                            <div class="u-align-left u-border-3 u-border-white u-line u-line-vertical u-line-1"></div>
                            <div class="u-align-left u-border-3 u-border-white u-line u-line-vertical u-line-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="u-container-style u-group u-opacity u-opacity-35 u-radius-30 u-shape-round u-white u-group-1">
              <div class="u-container-layout u-container-layout-5">
                <img class="u-image u-image-default u-preserve-proportions u-image-1" src="{{asset('images/assets/companies/crsl-sfm.png')}}" alt="" data-image-width="180" data-image-height="180">
              </div>
            </div>
            <img class="u-image u-image-default u-preserve-proportions u-image-2" src="{{asset('images/assets/companies/crsl-smk.png')}}" alt="" data-image-width="180" data-image-height="180">
            <img class="u-image u-image-default u-preserve-proportions u-image-3" src="{{asset('images/assets/companies/crsl-mip.png')}}" alt="" data-image-width="180" data-image-height="180">
            <a href="{{url('/sriboga-flour-mill')}}" data-page-id="1697802618" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1">Learn More</a>
          </div>
        </div>
        <!-- PT Sarimelati Kencana -->
        <div class="u-carousel-item u-clearfix u-image u-section-4-2" data-image-width="1440" data-image-height="681">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h4 class="u-align-center-xs u-text u-text-default-lg u-text-default-xl u-text-font u-text-white u-text-1"> PT Sarimelati Kencana Tbk</h4>
            <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
              <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-1">
                    <h2 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-2" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">87%</h2>
                    <p class="u-align-center u-text u-text-white u-text-3"> Market share in Indonesia </p>
                  </div>
                </div>
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-2">
                    <h2 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-4" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">516</h2>
                    <p class="u-align-center u-text u-text-white u-text-5">Outlets</p>
                  </div>
                </div>
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-3">
                    <h2 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-6" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"> 15,500</h2>
                    <p class="u-align-center u-text u-text-white u-text-7"> Servings each month</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-list u-list-2">
                <div class="u-repeater u-repeater-2">
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-container-layout-4">
                            <div class="u-align-left u-border-3 u-border-white u-line u-line-vertical u-line-1"></div>
                            <div class="u-align-left u-border-3 u-border-white u-line u-line-vertical u-line-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="u-container-style u-group u-opacity u-opacity-35 u-radius-30 u-shape-round u-white u-group-1">
              <div class="u-container-layout u-container-layout-5">
                <img class="u-image u-image-default u-preserve-proportions u-image-1" src="{{asset('images/assets/companies/crsl-smk.png')}}" alt="" data-image-width="180" data-image-height="180">
              </div>
            </div>
            <img class="u-image u-image-default u-preserve-proportions u-image-2" src="{{asset('images/assets/companies/crsl-smi2.png')}}" alt="" data-image-width="180" data-image-height="180">
            <img class="u-image u-image-default u-preserve-proportions u-image-3" src="{{asset('images/assets/companies/crsl-sfm.png')}}" alt="" data-image-width="180" data-image-height="180">
            <a href="{{url('/sarimelati-kencana')}}" data-page-id="1697802618" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1">Learn More</a>
          </div>
        </div>
        <!-- PT Sriboga Marugame Indonesia -->
        <div class="u-carousel-item u-clearfix u-image u-section-4-3" data-image-width="1440" data-image-height="681">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h4 class="u-align-center-xs u-text u-text-default-lg u-text-default-xl u-text-font u-text-white u-text-1"> PT Sriboga Marugame Indonesia</h4>
            <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
              <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-1">
                    <h2 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-2" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">#2</h2>
                    <p class="u-align-center u-text u-text-white u-text-3"> Highest Marugame sales in the world</p>
                  </div>
                </div>
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-2">
                    <h2 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-4" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">63</h2>
                    <p class="u-align-center u-text u-text-white u-text-5">Outlets</p>
                  </div>
                </div>
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-3">
                    <h2 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-6" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">500,000+</h2>
                    <p class="u-align-center u-text u-text-white u-text-7">average customers monthly</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-list u-list-2">
              <div class="u-repeater u-repeater-2">
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-container-layout-4">
                    <div class="u-align-left u-border-3 u-border-white u-line u-line-vertical u-line-1"></div>
                    <div class="u-align-left u-border-3 u-border-white u-line u-line-vertical u-line-2"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-group u-opacity u-opacity-35 u-radius-30 u-shape-round u-white u-group-1">
              <div class="u-container-layout u-container-layout-5">
                <img class="u-image u-image-default u-preserve-proportions u-image-1" src="{{asset('images/assets/companies/crsl-smi2.png')}}" alt="" data-image-width="200" data-image-height="200">
              </div>
            </div>
            <img class="u-image u-image-default u-preserve-proportions u-image-2" src="{{asset('images/assets/companies/crsl-mip.png')}}" alt="" data-image-width="180" data-image-height="180">
            <img class="u-image u-image-default u-preserve-proportions u-image-3" src="{{asset('images/assets/companies/crsl-smk.png')}}" alt="" data-image-width="180" data-image-height="180">
            <a href="{{url('/sriboga-marugame-indonesia')}}" data-page-id="1697802618" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1">Learn More</a>
          </div>
        </div>
        <!--  PT Mulia Inti Pangan -->
        <div class="u-carousel-item u-clearfix u-image u-section-4-4" data-image-width="1440" data-image-height="681">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h4 class="u-align-center-xs u-text u-text-default-lg u-text-default-xl u-text-font u-text-white u-text-1"> PT Mulia Inti Pangan</h4>
            <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
              <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-1">
                    <h2 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-2" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">5%</h2>
                    <p class="u-align-center u-text u-text-white u-text-3">Production is sold globally</p>
                  </div>
                </div>
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-2">
                    <h2 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-4" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">2,050</h2>
                    <p class="u-align-center u-text u-text-white u-text-5">MT of production cap.daily</p>
                  </div>
                </div>
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-3">
                    <h2 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-6" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">100+</h2>
                    <p class="u-align-center u-text u-text-white u-text-7"> Employees</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-list u-list-2">
                <div class="u-repeater u-repeater-2">
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-container-layout-4">
                            <div class="u-align-left u-border-3 u-border-white u-line u-line-vertical u-line-1"></div>
                            <div class="u-align-left u-border-3 u-border-white u-line u-line-vertical u-line-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="u-container-style u-group u-opacity u-opacity-35 u-radius-30 u-shape-round u-white u-group-1">
              <div class="u-container-layout u-container-layout-5">
                <img class="u-image u-image-default u-preserve-proportions u-image-1" src="{{asset('images/assets/companies/crsl-mip.png')}}" alt="" data-image-width="180" data-image-height="180">
              </div>
            </div>
            <img class="u-image u-image-default u-preserve-proportions u-image-2" src="{{asset('images/assets/companies/crsl-sfm.png')}}" alt="" data-image-width="180" data-image-height="180">
            <img class="u-image u-image-default u-preserve-proportions u-image-3" src="{{asset('images/assets/companies/crsl-smi2.png')}}" alt="" data-image-width="180" data-image-height="180">
            <a href="{{url('/mulia-inti-pangan')}}" data-page-id="1697802618" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1">Learn More</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev btn-prev" href="#carousel_bb75" role="button" data-u-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next btn-next" href="#carousel_bb75" role="button" data-u-slide="next">
        <span class="carousel-control-next-icon btn" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </section>
    {{-- <section class="crsl u-carousel u-carousel-duration-1000 u-slide u-block-f5c0-1" id="carousel_bb75" data-interval="3000" data-u-ride="carousel">
      <ol class="u-carousel-indicators u-hidden u-block-f5c0-2" >
        <li data-u-target="#carousel_bb75" data-u-slide-to="0" class="u-active u-grey-30"></li>
        <li data-u-target="#carousel_bb75" class="u-grey-30" data-u-slide-to="1"></li>
      </ol>
      <div class="u-carousel-inner" role="listbox" style="margin-bottom: 30px">
        <!--  PT SARIMELATI  -->
        <div class="u-active u-carousel-item u-clearfix u-image u-section-4-1" data-image-width="1440" data-image-height="681">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h4 class="u-align-center-xs u-text u-text-default-lg u-text-default-xl u-text-font u-text-white u-text-1"> PT Sarimelati Kencana Tbk</h4>
            <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
              <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-1">
                    <h1 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-2" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">97%</h1>
                    <p class="u-align-center u-text u-text-white u-text-3"> Market share in Indonesia </p>
                  </div>
                </div>
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-2">
                    <h1 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-4" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">516</h1>
                    <p class="u-align-center u-text u-text-white u-text-5">Outlets</p>
                  </div>
                </div>
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-3">
                    <h1 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-6" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"> 15,500</h1>
                    <p class="u-align-center u-text u-text-white u-text-7"> Servings each month</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-list u-list-2">
                <div class="u-repeater u-repeater-2">
                    <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-container-layout-4">
                            <div class="u-align-left u-border-3 u-border-white u-line u-line-vertical u-line-1"></div>
                            <div class="u-align-left u-border-3 u-border-white u-line u-line-vertical u-line-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="u-container-style u-group u-opacity u-opacity-35 u-radius-30 u-shape-round u-white u-group-1">
              <div class="u-container-layout u-container-layout-5">
                <img class="u-image u-image-default u-preserve-proportions u-image-1" src="{{asset('source/images/Rectangle51.png')}}" alt="" data-image-width="180" data-image-height="180">
              </div>
            </div>
            <img class="u-image u-image-default u-preserve-proportions u-image-2" src="{{asset('source/images/Rectangle52.png')}}" alt="" data-image-width="180" data-image-height="180">
            <img class="u-image u-image-default u-preserve-proportions u-image-3" src="{{asset('source/images/Rectangle54.png')}}" alt="" data-image-width="180" data-image-height="180">
            <a href="{{url('/sarimelati-kencana')}}" data-page-id="1697802618" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1">Learn More</a>
          </div>
        </div>
        <!-- PT Sriboga Marugame -->
        <div class="u-carousel-item u-clearfix u-image u-section-4-2" data-image-width="1440" data-image-height="681">
          <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-align-center-sm u-align-center-xs u-text u-text-default-lg u-text-default-md u-text-default-xl u-text-white u-text-1"> PT Sriboga Marugame Indonesia</p>
            <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
              <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-1">
                    <h1 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-2" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">#2</h1>
                    <p class="u-align-center u-text u-text-white u-text-3"> Highest sales in the world</p>
                  </div>
                </div>
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-2">
                    <h1 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-4" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">63</h1>
                    <p class="u-align-center u-text u-text-white u-text-5">Outlets</p>
                  </div>
                </div>
                <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-3">
                    <h1 class="u-align-center u-custom-font u-text u-text-font u-text-white u-title u-text-6" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"> 500,000+</h1>
                    <p class="u-align-center u-text u-text-white u-text-7"> Servings each month</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-list u-list-2">
              <div class="u-repeater u-repeater-2">
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-container-layout-4">
                    <div class="u-align-left u-border-3 u-border-white u-line u-line-vertical u-line-1"></div>
                    <div class="u-align-left u-border-3 u-border-white u-line u-line-vertical u-line-2"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-group u-opacity u-opacity-35 u-radius-30 u-shape-round u-white u-group-1">
              <div class="u-container-layout u-container-layout-5">
                <img class="u-image u-image-default u-preserve-proportions u-image-1" src="{{asset('source/images/Rectangle52-28.png')}}" alt="" data-image-width="180" data-image-height="180">
              </div>
            </div>
            <img class="u-image u-image-default u-preserve-proportions u-image-2" src="{{asset('source/images/Rectangle54.png')}}" alt="" data-image-width="180" data-image-height="180">
            <img class="u-image u-image-default u-preserve-proportions u-image-3" src="{{asset('source/images/Rectangle51-30.png')}}" alt="" data-image-width="180" data-image-height="180">
            <a href="{{url('/sriboga-marugame-indonesia')}}" data-page-id="1697802618" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1">Learn More</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev btn-prev" href="#carousel_bb75" role="button" data-u-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next btn-next" href="#carousel_bb75" role="button" data-u-slide="next">
        <span class="carousel-control-next-icon btn" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </section> --}}
    {{-- <section class="u-clearfix u-section-3 home-banner" id="sec-cc1a">
      <div id="carouselExampleIndicators-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item carousel-item-1 active">
            <img class="d-block w-100" src="/source/images/Rectangle 3.png" alt="First slide">
            <div class="content-1">
              <h1>PT Sriboga Flour Mill</h1>
    
              <div class="carousel-inemrest-content">
                <div class="carousel-inemrest-content-desc">
                  <h1 class="carousel-inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                    41,853
                  </h1>
                  <h2 class="carousel-inemrest-alpha">
                    m3 of factory area
                  </h2>
                </div>
                <div class="carousel-inemrest-content-desc">
                 
                  <h1 class="carousel-inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                    1,850
                  </h1>
                  <h2 class="carousel-inemrest-alpha">
                    Tons of wheat processed daily
                  </h2>
                </div>
                <div class="carousel-inemrest-content-desc">
                  <h1 class="carousel-inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                    700+
                  </h1>
                  <h2 class="carousel-inemrest-alpha">
                    Employees
                  </h2>
                </div>
              </div>
    
              <div class="inemrest-content-img">
                <div class="inemrest-content-img-1">
                  <div class="inemrest-content-img-1-sfm">
                    <img src="/source/images/Rectangle54.png">
                  </div>
                </div>
                <div class="inemrest-content-img-2">
                  <div class="inemrest-content-img-1-smk">
                    <img src="/source/images/Rectangle51.png">
                  </div>
                </div>
              </div>
    
              <div class="btn-banner">
                <a href="{{url('/sriboga-flour-mill')}}" data-page-id="1697802618" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1">Learn More</a>
              </div>            
    
            </div>
          </div>
          
          <div class="carousel-item carousel-item-2">
            <img class="d-block w-100" src="/source/images/Rectangle 3 (2).png" alt="First slide">
            <div class="content-1">
              <h1>PT Sarimelati Kencana Tbk</h1>
    
              <div class="carousel-inemrest-content">
                <div class="carousel-inemrest-content-desc">
                  <h1 class="carousel-inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                    97%
                  </h1>
                  <h2 class="carousel-inemrest-alpha">
                    Market share in Indonesia
                  </h2>
                </div>
                <div class="carousel-inemrest-content-desc">
                 
                  <h1 class="carousel-inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                    516
                  </h1>
                  <h2 class="carousel-inemrest-alpha">
                    Outlets
                  </h2>
                 
                </div>
                <div class="carousel-inemrest-content-desc">
                  <h1 class="carousel-inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                    15,500
                  </h1>
                  <h2 class="carousel-inemrest-alpha">
                    Employees
                  </h2>
                </div>
              </div>
    
              <div class="smk-content-img">
                <div class="smk-content-img-1">
                  <div class="smk-content-img-1-sfm">
                    <img src="/source/images/Rectangle54.png">
                  </div>
                </div>
                <div class="smk-content-img-2">
                  <div class="smk-content-img-1-smk">
                    <img src="/source/images/Rectangle51.png">
                  </div>
                </div>
                <div class="smk-content-img-3">
                  <div class="smk-content-img-1-smi">
                    <img src="/source/images/Rectangle52.png">
                  </div>
                </div>
              </div>
    
              <div class="btn-banner">
                <a href="{{url('/sarimelati-kencana')}}" data-page-id="1697802618" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1">Learn More</a>
              </div> 
    
            </div>
          </div>
    
          <div class="carousel-item carousel-item-3">
            <img class="d-block w-100" src="/source/images/banner1.png" alt="Third slide">
            <div class="content-1">
              <h1>PT Sarimelati Kencana Tbk</h1>
    
              <div class="carousel-inemrest-content">
                <div class="carousel-inemrest-content-desc">
                  <h1 class="carousel-inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                    #2
                  </h1>
                  <h2 class="carousel-inemrest-alpha">
                    Highest Marugame sales in the world
                  </h2>
                </div>
                <div class="carousel-inemrest-content-desc">
                 
                  <h1 class="carousel-inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                    63
                  </h1>
                  <h2 class="carousel-inemrest-alpha">
                    Outlets
                  </h2>
                 
                </div>
                <div class="carousel-inemrest-content-desc">
                  <h1 class="carousel-inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                    500,000+
                  </h1>
                  <h2 class="carousel-inemrest-alpha">
                    average customers monthly
                  </h2>
                </div>
              </div>
    
              <div class="smi-content-img">
                <div class="smi-content-img-1">
                  <div class="smi-content-img-1-sfm">
                    <img src="/source/images/Rectangle51.png">
                  </div>
                </div>
                <div class="smi-content-img-2">
                  <div class="smi-content-img-1-smk">
                    <img src="/source/images/Rectangle52.png">
                  </div>
                </div>
                <div class="smi-content-img-3">
                  <div class="smi-content-img-1-smi">
                    <img src="/source/images/Rectangle 124.png">
                  </div>
                </div>
              </div>
    
              <div class="btn-banner">
                <a href="{{url('/sriboga-marugame-indonesia')}}" data-page-id="1697802618" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1">Learn More</a>
              </div> 
    
            </div>
          </div>
    
          <div class="carousel-item carousel-item-4">
            <img class="d-block w-100" src="/source/images/Rectangle 3 (1).png" alt="Fourth slide">
            <div class="content-1">
              <h1>PT Mulia Inti Pangan</h1>
    
              <div class="carousel-inemrest-content">
                <div class="carousel-inemrest-content-desc">
                  <h1 class="carousel-inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                    5%
                  </h1>
                  <h2 class="carousel-inemrest-alpha">
                    Production is sold globally
                  </h2>
                </div>
                <div class="carousel-inemrest-content-desc">
                 
                  <h1 class="carousel-inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                    2,050
                  </h1>
                  <h2 class="carousel-inemrest-alpha">
                    MT of production cap. daily
                  </h2>
                 
                </div>
                <div class="carousel-inemrest-content-desc">
                  <h1 class="carousel-inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                    100+
                  </h1>
                  <h2 class="carousel-inemrest-alpha">
                    Employees
                  </h2>
                </div>
              </div>
    
              <div class="mip-content-img">
                <div class="mip-content-img-1">
                  <div class="mip-content-img-1-sfm">
                    <img src="/source/images/Rectangle52.png">
                  </div>
                </div>
                <div class="mip-content-img-2">
                  <div class="mip-content-img-1-smk">
                    <img src="/source/images/Rectangle 124.png">
                  </div>
                </div>
              </div>
    
              <div class="btn-banner">
                <a href="{{url('/mulia-inti-pangan')}}" data-page-id="1697802618" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1">Learn More</a>
              </div> 
    
            </div>
          </div>
    
  
        </div>
        <a class="carousel-control-prev btn-prev" href="#carouselExampleIndicators-carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next btn-next" href="#carouselExampleIndicators-carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon btn" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section> --}}

    <!-- Section 5 Our Companies -->
    <section class="u-align-center u-clearfix u-section-5 section-5" id="sec-e500">
        <div class="keluarga-sriboga" style="margin-bottom: 50px">
            <div class="row my-5 justify-content-center">
                <div class="companies-header-logo col-md-6">
                    <img src="{{asset('images/assets/layout/hline-yellow.png')}}" >
                </div>
            </div>
            <div class="row my-5 justify-content-center">
                <div class="col-md-6">
                    <h2 class="section-5-title">Our Companies In Pictures</h2>
                </div>
            </div>
        </div>
        <div class="companies-body">
            <div class="container">
                <div class="row">
                    @foreach($comPic as $items)
                        <div class="col-md-4">
                            <div class="companies-body-img">
                                <img alt="{{$items->alt_text}}" src="{{ env('APP_BACKEND').($items->image) }}" class="__image" >
                                <div class="__overlay">
                                    <div class="overlay__text">
                                        <p>{{$items->captions}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
          <div class="u-border-3 u-border-custom-color-2 u-line u-line-horizontal u-line-1"></div>
          <h2 class="u-custom-font u-text u-text-custom-color-1 u-text-default u-text-font u-text-1"> Our Companies In Pictures </h2>
          <div class="u-expanded-width-xs u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
            <div class="u-gallery-inner u-gallery-inner-1">
              <div class="u-effect-fade u-effect-hover-liftUp u-gallery-item u-gallery-item-1">
                <div class="u-back-slide" data-image-width="421" data-image-height="417">
                  <img class="u-back-image u-expanded" src="{{asset('source/images/Rectangle35.png')}}" alt="">
                </div>
                <div class="u-over-slide u-shading u-valign-bottom u-over-slide-1">
                  <h3 class="u-align-justify u-custom-font u-gallery-heading u-text-font" style="font-size: 1.125rem; background-image: none; font-weight: 700;"></h3>
                  <h3 class="u-align-left u-custom-font u-gallery-text u-text-font" style="margin-top: 100px; font-weight: 600; font-size: 1.125rem;">Cerita Sriboga Raturaya terus dituliskan oleh ribuan pria dan wanita di seluruh dunia.</h3>
                </div>
              </div>
              <div class="u-effect-fade u-effect-hover-liftUp u-gallery-item u-gallery-item-2">
                <div class="u-back-slide" data-image-width="422" data-image-height="417">
                  <img class="u-back-image u-expanded" src="{{asset('source/images/Rectangle36.png')}}">
                </div>
                <div class="u-over-slide u-shading u-valign-bottom u-over-slide-2">
                  <h3 class="u-align-justify u-custom-font u-gallery-heading u-text-font" style="font-size: 1.125rem; background-image: none; font-weight: 700;"></h3>
                  <h3 class="u-align-left u-custom-font u-gallery-text u-text-font" style="margin-top: 100px; font-weight: 600; font-size: 1.125rem;">Dengan masa depan yang cerah, Sriboga Raturaya selalu berpegang teguh kepada sejarah dan nilai perusahaan.</h3>
                </div>
              </div>
              <div class="u-effect-fade u-effect-hover-liftUp u-gallery-item u-gallery-item-3">
                <div class="u-back-slide" data-image-width="421" data-image-height="417">
                  <img class="u-back-image u-expanded" src="{{asset('source/images/Rectangle37.png')}}">
                </div>
                <div class="u-over-slide u-shading u-valign-bottom u-over-slide-3">
                  <h3 class="u-align-justify u-custom-font u-gallery-heading u-text-font" style="font-size: 1.125rem; background-image: none; font-weight: 700;"></h3>
                  <h3 class="u-align-left u-custom-font u-gallery-text u-text-font" style="margin-top: 100px; font-weight: 600; font-size: 1.125rem;">Bisnis model kami selalu fokus untuk membangun ekosistem bisnis yang berkelanjutan untuk bisa memberikan pelayanan terbaik.</h3>
                </div>
              </div>
              <div class="u-effect-fade u-effect-hover-liftUp u-gallery-item u-gallery-item-4">
                <div class="u-back-slide" data-image-width="421" data-image-height="417">
                  <img class="u-back-image u-expanded" src="{{asset('source/images/Rectangle38.png')}}">
                </div>
                <div class="u-over-slide u-shading u-valign-bottom u-over-slide-4">
                  <h3 class="u-align-justify u-custom-font u-gallery-heading u-text-font" style="font-size: 1.125rem; background-image: none; font-weight: 700;"></h3>
                  <h3 class="u-align-left u-custom-font u-gallery-text u-text-font" style="margin-top: 100px; font-weight: 600; font-size: 1.125rem;">Melalui Pizza Hut Indonesia, kami telah berhasil mengenalkan masyarakat Indonesia dengan pizza dan pasta, dan kami terus menjadi yang terdepan di pasar domestik.</h3>
                </div>
              </div>
              <div class="u-effect-fade u-effect-hover-liftUp u-gallery-item u-gallery-item-5">
                <div class="u-back-slide" data-image-width="422" data-image-height="417">
                  <img class="u-back-image u-expanded" src="{{asset('source/images/Rectangle39.png')}}">
                </div>
                <div class="u-over-slide u-shading u-valign-bottom u-over-slide-5">
                  <h3 class="u-align-justify u-custom-font u-gallery-heading u-text-font" style="font-size: 1.125rem; background-image: none; font-weight: 700;"></h3>
                  <h3 class="u-align-left u-custom-font u-gallery-text u-text-font" style="margin-top: 100px; font-weight: 600; font-size: 1.125rem;">Sriboga Raturaya selalu mencoba untuk berinovasi dengan perencanaan yang strategis untuk masa depan yang lebih baik.</h3>
                </div>
              </div>
              <div class="u-effect-fade u-effect-hover-liftUp u-gallery-item u-gallery-item-6">
                <div class="u-back-slide" data-image-width="421" data-image-height="417">
                  <img class="u-back-image u-expanded" src="{{asset('source/images/Rectangle40.png')}}">
                </div>
                <div class="u-over-slide u-shading u-valign-bottom u-over-slide-6">
                  <h3 class="u-align-justify u-custom-font u-gallery-heading u-text-font" style="font-size: 1.125rem; background-image: none; font-weight: 700;"></h3>
                  <h3 class="u-align-left u-custom-font u-gallery-text u-text-font" style="margin-top: 100px; font-weight: 600; font-size: 1.125rem;">Semua mahasiswa lulusan IPMI International Business School telah terlatih untuk menjadi yang terbaik <br>di dunia.
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
    </section>

    <!-- Section 6 Latest News -->
    <section class="u-clearfix u-section-5 section-5 section-6" id="sec-d3c0">
      <div class="keluarga-sriboga" style="margin-bottom: 50px">
            <div class="row my-5 justify-content-center">
                <div class="companies-header-logo col-md-6">
                    <img src="{{asset('images/assets/layout/hline-yellow.png')}}" >
                </div>
            </div>
            <div class="row my-5 justify-content-center">
                <div class="col-md-6">
                    <h2 class="section-5-title">Latest News</h2>
                </div>
            </div>
        </div>
        <div class="latest-news-body">
            <div class="container" style="max-width: 1440px">
                <div class="row" style="margin-bottom: 50px; padding: 0 30px">
                    @foreach($article as $items)
                        <div class="col-md-4">
                            <div class="ui-state-default latest-news card card-widget widget-user">
                                <div class="latest-news widget-user-header">
                                    <img class="card-img-top" alt="{{ $items->alt_text }}" src="{{ env('APP_BACKEND').($items->image) }}" alt="Card image cap" />
                                </div>
                                <div class="latest-news card-header">
                                    <h2>{{($items->published_date->format('d F Y'))}}</h2>
                                    <h2>{{($items->title)}}</h2>
                                    <p>{{substr($items->short_description, 0, 150)}}</p>  
                                    <a href="{{url('details')}}">More...</a>
                                </div>
                                <div class="card__overlay">
                                    <div class="latest-news widget-user-header">
                                        <img class="card-img-top" alt="alt="{{ $items->alt_text }}"" src="{{ env('APP_BACKEND').($items->image) }}" alt="Card image cap" />
                                    </div>
                                  <div class="latest-news-overlay card-header">
                                      <h2>{{($items->published_date->format('d F Y'))}}</h2>
                                      <h2>{{($items->title)}}</h2>
                                    <p>{{substr($items->short_description, 0, 150)}}</p> 
                                      <a href="{{url('news/' . $items->url_slug)}}">More...</a>
                                  </div>
                                  <div class="card__overlay__text">
                                  </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="{{url('news')}}" data-page-id="16117874" class="latest-news-body-btn u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1">More Stories</a>
            </div>
        </div>
    </section>

    <!-- Section Achievements -->
     @include('layouts.achievements')

    <!-- Section 8 Contact Us -->
    <section id="section-contact-us" class="u-clearfix u-white u-section-8 section-8 section-7">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="companies-header-logo col-md-6">
                    <img style="width: 100%" src="{{asset('images/assets/layout/hline-yellow.png')}}" >
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="section-8-title">Contact Us</h2>
                </div>
            </div> 
            <div class="row justify-content-center">
                <div class="col-md-6" style="padding: 0;">
                    <img class="img-fluid" src="{{asset('images/assets/contactUs/ContactUs_new_110822.webp')}}" alt="" data-image-width="703" data-image-height="648"/>
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
    <!-- <section id="section-contact-us" class="u-clearfix u-white u-section-8" style="padding-bottom:8%; margin: 80px 0;">
      <div class="" style="margin: 80px 0;">
        <div class="row justify-content-center">
          <div class="companies-header-logo col-md-6">
            <img src="{{asset('source/images/Line 10.png')}}" >
          </div>
        </div>
        <div class="row align-items-center col-md-12" style="margin-bottom: 40px;">
          <div class="container">
            <h2 class="u-align-center-xs u-custom-font u-text u-text-custom-color-1 u-text-default u-text-font u-text-1">Contact Us</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <img class="img-fluid" src="{{asset('source/images/contactus1.png')}}" alt="" data-image-width="703" data-image-height="648"/>
          </div>
          <div class="col-md-6">
            <form method="POST" class="" style="padding: 15px">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="nameField" class="labelField">Name</label>
                <input type="text" id="nameField" name="name" class="textField border-top-0 border-left-0 border-right-0" required/>
              </div>
              <div class="form-group">
                <label for="phoneField" class="labelField">Phone</label>
                <input type="phone" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" id="phoneField" name="phone" class="textField border-top-0 border-left-0 border-right-0" required/>
              </div>
              <div class="form-group">
                <label for="emailField" class="labelField">Email</label>
                <input type="email" id="emailField" name="email" class="textField border-top-0 border-left-0 border-right-0" required/>
              </div>
              <div class="form-group">
                <label for="messageField" class="labelField">Message</label>
                <textarea rows="3" cols="50" id="messageField" name="message" class="textField border-top-0 border-left-0 border-right-0" required></textarea>
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
      </div>
    </section> -->
@endsection


@section('script')
    <script class="u-script" type="text/javascript" src="{{asset('source/nicepage.js')}}" defer=""></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    
    <!-- <script type="text/javascript">
        $( document ).ready(function() {
          $('.slider2').slick({
            slidesToShow: 3,
            slidesToScroll:1,
            autoplay: false,
            draggable: true,
            responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1
              }
            }
          ]
          });
        });
        //   $('.box-slider').slick({
        //     centerMode: true,
        //     infinite: true,
        //     slidesToShow: 1,
        //     dots: false,
        //     // appendDots:jQuery(".box-dots"),
        //     autoplay: false,
        //     responsive: [
        //     {
        //       breakpoint: 768,
        //       settings: {
        //         slidesToShow: 1
        //       }
        //     }
        //   ]
        //   });
        // });
        //   $(document).ready(function(){
        //     // Event for pushed the video
        //     $('#carouselExampleIndicators').carousel({
        //         pause: true,
        //         interval: false
        //     });
        // });

        // $(document).ready(function () {
        //     $('.slider-for').slick({
        //     slidesToShow: 1,
        //     slidesToScroll: 1,
        //     arrows: false,
        //     fade: true,
        //     asNavFor: '.slide-show'
        //   });
        // });

        // $(document).ready(function () {
        //     $('.slide-show').slick({
        //       infinite: true,
        //       slidesToShow: 3,
        //       slidesToScroll: 1,
        //       asNavFor: '.slider-for',
        //       dots: false,
        //       arrows: true,
        //       prevArrow:"<img class='a-left c-c prev slick-prev' src='../source/images/Vector 4.png'>",
        //       nextArrow:"<img class='a-right c-c next slick-next' src='../source/images/Vector 3.png'>",
        //       centerMode: true,
        //       focusOnSelect: true,
        //       responsive: [
        //         { breakpoint: 1024,
        //           settings: {
        //             slidesToShow: 3,
        //             slidesToScroll: 1,
        //             infinite: true,
        //             dots: false
        //           }},
        //           { breakpoint: 768,
        //           settings: {
        //             slidesToShow: 3,
        //             slidesToScroll: 1,
        //             infinite: true,
        //             dots: false
        //           }},
        //           { breakpoint: 480,
        //           settings: {
        //             slidesToShow: 3,
        //             slidesToScroll: 1,
        //             infinite: true,
        //             dots: false
        //           }}
        //       ]
        //     });
        // });
    </script> -->
@endsection('script') 