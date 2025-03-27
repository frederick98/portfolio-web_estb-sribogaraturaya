
    {{-- <nav class="navbar" style="sticky: top; position: fixed;"> 
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{asset('source/images/SRRLOGO-9.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar" id="menu">
            <li>
                <a>Home</a>
            </li>        
        </ul>
    </nav> --}}

    <nav role="navigation" class="navbar navbar-expand-lg navbar-light bg-light navbar-default fixed-top" >
      
        <a class="navbar-brand" href="{{url('/')}}">
            <img style="width: 200px" src="{{asset('source/images/SRRLOGO-9.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse mr-auto navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav navbar-space menu-top" >
            <li class="{{ Route::currentRouteNamed('homepage') ? 'active' : ''  }} nav-item">
                <a class="" style="text-decoration: none" href="{{route('homepage')}}">Home</a>
            </li>
            <li class="{{ request()->is('about-us') ? 'active':'' }} nav-item">
                <a class="" style="text-decoration: none" href="{{route('aboutUs')}}">About Us</a>
            </li>
            <li class="{{ request()->is('sarimelati-kencana','sriboga-marugame-indonesia','sriboga-flour-mill','mulia-inti-pangan') ? 'active':'' }} nav-item">
                <a class="" style="text-decoration: none" href="{{route('ourCompany-smk')}}">Our Companies</a>
            </li>
            <!-- <li class="nav-item dropdown {{ request()->is('sarimelati-kencana','sriboga-marugame-indonesia','sriboga-flour-mill','mulia-inti-pangan') ? 'active':'' }}">
                <a class=" dropdown-toggle" style="text-decoration: none" href="#" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Companies</a>
                <div class="dropdown-menu" aria-labelledby="dropdown">
                    <div class="container nav-container" style="width:100%; height:100%">
                        <a class="dropdown-item nav-link" href="{{url('sarimelati-kencana')}}">Sari Melati Kencana</a>
                    </div>
                    <div class="container nav-container">
                        <a class="dropdown-item nav-link" href="{{url('sriboga-marugame-indonesia')}}">Sriboga Marugame Udon</a>
                    </div>
                    <div class="container nav-container">
                        <a class="dropdown-item nav-link" href="{{url('sriboga-flour-mill')}}">Sriboga Flour Mill</a>
                    </div>
                    <div class="container nav-container">
                        <a class="dropdown-item nav-link" href="{{url('mulia-inti-pangan')}}">Mulia Inti Pangan</a>
                    </div>
                </div>
            </li> -->
            <li class="{{ request()->is('investors-relations') ? 'active':'' }} nav-item">
                <a class="" style="text-decoration: none" href="{{url('investors-relations')}}">Investors</a>
            </li>
            <li class="{{ request()->is('news') ? 'active':'' }} nav-item">
                <a class="" style="text-decoration: none" href="{{url('news')}}">News & Insight</a>
            </li>
            <li class="{{ request()->is('contact-us') ? 'active':'' }} nav-item">
                <a class="" style="text-decoration: none" href="{{url('contact-us')}}">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>


<style type="text/css">
    *{
        padding: 0px;
        margin: 0px;
    }

    body {
        padding-top: 85px;
    }

    .navbar {
        background: #ffffff;
        box-shadow: 3px 0px 5px #fff;
        text-align: center;
        padding: 0;
    }

    .navbar-brand img {
        height: auto;
        width: 200px
    }

    .dropdown-menu .container.nav-container a {
        font-family: "Open Sans";
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 22px;
        align-items: center;
        text-align: center;
        color: #307430;
    }

    ul li a{
        display: inline-block;
        list-style-type: none;
        padding: 30px 40px;
        font-family: "Open Sans";
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 22px;
        align-items: center;
        text-align: center;
        color: #307430;
    }

    ul li a:hover {
        color: #ffffff;
        background-color: #307430;
    }

    .navbar-nav > .nav-item.active > a {
        background-color: #307430;
        color: #ffffff;
        font-family: "Open Sans";
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 22px;
        align-items: center;
        text-align: center;
    }
</style>

<script>
    $(document).ready(function () {
        $('ul > li').click(function (e) {
            $('ul > li')
                .removeClass('active');
            $(this).addClass('active');
        });
    });
    // document.addEventListener("DOMContentLoaded", function(){
    //     window.addEventListener('scroll', function() {
    //         if (window.scrollY > 50) {
    //             document.getElementById('navbar_top').classList.add('fixed-top');
    //             // add padding top to show content behind navbar
    //             navbar_height = document.querySelector('.navbar').offsetHeight;
    //             document.body.style.paddingTop = navbar_height + 'px';
    //         } else {
    //             document.getElementById('navbar_top').classList.remove('fixed-top');
    //             // remove padding top from body
    //             document.body.style.paddingTop = '0';
    //         } 
    //     });
    // }); 
</script>