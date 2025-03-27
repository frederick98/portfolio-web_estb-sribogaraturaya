<section>
    <div class="achievements">
        <div class="row justify-content-center">
            <div class="companies-header-logo col-md-6">
                <img style="width: 100%" src="{{asset('images/assets/layout/hline-yellow.png')}}" >
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="achievement-title">Achievements</h2>
            </div>
        </div>
        <div class="container">
            <div class="row achievement-slider">
                @foreach($achievement as $items)
                    <div class="col-md-12">
                        <div class="row my-3 justify-content-center">
                            <img class="achievement-img" alt="{{ $items->alt_text }}" src="{{ env('APP_BACKEND').($items->image)}}" >
                        </div>
                        <div class="row my-1 justify-content-center">
                            <p class="achievement-name">{{($items->organization)}}</p>
                        </div>
                        <div class="row my-1 justify-content-center" style="padding: 0 5% 0 0;">
                            <p class="achievement-text">{{($items->reward)}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- <div class="row achievement-slider">
                <div class="col-md-12">
                    <div class="row my-3 justify-content-center">
                        <img class="achievement-img" src="{{asset('images/assets/about/crsl-img1.png')}}" >
                    </div>
                    <div class="row my-1 justify-content-center">
                        <p class="achievement-name">UNICEF</p>
                    </div>
                    <div class="row my-1 justify-content-center" style="padding: 0 5% 0 0;">
                        <p class="achievement-text">Certificate of Appreciation for PT Sriboga Flour Mill</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row my-3 justify-content-center">
                        <img class="achievement-img" src="{{asset('images/assets/about/crsl-img2.png')}}" >
                    </div>
                    <div class="row my-1 justify-content-center">
                        <p class="achievement-name">Asia Franchise</p>
                    </div>
                    <div class="row my-1 justify-content-center" style="padding: 0 5% 0 0;">
                        <p class="achievement-text">Franchise of the Year 2019 for PT Sarimelati Kencana Tbk</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row my-3 justify-content-center">
                        <img class="achievement-img" src="{{asset('images/assets/about/crsl-img3.png')}}" >
                    </div>
                    <div class="row my-1 justify-content-center">
                        <p class="achievement-name">U.S Wheat Association</p>
                    </div>
                    <div class="row my-1 justify-content-center" style="padding: 0 5% 0 0;">
                        <p class="achievement-text">The Cleanest and Best Run Mill in South East Asia in 2000 for PT Sriboga Flour Mill</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row my-3 justify-content-center">
                        <img class="achievement-img" src="{{asset('images/assets/about/crsl-img4.png')}}" >
                    </div>
                    <div class="row my-1 justify-content-center">
                        <p class="achievement-name">FEBP</p>
                    </div>
                    <div class="row my-1 justify-content-center" style="padding: 0 5% 0 0;">
                        <p class="achievement-text">Gold Medal for Excellence in Business Practice Serial no. 046 in 2003 for PT Sriboga Flour Mill</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row my-3 justify-content-center">
                        <img class="achievement-img" src="{{asset('images/assets/about/crsl-img5.png')}}" >
                    </div>
                    <div class="row my-1 justify-content-center">
                        <p class="achievement-name">Ministry of Manpower of The Republic of Indonesia</p>
                    </div>
                    <div class="row my-1 justify-content-center" style="padding: 0 5% 0 0;">
                        <p class="achievement-text">Certificate of Appreciation for Occupational Safety & Health Management System in 2022 for PT Sriboga Flour Mill</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row my-3 justify-content-center">
                        <img class="achievement-img" src="{{asset('images/assets/about/crsl-img6.png')}}" >
                    </div>
                    <div class="row my-1 justify-content-center">
                        <p class="achievement-name">Indonesian Ulema Council</p>
                    </div>
                    <div class="row my-1 justify-content-center" style="padding: 0 5% 0 0;">
                        <p class="achievement-text">First Halal Certification in Indonesia for an Udon Restaurant in 2015 for PT Sriboga Marugame Indonesia</p>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- <div class="container">
            <div class="row achievement-slider">
                <div class="col-md-12">
                    <div class="row my-3 justify-content-center">
                        <img class="achievement-img" src="{{asset('images/assets/about/crsl-img1.png')}}" >
                    </div>
                    <div class="row my-1 justify-content-center">
                        <p class="achievement-name">UNICEF</p>
                    </div>
                    <div class="row my-1 justify-content-center" style="padding: 0 5% 0 0;">
                        <p class="achievement-text">Certificate of Appreciation for PT Sriboga Flour Mill</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row my-3 justify-content-center">
                        <img class="achievement-img" src="{{asset('images/assets/about/crsl-img2.png')}}" >
                    </div>
                    <div class="row my-1 justify-content-center">
                        <p class="achievement-name">Asia Franchise</p>
                    </div>
                    <div class="row my-1 justify-content-center" style="padding: 0 5% 0 0;">
                        <p class="achievement-text">Franchise of the Year 2019 for PT Sarimelati Kencana Tbk</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row my-3 justify-content-center">
                        <img class="achievement-img" src="{{asset('images/assets/about/crsl-img3.png')}}" >
                    </div>
                    <div class="row my-1 justify-content-center">
                        <p class="achievement-name">U.S Wheat Association</p>
                    </div>
                    <div class="row my-1 justify-content-center" style="padding: 0 5% 0 0;">
                        <p class="achievement-text">The Cleanest and Best Run Mill in South East Asia in 2000 for PT Sriboga Flour Mill</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row my-3 justify-content-center">
                        <img class="achievement-img" src="{{asset('images/assets/about/crsl-img4.png')}}" >
                    </div>
                    <div class="row my-1 justify-content-center">
                        <p class="achievement-name">FEBP</p>
                    </div>
                    <div class="row my-1 justify-content-center" style="padding: 0 5% 0 0;">
                        <p class="achievement-text">Gold Medal for Excellence in Business Practice Serial no. 046 in 2003 for PT Sriboga Flour Mill</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row my-3 justify-content-center">
                        <img class="achievement-img" src="{{asset('images/assets/about/crsl-img5.png')}}" >
                    </div>
                    <div class="row my-1 justify-content-center">
                        <p class="achievement-name">Ministry of Manpower of The Republic of Indonesia</p>
                    </div>
                    <div class="row my-1 justify-content-center" style="padding: 0 5% 0 0;">
                        <p class="achievement-text">Certificate of Appreciation for Occupational Safety & Health Management System in 2022 for PT Sriboga Flour Mill</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row my-3 justify-content-center">
                        <img class="achievement-img" src="{{asset('images/assets/about/crsl-img6.png')}}" >
                    </div>
                    <div class="row my-1 justify-content-center">
                        <p class="achievement-name">Indonesian Ulema Council</p>
                    </div>
                    <div class="row my-1 justify-content-center" style="padding: 0 5% 0 0;">
                        <p class="achievement-text">First Halal Certification in Indonesia for an Udon Restaurant in 2015 for PT Sriboga Marugame Indonesia</p>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="container">
            <div class="row justify-content-evenly achievement-slider">
                <div class="col-md-3">
                    <div class="row my-3 justify-content-center">
                        <img class="achievement-img" src="{{asset('images/assets/about/s8-img1.png')}}" >
                    </div>
                    <div class="row my-1 justify-content-center">
                        <p class="achievement-name">UNICEF</p>
                    </div>
                    <div class="row my-1 justify-content-center" style="padding: 0 5% 0 0;">
                        <p class="achievement-text">Certificate of Appreciation for PT Sriboga Flour Mill</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row my-3 justify-content-center">
                        <img class="achievement-img" src="{{asset('images/assets/about/s8-img2.png')}}" >
                    </div>
                    <div class="row my-1 justify-content-center">
                        <p class="achievement-name">Asia Franchise</p>
                    </div>
                    <div class="row my-1 justify-content-center" style="padding: 0 5% 0 0;">
                        <p class="achievement-text">Franchise of the Year 2019 for PT Sarimelati Kencana Tbk</p>
                    </div>
                </div>
            </div>
        </div> -->
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
    <style>
        .achievements {
            margin: 2% 0 5% 0;
        }
        .row.achievement-slider {
            max-width: 1220px;
            margin: auto;
        }
        .achievements .achievement-title {
            padding-bottom: 2.5%;
            margin: 40px auto 0;
            font-family: "Open Sans";
            font-style: normal;
            font-weight: 700;
            font-size: 48px;
            line-height: 99.18%;
            display: block;
            align-items: center;
            text-align: center;
            color: #307430;
        }
        .achievements .achievement-img {
            width: auto;
            height: 100px;
        }
        .achievements .achievement-name {
            font-family: "Lato";
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 125%;
            text-align: center;
            letter-spacing: 0.05em;
            color: #307430;
        }
        .achievements .achievement-text {
            font-family: "Lato";
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 125%;
            /* or 22px */
            text-align: center;
            letter-spacing: 0.05em;
            color: #307430;
        }
        .achievements .achievementItems {
            padding: 10px;
            max-width: 100%;
        }
        .slick-slide {
            width: auto;
        }
        /* [Mobile Responsive] */
        @media (max-width: 480px) {
            .achievements .achievement-title {
                font-size: 32px;
            }
            .achievements .achievement-img {
                width: auto;
                height: 80px;
            }
            .achievements .achievement-name {
                font-size: 16px;
            }
            .achievements .achievement-text {
                font-size: 16px;
            }
        }
    </style>
</section>

<script>
    $(document).ready(function () {
        $('.achievement-slider').slick({
            adaptiveHeight: true,
            autoplay:true,
            arrows: false,
            autoplaySpeed: 0,
            speed: 2500,
            infinite: true,
            focusOnSelect: false,
            cssEase: 'linear',
            draggable: true,
            infinite:true,
            pauseOnHover: true,
            slidesToShow: 4,
            slidesToScroll:1,
            responsive: [{
                breakpoint: 480,
                settings:{
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    swipeToSlide: true,
                    speed: 3000,
                }},
            ]
        });
    });
</script>