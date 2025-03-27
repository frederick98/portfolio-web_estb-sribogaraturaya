@extends('layouts.app')

@section('third_party_stylesheets')
<link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endsection

@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <ol class="about breadcrumb float-sm-left">
                <li class="about breadcrumb-item"><a href="{{url('about')}}">About Us</a></li>
                <li class="about breadcrumb-item active">Update</li>
              </ol>
        </div>
        {{-- <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Advanced Form</li>
          </ol>
        </div> --}}
      </div>
    </div><!-- /.container-fluid -->
  </section>

<div class="about container-fluid">
    <div class="about card card-default">

        <!-- Banner -->
        <div class="card card-default" style="margin: 15px 15px 15px 15px">
            <div class="about-banner card-header">
                <h1>
                    Banner
                </h1>
            </div>
            <div class="about-banner card-body">
                <div class="about-banner-header">
                    <div class="row">
                        <div class="col-sm-2">
                            <h1>Total data :
                                <span>2 Data</span>
                            </h1>
                        </div>
                        <div class="col-sm-8">
                            <div class="input-banner form-group">
                                <div class="banner input-group input-group-lg">
                                    <input type="search" class="form-control form-control-lg" placeholder="search with title" value="">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-lg btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <a type="button" href="{{url('about-us/update/banner')}}" class="banner btn-block btn-lg">Add</a>
                        </div>
                    </div>
                </div>
                <section class="content">
                <div class="about-banner-body">
                    <div class="row">
                        <div class="col-md-3">
                            <!-- Widget: user widget style 2 -->
                            <div class="about-banner-body card card-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="about-banner-body widget-user-header"
                                style="background: url('./img/assets/Banner/notfound-banner.png'); background-size: 100%; ">
                                </div>
                                <div class="about-banner-body card-header">
                                    <h1>Banner 1</h1>
                                    <h2>15 August 2020 10:00</h2>
                                </div>
                                <div class="about-banner-body card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <div class="about-s description-block">
                                        <p>Status</p>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                    <!-- /.col -->
                                    <div class="col-sm-8">
                                    <div class="about-r description-block">
                                        <p>Published</p>
                                    </div>
                                    <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                </div>
        
                                <div class="__overlay">
                                    <div class="overlay__text">
                                        <a type="button"><i class="fas fa-trash-alt"></i></a>
                                    {{-- <a type="button" href="{{url('banner/edit')}}" class="btn btn-outline-light">Update</a> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- /.widget-user -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3">
                            <!-- Widget: user widget style 2 -->
                            <div class="about-banner-body card card-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="about-banner-body widget-user-header"
                                    style="background: url('./img/assets/Banner/notfound-banner.png'); background-size: 100%; ">
                                </div>
                                <div class="about-banner-body card-header">
                                    <h1>Banner 1</h1>
                                    <h2>15 August 2020 10:00</h2>
                                </div>
                                <div class="about-banner-body card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <div class="about-s description-block">
                                        <p>Status</p>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                    <!-- /.col -->
                                    <div class="col-sm-8">
                                    <div class="about-r description-block">
                                        <p>Published</p>
                                    </div>
                                    <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                </div>
        
                                <div class="__overlay">
                                    <div class="overlay__text">
                                        <a type="button"><i class="fas fa-trash-alt"></i></a>
                                    {{-- <a type="button" href="{{url('banner/edit')}}" class="btn btn-outline-light">Update</a> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- /.widget-user -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3">
                            <!-- Widget: user widget style 2 -->
                            <div class="about-banner-body card card-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="about-banner-body widget-user-header"
                                    style="background: url('./img/assets/Banner/notfound-banner.png'); background-size: 100%; ">
                                </div>
                                <div class="about-banner-body card-header">
                                    <h1>Banner 1</h1>
                                    <h2>15 August 2020 10:00</h2>
                                </div>
                                <div class="about-banner-body card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <div class="about-s description-block">
                                        <p>Status</p>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                    <!-- /.col -->
                                    <div class="col-sm-8">
                                    <div class="about-r description-block">
                                        <p>Published</p>
                                    </div>
                                    <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                </div>
        
                                <div class="__overlay">
                                    <div class="overlay__text">
                                    <a type="button"><i class="fas fa-trash-alt"></i></a>
                                    {{-- <a type="button" href="{{url('banner/edit')}}" class="btn btn-outline-light">Update</a> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- /.widget-user -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3">
                            <!-- Widget: user widget style 2 -->
                            <div class="about-banner-body card card-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="about-banner-body widget-user-header"
                                    style="background: url('./img/assets/Banner/notfound-banner.png'); background-size: 100%; ">
                                </div>
                                <div class="about-banner-body card-header">
                                    <h1>Banner 1</h1>
                                    <h2>15 August 2020 10:00</h2>
                                </div>
                                <div class="about-banner-body card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                    <div class="about-s description-block">
                                        <p>Status</p>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                    <!-- /.col -->
                                    <div class="col-sm-8">
                                    <div class="about-r description-block">
                                        <p>Published</p>
                                    </div>
                                    <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                </div>
        
                                <div class="__overlay">
                                    <div class="overlay__text">
                                    <a type="button" href="{{url('banner/edit')}}"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.widget-user -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                </section>
            </div>
        </div>

        <!-- Our Mission -->
        <div class="card card-default" style="margin: 15px 15px 15px 15px;">
            <div class="about-mission card-header">
                <h1>
                    Our Mission
                </h1>
            </div>
            <div class="about-mission card-body">
                <div class="about-mission-content">
                    <div class="row">
                        <div class="col-md-1">
                            <div class="about-mission-content-left">
                                <img src="{{asset('./img/assets/about/icon-mission.png')}}">
                            </div>
                        </div>
                        <div class="col-md-11">
                            <div class="banner-input form-group">
                                <label for="selecttime">Mission 1 <span style="color:#d9534f">(*)</span></label>
                                <input type="text" name="judul" class="form-control" id="judul" placeholder="Be the food company of choice in services, ingredients, and logistics." autocomplete="off" value="{{old('judul')}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-mission-content">
                    <div class="row">
                        <div class="col-md-1">
                            <div class="about-mission-content-left">
                                <img src="{{asset('./img/assets/about/icon-mission.png')}}">
                            </div>
                        </div>
                        <div class="col-md-11">
                            <div class="banner-input form-group">
                                <label for="selecttime">Mission 2 <span style="color:#d9534f">(*)</span></label>
                                <input type="text" name="judul" class="form-control" id="judul" placeholder="Be the food company of choice in services, ingredients, and logistics." autocomplete="off" value="{{old('judul')}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-mission-content">
                    <div class="row">
                        <div class="col-md-1">
                            <div class="about-mission-content-left">
                                <img src="{{asset('./img/assets/about/icon-mission.png')}}">
                            </div>
                        </div>
                        <div class="col-md-11">
                            <div class="banner-input form-group">
                                <label for="selecttime">Mission 3 <span style="color:#d9534f">(*)</span></label>
                                <input type="text" name="judul" class="form-control" id="judul" placeholder="Be the food company of choice in services, ingredients, and logistics." autocomplete="off" value="{{old('judul')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Values -->
        <div class="card card-default" style="margin: 15px 15px 15px 15px;">
            <div class="about-value card-header">
                <h1>
                    Our Values
                </h1>
            </div>
            <div class="about-value card-body">
                <div class="about-value-content-img">
                    <img src="{{asset('./img/assets/about/about-mission-update.png')}}">
                </div>
                {{-- content img --}}
                <div class="about-value-content-visi" style="margin-top: 30px">
                    <div class="about-mission-content">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="about-mission-content-left">
                                    <img src="{{asset('./img/assets/about/icon-mission.png')}}">
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="banner-input form-group">
                                    <label for="selecttime">Vision 1 <span style="color:#d9534f">(*)</span></label>
                                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Be the food company of choice in services, ingredients, and logistics." autocomplete="off" value="{{old('judul')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-mission-content">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="about-mission-content-left">
                                    <img src="{{asset('./img/assets/about/icon-mission.png')}}">
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="banner-input form-group">
                                    <label for="selecttime">Vision 2 <span style="color:#d9534f">(*)</span></label>
                                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Be the food company of choice in services, ingredients, and logistics." autocomplete="off" value="{{old('judul')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-mission-content">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="about-mission-content-left">
                                    <img src="{{asset('./img/assets/about/icon-mission.png')}}">
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="banner-input form-group">
                                    <label for="selecttime">Vision 3 <span style="color:#d9534f">(*)</span></label>
                                    <input type="text" name="judul" class="form-control" id="judul" placeholder="Be the food company of choice in services, ingredients, and logistics." autocomplete="off" value="{{old('judul')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-mission-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="selecttime">Quote <span style="color:#d9534f">(*)</span></label>
                                    <textarea rows="5" class="form-control" id="inputMessage" placeholder="Be the food company of choice in services, ingredients, and logistics."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- content visi --}}
            </div>
            {{-- values card body --}}
        </div>
        {{-- values card card-default --}}

        <!-- SEO -->
        <div class="card card-default" style="margin: 15px 15px 15px 15px">
            <div class="about-seo card-header">
                <h1>
                    SEO
                </h1>
            </div>
            <div class="about-seo card-body">
                <div class="about-seo-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="banner-input form-group">
                                <label for="selecttime">URL Slug <span style="color:#d9534f">(*)</span></label>
                                <input type="text" name="judul" class="form-control" id="judul" placeholder="ipmixplan-international-stopthesetback-fundraising" autocomplete="off" value="{{old('judul')}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="banner-input form-group">
                                <label for="selecttime">Title Tag <span style="color:#d9534f">(*)</span></label>
                                <input type="text" name="judul" class="form-control" id="judul" placeholder="IPMIxPLAN International: #StopTheSetback Fundraising" autocomplete="off" value="{{old('judul')}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="banner-input form-group">
                                <label for="selecttime">Meta Description <span style="color:#d9534f">(*)</span></label>
                                <textarea rows="5" class="form-control" id="inputMessage" 
                                placeholder="Education cannot wait! Donate now to support children in East Nusa Tenggara (NTT) and West Nusa Tenggara (NTB) to continue their education during the pandemic. Even though the Indonesian Minister of Education and Culture has given permission to do face-to-face teaching and learning activities in the green and yellow zones, concerns over the spread of COVID-19 continue to overshadow teachers and students. In NTT, learning is carried out on a rotating system with a duration of 2"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- seo card card-default --}}
        <div class="card-body">
            <div class="col-sm-2 float-right">
                <a type="button" href="#" class="banner btn-block btn-lg">Submit</a>
            </div>
        </div>
    </div>
    {{-- about card card-default --}}
</div>
{{-- about container-fluid --}}

@endsection