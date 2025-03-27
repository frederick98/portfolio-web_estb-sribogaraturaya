@extends('layouts.app')

@section('title', 'Homepage Sriboga Raturaya')


@section('css')
	<link rel="stylesheet" href="{{asset('source/test.css')}}" media="screen" />  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>

  <style>
    
  </style>
@endsection


@section('content')

<section class="u-clearfix u-section-3 home-banner" id="sec-cc1a">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
    <div class="carousel-inner">
      <div class="carousel-item carousel-item-1 active">
        <img class="d-block w-100" src="{{asset('images/assets/home/s4-bg-sfm.png')}}" alt="First slide">
        <div class="content-1">
          <h1>PT Sriboga Flour Mill</h1>

          <div class="inemrest-content">
            <div class="inemrest-content-desc">
              <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                41,853
              </h1>
              <h2 class="inemrest-alpha">
                m3 of factory area
              </h2>
            </div>
            <div class="inemrest-content-desc">
             
              <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                1,850
              </h1>
              <h2 class="inemrest-alpha">
                Tons of wheat processed daily
              </h2>
            </div>
            <div class="inemrest-content-desc">
              <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                700+
              </h1>
              <h2 class="inemrest-alpha">
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
            <a href="{{url('/sriboga-flour-mill')}}" data-page-id="1697802618" class="btn-companies">Learn More</a>
          </div>            

        </div>
      </div>
      
      <div class="carousel-item carousel-item-2">
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
      </div>

    </div>
    <a class="carousel-control-prev btn-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next btn-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon btn" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>


{{-- <div class="row responsive" >
  <div class="banner-home">
    <img src="{{asset('source/images/banner2.png')}}">
    <div class="col-md-12" style="display: flex; position: relative; top: -620px">

        <p class="banner-title">
          PT Sarimelati Kencana Tbk
        </p>
    
    </div>
    <div class="col-md-12" style="
      display: flex; position: relative; top: -550px">

      <div class="col-md-3 inemrest-content-desc" style="flex: none; max-width: 33%;">
        <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
          97%
        </h1>
        <p class="inemrest-alpha">
          Market share in Indonesia
        </p>
      </div>
      
      <div class="inemrest-content-desc">
        <img src="{{asset('source/images/Line 8.png')}}" style="height: 190px; max-height: auto;">
      </div>

      <div class="col-md-3 inemrest-content-desc" style="flex: none; max-width: 33%;">
        <p class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
          516
        </p>
        <p class="inemrest-alpha">
          Outlets
        </p>
      </div>

      <div class="inemrest-content-desc">
        <img src="{{asset('source/images/Line 8.png')}}" style="height: 190px; max-height: auto;">
      </div>

      <div class="col-md-3 inemrest-content-desc" style="flex: none; max-width: 33%;">
        <p class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
          15,500
        </p>
        <p class="inemrest-alpha">
          Employees
        </p>
      </div>

    </div>

    <div class="col-md-12" style="
      display: flex; position: relative; top: -500px">
      <div class="col-md-4" style="text-align: -webkit-center;">
        <img style="width: 150px; height: 150px;     position: relative;
        top: -20px; left: 100px;" src="{{asset('source/images/Rectangle54.png')}}">
      </div>
      <div class="col-md-4" style="text-align: -webkit-center; ">
      <div style="background: rgba(255, 255, 255, 0.35);
      border-radius: 30px; width: 200px; height: 230;">
        <img style="width: 150px; height: 150px;" src="{{asset('source/images/Rectangle51.png')}}">
      </div>
      </div>
      <div class="col-md-4" style="text-align: -webkit-center;">
        <img style="width: 150px; height: 150px;     position: relative;
        top: -20px; right: 100px" src="{{asset('source/images/Rectangle52.png')}}">
      </div>
    </div>

  </div>

  <div class="benner-home">
    <img src="{{asset('source/images/banner1.png')}}">
    <div class="col-md-12" style="display: flex; position: relative; top: -620px">

      <p class="banner-title">
        PT Sriboga Marugame Indonesia
      </p>
  
  </div>
  <div class="col-md-12" style="
    display: flex; position: relative; top: -550px">

    <div class="col-md-3 inemrest-content-desc" style="flex: none; max-width: 33%;">
      <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
        #2
      </h1>
      <p class="inemrest-alpha">
        Highest sales in the world
      </p>
    </div>
    
    <div class="inemrest-content-desc">
      <img src="{{asset('source/images/Line 8.png')}}" style="height: 190px; max-height: auto;">
    </div>

    <div class="col-md-3 inemrest-content-desc" style="flex: none; max-width: 33%;">
      <p class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
        63
      </p>
      <p class="inemrest-alpha">
        Outlets
      </p>
    </div>

    <div class="inemrest-content-desc">
      <img src="{{asset('source/images/Line 8.png')}}" style="height: 190px; max-height: auto;">
    </div>

    <div class="col-md-3 inemrest-content-desc" style="flex: none; max-width: 33%;">
      <p class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
        500,000+
      </p>
      <p class="inemrest-alpha">
        Servings each month
      </p>
    </div>
  </div>

  <div class="col-md-12" style="
    display: flex; position: relative; top: -500px">
    <div class="col-md-4" style="text-align: -webkit-center;">
      <img style="width: 150px; height: 150px;     position: relative;
      top: -20px; left: 100px;" src="{{asset('source/images/Rectangle51.png')}}">
    </div>
    <div class="col-md-4" style="text-align: -webkit-center; ">
    <div style="background: rgba(255, 255, 255, 0.35);
    border-radius: 30px; width: 200px; height: 230;">
      <img style="width: 150px; height: 150px;" src="{{asset('source/images/Rectangle52.png')}}">
    </div>
    </div>
    <div class="col-md-4" style="text-align: -webkit-center;">
      <img style="width: 150px; height: 150px;     position: relative;
      top: -20px; right: 100px" src="{{asset('source/images/Rectangle54.png')}}">
    </div>
  </div>
</div> --}}
{{-- <section class="u-clearfix u-section-3 home-banner" id="sec-cc1a">
  <div class="carousel-brands">
      <div class="carousel-body slider-for">
        <div class="carousel-item-1">
          <img class="d-block w-100" src="{{asset('images/assets/home/s4-bg-sfm.png')}}" alt="First slide">
          <div class="content-1">
            <h1>PT Sriboga Flour Mill</h1>

            <div class="inemrest-content">
              <div class="inemrest-content-desc">
                <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                  41,853
                </h1>
                <h2 class="inemrest-alpha">
                  m3 of factory area
                </h2>
              </div>
              <div class="inemrest-content-desc">
              
                <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                  1,850
                </h1>
                <h2 class="inemrest-alpha">
                  Tons of wheat processed daily
                </h2>
              </div>
              <div class="inemrest-content-desc">
                <h1 class="inemrest-number" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">
                  700+
                </h1>
                <h2 class="inemrest-alpha">
                  Employees
                </h2>
              </div>
            </div>


            <div class="btn-banner">
              <a href="{{url('/sriboga-flour-mill')}}" data-page-id="1697802618" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1">Learn More</a>
            </div>            

          </div>
        </div>

        <div class="carousel-item-1">
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


            <div class="btn-banner">
              <a href="{{url('/sarimelati-kencana')}}" data-page-id="1697802618" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1">Learn More</a>
            </div>            

          </div>
        </div>

        <div class="carousel-item-1">
          <img class="d-block w-100" src="/source/images/banner1.png" alt="First slide">
          <div class="content-1">
            <h1>PT Sriboga Marugame Indonesia</h1>

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


            <div class="btn-banner">
              <a href="{{url('/sriboga-marugame-indonesia')}}" data-page-id="1697802618" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1">Learn More</a>
            </div>            

          </div>
        </div>

        <div class="carousel-item-1">
          <img class="d-block w-100" src="/source/images/Rectangle 3 (1).png" alt="First slide">
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


            <div class="btn-banner">
              <a href="{{url('/mulia-inti-pangan')}}" data-page-id="1697802618" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1">Learn More</a>
            </div>            

          </div>
        </div>

      </div>

    <div class="inemrest-content-img ">
      <div class="slider-nav">

        <div class="inemrest-content-img-1">
          <div class="inemrest-content-img-1-smk">
            <img src="{{asset('images/assets/companies/crsl-sfm.png')}}">
          </div>
        </div>

        <div class="inemrest-content-img-1">
          <div class="inemrest-content-img-1-smk">
            <img src="{{asset('images/assets/companies/crsl-smk.png')}}">
          </div>
        </div>

        <div class="inemrest-content-img-1">
          <div class="inemrest-content-img-1-smk">
            <img src="{{asset('images/assets/companies/crsl-smi.png')}}">
          </div>
        </div>

        <div class="inemrest-content-img-1">
          <div class="inemrest-content-img-1-smk">
            <img src="{{asset('images/assets/companies/crsl-mip.png')}}">
          </div>
        </div>

      </div>
    </div>

  </div>
</section> --}}
@endsection

