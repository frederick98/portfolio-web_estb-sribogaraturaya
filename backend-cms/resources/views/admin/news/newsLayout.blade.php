@extends('layouts.app')

@section('third_party_stylesheets')
<link href="{{ asset('css/news.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <ol class="news breadcrumb float-sm-left">
                <li class="news breadcrumb-item"><a href="{{url('news-insight')}}">News & Insight</a></li>
                <li class="banner breadcrumb-item active">Layout</li>
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

<div class="news container-fluid">
    <div class="news card card-default">

        <!-- Overview -->
        <div class="news card card-default" style="margin: 15px 15px 15px 15px;">
            <div class="news-card card-header">
                <h1>
                    Overview
                </h1>
            </div>
            <div class="news-card card-body">
                <div class="news-card-content card-default">
                    <div class="news-input-h col-md-6" style="display: block">
                        <div class="banner-input form-group">
                            <label for="selecttime">Overview Title 1 <span style="color:#d9534f">(*)</span></label>
                            <input type="text" name="judul" class="form-control" id="judul" placeholder="type title..." autocomplete="off" value="{{old('judul')}}">
                        </div>
                        <div class="banner-input form-group">
                            <label for="selecttime">Overview Description <span style="color:#d9534f">(*)</span></label>
                            <input type="text" name="judul" class="form-control" id="judul" placeholder="type title..." autocomplete="off" value="{{old('judul')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Overview -->

        <!-- SEO -->
        <div class="card card-default" style="margin: 15px 15px 15px 15px">
            <div class="news-card card-header">
                <h1>
                    SEO
                </h1>
            </div>
            <div class="news-card card-body">
                <div class="news-card-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="news-input form-group">
                                <label for="selecttime">URL Slug <span style="color:#d9534f">(*)</span></label>
                                <input type="text" name="judul" class="form-control" id="judul" placeholder="ipmixplan-international-stopthesetback-fundraising" autocomplete="off" value="{{old('judul')}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="news-input form-group">
                                <label for="selecttime">Title Tag <span style="color:#d9534f">(*)</span></label>
                                <input type="text" name="judul" class="form-control" id="judul" placeholder="IPMIxPLAN International: #StopTheSetback Fundraising" autocomplete="off" value="{{old('judul')}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="news-input form-group">
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

        <div class="news-create card-footer">
            <div class="col-md-2 offset-10">
              <a type="button" href="#" class="btn btn-block btn-lg float-right" >Submit</a>
            </div>
      </div>
    </div>
</div>
@endsection