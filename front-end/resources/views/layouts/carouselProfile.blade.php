<section>
    <div class="row">
        <div class="companies">
            <ul class="companies-profile">
                <div class="d-flex justify-content-evenly">
                    <li class="{{(Route::current()->getName() == 'ourCompany-smk')? 'active-picked' : ''}}" >
                        <a href="{{url('/sarimelati-kencana')}}" class="companies-profile-img">
                            <img class="companies-profile-img" alt="Pizza Hut logo" src="{{asset('images/assets/companies/crsl-smk.png')}}">
                        </a>
                    </li>
                    <li class="{{(Route::current()->getName() == 'ourCompany-smi')? 'active-picked' : ''}}">
                        <a href="{{url('/sriboga-marugame-indonesia')}}" class="companies-profile-img">
                            <img class="companies-profile-img" alt="Marugame Udon black and white logo" src="{{asset('images/assets/companies/crsl-smi.png')}}">
                        </a>
                    </li>
                    <li class="{{(Route::current()->getName() == 'ourCompany-sfm')? 'active-picked' : ''}}">
                        <a href="{{url('/sriboga-flour-mill')}}" class="companies-profile-img">
                            <img class="companies-profile-img" alt="
                            Sriboga Flour Mill logo" src="{{asset('images/assets/companies/crsl-sfm.png')}}">
                        </a>
                    </li>
                    <li class="{{(Route::current()->getName() == 'ourCompany-mip')? 'active-picked' : ''}}">
                        <a href="{{url('/mulia-inti-pangan')}}" class="companies-profile-img">
                            <img class="companies-profile-img" alt="Mulia Inti Pangan logo" src="{{asset('images/assets/companies/crsl-mip.png')}}">
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
    <!-- <div class="companies-profile">
        <div class="row">
            <div class="col-md-3" style="background-color: #FFF5CE; border-radius: 20px;">
                <a href="{{url('/sarimelati-kencana')}}" class="companies-profile-pizza">
                    <img class="companies-profile-img" src="{{asset('images/assets/companies/crsl-smk.png')}}">
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{url('/sriboga-marugame-indonesia')}}" class="companies-profile-smi">
                    <img class="companies-profile-img" src="{{asset('images/assets/companies/crsl-smi.png')}}">
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{url('/sriboga-flour-mill')}}" class="companies-profile-sfm">
                    <img class="companies-profile-img" src="{{asset('images/assets/companies/crsl-sfm.png')}}">
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{url('/mulia-inti-pangan')}}" class="companies-profile-mip">
                    <img class="companies-profile-img" src="{{asset('images/assets/companies/crsl-mip.png')}}">
                </a>
            </div>
        </div>
    </div> -->
</section>

<script>
	<link rel="stylesheet" href="{{asset('css/companies.css')}}" media="screen" />  
	<link rel="stylesheet" href="{{asset('source/Companies_SMK.css')}}" media="screen" />  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</script>