@section('script')
  {{-- <script class="u-script" type="text/javascript" src="{{asset('source/jquery.js')}}" defer=""></script> --}}
  <script class="u-script" type="text/javascript" src="{{asset('source/nicepage.js')}}" defer=""></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  {{-- <script type="text/javascript" src="https:://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> --}}
  {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}


  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js" integrity="sha512-yrjEr6HY46i3hW7imuklZtRM7q1wyNUz8smKl2130OHTFHGbXGpHN4nYxrIeu0uJprDsLhycYY+xQ368d9OiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

  <script>

$(document).ready(function(){
    // Event for pushed the video
    $('#carouselExampleIndicators').carousel({
        pause: true,
        interval: false
    });
});

// $(document).ready(function () {
//     $('.slider-for').slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     arrows: false,
//     fade: true,
//     asNavFor: '.slider-nav'
//   });
// });

// $(document).ready(function () {
//   $('.slider-nav').slick({
//     infinite: true,
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     asNavFor: '.slider-for',
//     dots: false,
//     arrows: true,
//     prevArrow:"<img class='a-left c-c prev slick-prev' src='../source/images/Vector 4.png'>",
//     nextArrow:"<img class='a-right c-c next slick-next' src='../source/images/Vector 3.png'>",
//     centerMode: true,
//     focusOnSelect: true,
//     responsive: [
//       { breakpoint: 1024,
//         settings: {
//           slidesToShow: 3,
//           slidesToScroll: 1,
//           infinite: true,
//           dots: false
//         }},
//         { breakpoint: 768,
//         settings: {
//           slidesToShow: 3,
//           slidesToScroll: 1,
//           infinite: true,
//           dots: false
//         }},
//         { breakpoint: 480,
//         settings: {
//           slidesToShow: 3,
//           slidesToScroll: 1,
//           infinite: true,
//           dots: false
//         }}
//     ]
//   });
// });


// $(document).ready(function () {
// $('.responsive').slick({
//     autoplay: false,
//     dots: false,
//     infinite: true,
//     speed: 300,
//     slidesToShow: 1,
//     slidesToScroll: 1,
//   responsive: [
//     {
//       breakpoint: 1024,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         infinite: true,
//         dots: true
//       }
//     },
//     {
//       breakpoint: 600,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     }
//   ]
// });
// });

  </script>

@endsection('script') 