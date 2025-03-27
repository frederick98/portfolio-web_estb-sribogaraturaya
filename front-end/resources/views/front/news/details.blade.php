@extends('layouts.app')

@section('title', $item->title )

@section('metaTitle')
    <meta name="title" content="{{($item->title_tag)}}">
@endsection

@section('metaKeyword')
    <meta name="keywords" content="{{($item->meta_keyword)}}">
@endsection

@section('metaDesc')
    <meta name="description" content="{{($item->meta_description)}}">
@endsection

@section('css') 
	<link rel="stylesheet" href="{{asset('css\newsDetail.css')}}" media="screen" />  
    <link href="{{ asset('vendor/tagsinput/tagsinput.css') }}">
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center news-header">
                <div class="col-md-9">
                    <div class="row">
                        <nav class="breadcrumb-details" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">{{($item->cName)}}</a></li>
                            <li class="breadcrumb-item"><a href="#">{{($item->tName)}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{($url)}}">{{($item->title)}}</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row justify-content-center">
                        <img style="width: 100%" src="{{asset('images/assets/layout/hline-yellow.png')}}" >
                    </div>
                </div>
            </div>
            <div class="row justify-content-center news-content">
                <div class="col-md-6">
                    <div class="row news-content-img">
                        <img src="{{ env('APP_BACKEND').($item->image)}}" alt="{{($item->alt_text)}}">
                    </div>
                    <div class="row news-content-cat">
                        <p>{{($item->cName)}} | {{$item->tName}}</p>
                    </div>
                    <div class="row news-content-title">
                        <h1 class="">{{($item->title)}}</h1>
                    </div>
                    <div class="row news-content-date">
                        <p class="">{{($item->published_date->format('d F Y'))}}</p>
                    </div>
                    <div class="row news-content-detail">
                        {!! $item->detail !!}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center news-footer">
                <div class="col-md-9">
                    <div class="row justify-content-center">
                        <img style="width: 100%" src="{{asset('images/assets/layout/hline-yellow.png')}}" >
                    </div>
                    <div class="row justify-content-between">
                <div class="insight-detail-footer-tags" style="display: flex">
                    <div class="col-md-8">
                        <div class="insight-detail-footer-tags-left" >
                            <p>Tags</p>
                            <div class="row">
                                {{-- @foreach (explode(',', $item->hashtag) as $tag)
                                <div class="col-md-5 mb-2">
                                    <span style="width: 100%;
                                    border-radius: 100px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;" type="button" class="badge footer-tags" disabled>
                                    {{ $tag }}
                                </span>
                                </div>
                                 @endforeach --}}
                                 <div class="col-md-4">
                                    <button type="button" class="btn footer-tags" disabled>
                                        Media
                                    </button>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn footer-tags" disabled>
                                        CSR
                                    </button>
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn footer-tags" disabled>
                                        Education
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="insight-detail-footer-tags-right" style="float: right">
                            <p>Share</p>
                            <div class="right-links">
                                <div class="col-md-3">
                                    <a href="http://www.facebook.com/share.php?u={{($url)}}"><i  class="logo-socmed-fb fa-brands fa-facebook-square"></i></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="whatsapp://send?text=I'm sharing this URL with you: {{($url)}}"><i  class="logo-socmed-wa fa-brands fa-whatsapp-square"></i></i></a>
                                </div>
                                <div class="col-md-3">
                                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" data-size="large" data-text="Check this out:" data-url="{{$url}}" data-show-count="false"><i  class="logo-socmed-twitter fa-brands fa-twitter-square"></i></i></a>
                                    <!-- <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-text="Check this out:" data-url=$url data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section>
        <div class="container">
            <div class="insight-detail">
                <div class="insight-detail-title col-md-12">
                    <nav class="breadcrumb-details" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{($item->cName)}}</a></li>
                        <li class="breadcrumb-item"><a href="#">{{($item->tName)}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{($url)}}">{{($item->title)}}</a></li>
                        </ol>
                    </nav>
                    <img src="{{asset('source/images/Line 10.png')}}">
                </div>
                <div class="insight-detail-content">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <div class="idcd">
                                <img src="{{asset($item->image)}}" alt="article image">
                                <div class="idcd-desc">
                                    <div>
                                        <div class="idcd-desc-tags" style="display: inline-flex; margin-bottom: 15px; margin-top: 50px;">
                                            <h5>{{($item->cName)}}</h5>
                                            <h5> | </h5>
                                            <h5>{{($item->tName)}}</h5>
                                        </div>
                                        <h1 class="idcd-desc-title">{{($item->title)}}</h1>
                                        <h5 class="idcd-desc-publish-date">{{($item->published_date->format('d F Y'))}}</h5>
                                        <p style="font-family: 'Lato';
                                        font-style: normal;
                                        font-weight: 400;
                                        font-size: 21px;
                                        line-height: 130%;
                                        letter-spacing: 0.05em;
                                        color: #307430;">{{($item->detail)}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="insight-detail-footer col-md-12">
                    <img src="{{asset('source/images/Line 10.png')}}">
                    <div class="insight-detail-footer-tags" style="display: flex">
                        <div class="col-md-6">
                            <div class="insight-detail-footer-tags-left" >
                                <p>Tags</p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <button type="button" class="btn footer-tags" disabled>
                                            Children
                                        </button>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="button" class="btn footer-tags" disabled>
                                            CSR
                                        </button>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="button" class="btn footer-tags" disabled>
                                            Education
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="insight-detail-footer-tags-right" style="float: right">
                                <p>Share</p>
                                <div class="right-links">
                                    <div class="col-md-3">
                                        <a href="http://www.facebook.com/share.php?u={{($url)}}"><i  class="logo-socmed-fb fa-brands fa-facebook-square"></i></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="whatsapp://send?text=I'm sharing this URL with you: {{($url)}}"><i  class="logo-socmed-wa fa-brands fa-whatsapp-square"></i></i></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" data-size="large" data-text="Check this out:" data-url=$url data-show-count="false"><i  class="logo-socmed-twitter fa-brands fa-twitter-square"></i></i></a>
                                        <!-- <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-text="Check this out:" data-url=$url data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection


@section('script')
    <script class="u-script" type="text/javascript" src="{{asset('source/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('source/nicepage.js')}}" defer=""></script>
    <script src="{{ asset('vendor/tagsinput/tagsinput.js')}}"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v13.0" nonce="GafgZc3r"></script>
    <script>
        $url = URL::current();
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection