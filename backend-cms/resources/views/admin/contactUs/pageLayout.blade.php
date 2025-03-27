@extends('layouts.app')

@section('title', 'Contacts Page Layout')

@section('third_party_stylesheets')
    <link href="{{ asset('css/news.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="news breadcrumb float-sm-left">
                        <li class="news breadcrumb-item"><a href="{{url('/contact-us')}}">Contact Us</a></li>
                        <li class="news breadcrumb-item"><a href="{{url('/contact-us/page-layout')}}">Page Layout</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="news container-fluid">
        <div class="news card card-default" style="margin: 15px 15px 15px 15px;">
            <form class="" method="post" action="/contact-us/page-layout">
                @csrf
                <div class="news-header card-header">
                    @include('layouts.seo')
                </div>
                <div class="news-body card-body">
                    <div class="col-sm-2 float-right">
                        <button type="submit" class="btn btn-block btn-lg float-right btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection