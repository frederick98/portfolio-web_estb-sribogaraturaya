<style>
    html, body {
        background-color: rgb(255, 255, 255);
        height: 100vh;
        margin: 0;
    }

    a {
        text-decoration: none;
    }

    /* a:hover {
        text-decoration: none;
    } */


    footer::before {
        content: "";
        /* background-color: #307430; */
        width: 110%;
        height: 110%;
        position: absolute;
        left: -5%;
    }

    .row.first {
        margin-bottom: 50px;
    }


    /* .footer-left-img {
        position: relative;
        bottom: 28px;
        right: 50px;
    }

    .footer-left-address {
        position: relative;
        right: 50px;
    }

    .footer-left-address h2 {
        font-family: 'Open Sans' sans-serif;
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 120%;
        letter-spacing: 0.04em;
        color: #FFFFFF;
    }

    .footer-left-address h3 {
        font-family: 'Open Sans' sans-serif;
        font-style: normal;
        font-weight: 300;
        font-size: 16px;
        line-height: 120%;
        letter-spacing: 0.04em;
        color: #FFFFFF;
    }

    .footer-left-address h2 {
        margin-bottom: 10px;
    }

    .footer-right-socmed-icon  {
        display: flex;
        margin-left: -18px;
    } */
    .footer-logo-socmed{
        list-style:none;
    }
    @media screen and (max-width: 1040px) {
        .footer-left-address {
            right: 40px;
        }
    }

    @media screen and (max-width: 992px) {
        .footer-right-socmed-icon .col-md-1 {
            max-width: 12%;
        }
    }

    @media screen and (max-width: 768px) {
        .footer-right-desc {
            margin-left: -40px;
        }

        .footer-right-socmed {
            margin-left: -40px;
        }
    }

    @media screen and (max-width: 575px) {
        .row.first {
            margin-bottom: 0px;
        }

        .footer-right-desc a {
            margin-bottom: 20px;
        }
    }

    @media screen and (max-width: 425px) {
        footer {
            overflow: hidden;
        }

        .footers {
            background-color: #307430;
            background-image: none;
        }

        .footer-left-img {
            width: 180px
        }

        .footer-left-img img {
            width: 100%

            object-fit: cover;
        }

        .row.first {
            margin-bottom: 0px;
        }

        .footer-right-socmed-icon .col-md-1 {
            max-width: 15%;
        }

        .footer-right-desc a {
            margin-bottom: 20px;
        }

        /* .row.first {
            margin-bottom: 0px;
        }

        .footer-left-img {
            right: 0px;
        }

        .footer-right-desc {
            text-align: center;
        }

        .footer-right-desc a {
            display: block;
            margin-bottom: 15px;
        }

        .footer-left-address {
            right: 0px;
        }

        .footer-right-socmed-icon  {
            display: inline-flex;
            margin-left: 0px;
        } */
    }

    footer {
        /* color: #307430; */
        overflow: hidden;
        position: relative;
        background-image: url(../source/images/footer-logo.png);
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
    .footers {
        width: 100%;
        /* background-color: #307430; */
        padding: 32px;
        margin-top: 35px;
        /* border-radius: 40%; */
        background-image: url(../sources/images/footer-logo.png);
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
    .footers .footer-right{
        /* height:300px; */
    }
    .footers .footer-left .footer-logo-img{
        /* position: relative;
        bottom: 28px;
        right: 50px; */
        width: 256px;
        /* height: 101px; */
        margin: -10% 0 10% 0;
    }

    @media screen and (max-width: 1920px) {
        .footers .footer-left .footer-text-address {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 150%;
            letter-spacing: 0.04em;
            color: #FFFFFF;
            padding-right: 135px;
        }
    }
    .footers .footer-left .footer-text-address {
            padding-right: 85px;
        }
    .footers .footer-right .footer-text-link{
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 600;
        font-size: 14px;
        line-height: 19px;
        display: flex;
        align-items: center;
        color: #FFFFFF;
    }
    .footers .footer-right .footer-text{
        font-family: 'Lato';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 120%;
        letter-spacing: 0.04em;
        color: #FFFFFF;
        margin-top: 30%;
    }
    .footers .footer-right .footer-logo-socmed{
        width: 40px; 
        height: 40px;
        /* display:flex; */
    }
    /* [Mobile Responsive] */
    @media (max-width:480px){
        .footers{  
            background-color: #307430;
            height: 630px;
        }
        .footers .footer-right {
            height: 300px;
            margin: 5% 0 0 0;
        }
        .footers .footer-right .footer-text-link {
            font-size: 18px;
            margin: 3% 0 5% 0;
        }
        .footers .footer-right .footer-text {
            margin: 10% 0 5% 0;
        }
        ul li a {
            padding: 10px 0px;
        }
        .footer-logo-socmed a {
            padding: 10px 20px;
        }
    }
    @media (max-width:380px){
        .footer-logo-socmed a {
            padding: 10px 15px;
        }
    }

</style>

<footer>
    <div class="footers">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 footer-left">
                    <div class="row">
                        <img class="footer-logo-img" alt="Sriboga Raturaya black and white logo" src="{{asset('images/assets/layout/logo-footer-srr.png')}}">
                    </div>
                    <div class="row">
                        <p class="footer-text-address"><b>Plaza Daniprisma 3rd Floor</b></p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="footer-text-address">Jl. Sultan Hasanudin No.47-48, Melawai, Kebayoran Baru, South Jakarta, 12160, Indonesia</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 footer-right">
                    <div class="row justify-content-center">
                        <div class="col-sm-2">
                            <a class="footer-text-link" href="{{url('about-us')}}">About Us</a>
                        </div>
                        <!-- <div class="col-sm-3">
                            <a class="footer-text-link" href="{{url('our-company')}}">Our Companies</a>
                        </div> -->
                        <div class="col-sm-2">
                            <a class="footer-text-link" href="{{url('investors-relations')}}">Investors</a>
                        </div>
                        <div class="col-sm-3">
                            <a class="footer-text-link" href="{{url('news')}}">News & Insights</a>
                        </div>
                        <div class="col-sm-3">
                            <a class="footer-text-link" href="{{url('contact-us')}}">Contact Us</a>
                        </div>
                    </div>
                    <div class="div-connect-with-us row">
                        <div class="col-md-6 align-self-end">
                            <div class="row">
                                <p class="footer-text">Connect with us</p>
                            </div>
                            <div class="row">
                                <ul class="footer-logo-socmed">
                                    <div class="footer-logo-socmed-div d-flex justify-content-left">
                                        <li>
                                            <a class="logo-socmed" href="https://www.instagram.com/sriboga_raturaya"><img class="footer-logo-socmed" alt="Instagram logo" src="{{asset('images/assets/layout/logo-footer-ig.png')}}"></a>
                                        </li>
                                        <li>
                                            <a class="logo-socmed" href="https://www.linkedin.com/company/pt-sriboga-raturaya"><img class="footer-logo-socmed" alt="Linkedin logo" src="{{asset('images/assets/layout/logo-footer-li.png')}}"></a>
                                        </li>
                                        <li>
                                            <a class="logo-socmed" href="https://www.facebook.com/Sriboga-Raturaya-107310531590866/"><img class="footer-logo-socmed" alt="Facebook logo" src="{{asset('images/assets/layout/logo-footer-fb.png')}}"></a>
                                        </li>
                                        <li>
                                            <a class="logo-socmed" href="https://www.youtube.com/channel/UCai1JyzW1vRKNBwfgvXEMmQ"><img class="footer-logo-socmed" alt="Youtube logo" src="{{asset('images/assets/layout/logo-footer-yt.png')}}"></a>
                                        </li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row justify-content-end">
                        <div class="col-md-6 align-self-end">
                            <div class="row">
                                <p class="footer-text">Connect with us</p>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="https://www.instagram.com/sriboga_raturaya"><img class="footer-logo-socmed" src="{{asset('images/assets/layout/logo-footer-ig.png')}}"></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="https://www.linkedin.com/company/pt-sriboga-raturaya"><img class="footer-logo-socmed" src="{{asset('images/assets/layout/logo-footer-li.png')}}"></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="https://www.facebook.com/Sriboga-Raturaya-107310531590866/"><img class="footer-logo-socmed" src="{{asset('images/assets/layout/logo-footer-fb.png')}}"></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="https://www.youtube.com/channel/UCai1JyzW1vRKNBwfgvXEMmQ"><img class="footer-logo-socmed" src="{{asset('images/assets/layout/logo-footer-yt.png')}}"></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</footer>
{{-- <footer>
    <div class="footers">
        <div class="container">
            <!-- Row 1 -->
            <div class="row first">
                <div class="col-md-4">
                    <div class="footer-left-img">
                        <img src="{{asset('images/assets/layout/logo-footer-srr.png')}}">
                    </div>
                </div>
                <div class="col-md-8 justify-content-end">
                    <div class="footer-right-desc">
                        <div class="row">
                            <div class="col-sm-2">
                                <a href="{{url('about-us')}}">About Us</a>
                            </div>
                            <!-- <div class="col-sm-3">
                                <a href="{{url('our-company')}}">Our Companies</a>
                            </div> -->
                            <div class="col-sm-2">
                                <a href="{{url('investors-relations')}}">Investors</a>
                            </div>
                            <div class="col-sm-3">
                                <a href="{{url('news')}}">News & Insights</a>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{url('contact-us')}}">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row 2 -->
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-left-address">
                        <h2>Plaza Daniprisma 3rd Floor</h2>
                        <h3>Jl. Sultan Hasanudin No.47-48, Melawai, Kby. Baru, Jakarta Selatan, DKI Jakarta</h3>
                    </div>
                </div>
                <div class="col-md-8 justify-content-end">
                    <div class="footer-right-socmed">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Connect with us</h2>
                            </div>
                            <div class="col-md-12">
                                <div class="footer-right-socmed-icon">
                                    <div class="col-md-1">
                                        <a href="https://www.instagram.com/sriboga_raturaya"><img style="width: 40px; height: 40px;" src="{{asset('source/images/Rectangle 80.png')}}"></a>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="https://www.linkedin.com/company/pt-sriboga-raturaya"><img style="width: 40px; height: 40px;" src="{{asset('source/images/1.png')}}"></a>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="https://www.facebook.com/Sriboga-Raturaya-107310531590866/"><img style="width: 40px; height: 40px;" src="{{asset('source/images/Rectangle 82.png')}}"></a>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="https://www.youtube.com/channel/UCai1JyzW1vRKNBwfgvXEMmQ"><img style="width: 40px; height: 40px;" src="{{asset('source/images/2.png')}}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> --}}