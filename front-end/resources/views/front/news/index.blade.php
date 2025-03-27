@extends('layouts.app')

@section('title', 'News & Insights | Sriboga Raturaya')

@section('metaTitle')
  <meta name="title" content="News & Insights | Sriboga Raturaya">
@endsection

@section('metaKeyword')
  <meta name="keywords" content="sriboga, pizza hut, marugame udon">
@endsection

@section('metaDesc')
  <meta name="description" content="​Get to know PT Sriboga Raturaya better. Discover and read 
  the latest news and insights from us here.">
@endsection

@section('css') 
	<link rel="stylesheet" href="{{asset('css/news.css')}}" media="screen" />  
	<link rel="stylesheet" href="{{asset('source/nicepage.css')}}" media="screen" />
	<link rel="stylesheet" href="{{asset('source/News.css')}}" media="screen" />  
@endsection


@section('content')
    <section class="u-align-center-xs u-clearfix u-section-1 section-1" id="sec-7794">
        <div class="container news-header">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <h1 class="section-1-title">News & Insights</h1>
                    </div>
                    <div class="row">
                        <h2 class="section-1-subtitle">Get to know PT Sriboga Raturaya better! Discover and read the latest news and insights from us here.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container news-filter">
            <div class="row justify-content-end">
                <!-- <form action="/news/result" method="get"> -->
                    <div class="my-2 col-md-3">
                        <!-- <div class="btn-group">
                          <button class="btn-toggle dropdown" style="width:151px;" type="button">All Articles</button>
                          <ul class="dropdown-menu">
                            @foreach($category as $cat)
                              <li class="dropdown-item" value="{{ $cat->name }}">{{($cat->name)}}</li>
                            @endforeach
                          </ul>
                        </div> -->
                        <div class="dropdown" style="max-height: 60px">
                            <button class="btn-title-article btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
                              All Articles
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                @foreach($category as $cat)
                                    <a type="button" class="dropdown-item" type="submit" name="category" value="{{ $cat->name }}">{{($cat->name)}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="my-2 col-md-3">
                        <div class="dropdown" style="max-height: 60px">
                            <button class="btn-title-article btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
                              All Topics
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              @foreach($topic as $top)
                                <button class="dropdown-item" type="submit" name="topic" value="{{ $top->name }}">{{($top->name)}}</button>
                              @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="my-2 col-md-4">
                      <form action="{{ route('newsIndex') }}" method="get">
                        <div class="form-group has-search" style="border: 1px solid #307430; border-radius: 100px;">
                            <span class="fas fa-search form-control-feedback"></span>
                            <input class="form-control" type="search" value="{{ (request()->query("search") != "") ? request()->query("search") : '' }}" id="search-input" name="search" placeholder="Search for Articles...">
                        </div>
                      </form>
                    </div>
                <!-- </form> -->
            </div>
            </div>
        </div>
      <!-- <div class="news-filter">
        <div class="form" style="">
          <div class="row">
          </div>
        </div>
      </div> -->
      <div class="latest-news-body">
        <div class="container" style="max-width: 1300px">
          <div class="row row-article">
            @foreach($article as $items)
              <div class="col-md-4">
                <div class="ui-state-default latest-news card card-widget widget-user">
                  <div class="latest-news widget-user-header">
                    <img class="card-img-top" src="{{ env('APP_BACKEND').($items->image) }}" alt="{{($items->alt_text)}}">
                  </div>
                  <div class="latest-news card-header">
                    <h2>{{($items->published_date->format('d F Y'))}}</h2>
                    <h2>{{($items->title)}}</h2>
                    <p>{{substr($items->short_description, 0, 150)}}</p> 
                    <a href="{{url('details')}}">More...</a>
                  </div>
                  <div class="card__overlay">
                    <div class="latest-news widget-user-header">
                      <img class="card-img-top" src="{{ env('APP_BACKEND').($items->image) }}" alt="{{($items->alt_text)}}">
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
        </div>
      </div>
    </section>
    {{-- <section class="u-align-center-xs u-clearfix u-section-1" id="sec-7794">
      <div class="u-clearfix u-sheet u-sheet-1" style="margin: 4% 0;min-height: 150px;">
        <h2 class="u-align-left u-custom-font u-text u-text-custom-color-1 u-text-font u-text-1"> News &amp; Insights</h2>
        <h2 class="u-align-left u-custom-font u-font-lato u-text u-text-custom-color-1 u-text-2"> Get to know PT Sriboga Raturaya better! Discover and read the latest news and insights from us here.</h2>
      </div>
      <div class="container" style="padding: 0 0 2% 0">
        <div class="row" style="justify-content: flex-end;">
          <div class="col-md-3">
            <div class="dropdown" style="max-height: 60px">
              <button class="btn-title-article btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
                All Articles
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                @foreach($category as $cat)
                  <button class="dropdown-item" type="button" value="{{ $cat->name }}">{{($cat->name)}}</button>
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="dropdown" style="max-height: 60px">
              <button class="btn-title-article btn-block dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
                All Topics
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                @foreach($topic as $top)
                  <button class="dropdown-item" type="button" value="{{ $top->name }}">{{($top->name)}}</button>
                @endforeach
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group has-search" style="border: 1px solid #307430; border-radius: 100px;">
              <span class="fas fa-search form-control-feedback"></span>
              <input type="text" class="form-control" placeholder="Search for Articles...">
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="news-filter">
        <div class="form" style="">
          <div class="row">
          </div>
        </div>
      </div>
      <div class="latest-news-body">
        <div class="container" style="max-width: 1300px">
          <div class="row row-article">
            @foreach($article as $items)
              <div class="col-md-4">
                <div class="ui-state-default latest-news card card-widget widget-user">
                  <div class="latest-news widget-user-header">
                    <img class="card-img-top" src="{{asset($items->image)}}" alt="Card image cap">
                  </div>
                  <div class="latest-news card-header">
                    <h2>{{($items->published_date->format('d F Y'))}}</h2>
                    <h1>{{($items->title)}}</h1>
                    <p>{{($items->short_description)}}</p>  
                    <a href="{{url('details')}}">More...</a>
                  </div>
                  <div class="card__overlay">
                    <div class="latest-news widget-user-header">
                      <img class="card-img-top" src="{{asset($items->image)}}" alt="Card image cap">
                    </div>
                    <div class="latest-news-overlay card-header">
                      <h2>{{($items->published_date->format('d F Y'))}}</h2>
                      <h1>{{($items->title)}}</h1>
                      <p>{{($items->short_description)}}</p>  
                      <a href="{{url('news/' . $items->url_slug)}}">More...</a>
                    </div>
                    <div class="card__overlay__text">
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>

          <!-- Row 2 -->
          <!-- <div class="row" style="margin-bottom: 50px">
            
            <div class="col-md-4">
              <li class="ui-state-default latest-news card card-widget widget-user">
                <div class="latest-news widget-user-header">
                  <img class="card-img-top" src="{{asset('source/images/news1.png')}}" alt="Card image cap">
                </div>
                <div class="latest-news card-header">
                    <h2>16 September 2020</h2>
                    <h1>IPMIxPLAN International: #StopTheSetback Fundraising</h1>
                    <p>
                      Pendidikan tidak bisa kita tunda! Donasi sekarang untuk 
                      membantu adik-adik kita di NTT & NTB sehingga mereka 
                      bisa melanjutkan pendidikan mereka.
                    </p>  
                    <a href="#">Selengkapnya...</a>
                    <div class="card__overlay">
                      <div class="latest-news widget-user-header">
                        <img class="card-img-top" src="{{asset('source/images/news1.png')}}" alt="Card image cap">
                      </div>
                      <div class="latest-news-overlay card-header">
                        <h2>16 September 2020</h2>
                        <h1>IPMIxPLAN International: #StopTheSetback Fundraising</h1>
                        <p>
                          Pendidikan tidak bisa kita tunda! Donasi sekarang untuk 
                          membantu adik-adik kita di NTT & NTB sehingga mereka 
                          bisa melanjutkan pendidikan mereka.
                        </p>  
                        <a href="#">Selengkapnya...</a>
                      </div>
                      <div class="card__overlay__text">
                      </div>
                    </div>
                </div>
              </li>
            </div>

          </div> -->

          <!-- <a href="News.html" data-page-id="16117874" class="latest-news-body u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-1 u-radius-20 u-text-white u-btn-1">More Stories</a> -->
        </div>
      </div>

        <!-- <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <div class="u-expanded-width u-radius-10 u-shape u-shape-round u-white u-shape-1"></div>
                <img class="u-expanded-width u-image u-image-default u-preserve-proportions u-image-1" src="images/news1.png" alt="" data-image-width="424" data-image-height="288">
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-default u-text-3"> 16 September 2020</p>
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-4"> IPMIxPLAN International: #StopTheSetback Fundraising</p>
                <p class="u-custom-font u-custom-item u-font-lato u-text u-text-custom-color-1 u-text-5"> Pendidikan tidak bisa kita tunda! Donasi sekarang untuk membantu adik-adik kita di NTT &amp; NTB sehingga mereka bisa melanjutkan pendidikan mereka.</p>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-6"> Selengkapnya...</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <div class="u-expanded-width u-radius-10 u-shape u-shape-round u-white u-shape-2"></div>
                <img class="u-expanded-width u-image u-image-default u-preserve-proportions u-image-2" src="images/news2.png" alt="" data-image-width="424" data-image-height="288">
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-default u-text-7"> 15 August 2020</p>
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-8"> BPJAMSOSTEK Bantu 1.000 Masker ke Sriboga Marugame</p>
                <p class="u-custom-font u-custom-item u-font-lato u-text u-text-custom-color-1 u-text-9"> Badan Penyelenggara Jaminan Sosial Ketenagakerjaan (BPJAMSOSTEK) Jakarta Slipi menyerahkan 1.000 masker kepada PT Sriboga Marugame&nbsp;</p>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-10"> Selengkapnya...</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <div class="u-expanded-width u-radius-10 u-shape u-shape-round u-white u-shape-3"></div>
                <img class="u-expanded-width u-image u-image-default u-preserve-proportions u-image-3" src="images/news3.png" alt="" data-image-width="424" data-image-height="288">
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-default u-text-11"> 3 July 2020</p>
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-12"> PT Sarimelati Kencana (PZZA) berhasil menambah 3 outlet baru</p>
                <p class="u-custom-font u-custom-item u-font-lato u-text u-text-custom-color-1 u-text-13"> Sampai dengan Semester I/2020 PT Sarimelati Kencana Tbk (PZZA) telah merealisasikan ekspansinya yaitu melakukan pembukaan outlet baru.</p>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-14"> Selengkapnya...</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <div class="u-expanded-width u-radius-10 u-shape u-shape-round u-white u-shape-4"></div>
                <img class="u-expanded-width u-image u-image-default u-preserve-proportions u-image-4" src="images/news3.png" alt="" data-image-width="424" data-image-height="288">
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-default u-text-15"> 3 July 2020</p>
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-16"> PT Sarimelati Kencana (PZZA) berhasil menambah 3 outlet baru</p>
                <p class="u-custom-font u-custom-item u-font-lato u-text u-text-custom-color-1 u-text-17"> Sampai dengan Semester I/2020 PT Sarimelati Kencana Tbk (PZZA) telah merealisasikan ekspansinya yaitu melakukan pembukaan outlet baru.</p>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-18"> Selengkapnya...</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <div class="u-expanded-width u-radius-10 u-shape u-shape-round u-white u-shape-5"></div>
                <img class="u-expanded-width u-image u-image-default u-preserve-proportions u-image-5" src="images/news3.png" alt="" data-image-width="424" data-image-height="288">
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-default u-text-19"> 3 July 2020</p>
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-20"> PT Sarimelati Kencana (PZZA) berhasil menambah 3 outlet baru</p>
                <p class="u-custom-font u-custom-item u-font-lato u-text u-text-custom-color-1 u-text-21"> Sampai dengan Semester I/2020 PT Sarimelati Kencana Tbk (PZZA) telah merealisasikan ekspansinya yaitu melakukan pembukaan outlet baru.</p>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-22"> Selengkapnya...</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-6">
                <div class="u-expanded-width u-radius-10 u-shape u-shape-round u-white u-shape-6"></div>
                <img class="u-expanded-width u-image u-image-default u-preserve-proportions u-image-6" src="images/news3.png" alt="" data-image-width="424" data-image-height="288">
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-default u-text-23"> 3 July 2020</p>
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-24"> PT Sarimelati Kencana (PZZA) berhasil menambah 3 outlet baru</p>
                <p class="u-custom-font u-custom-item u-font-lato u-text u-text-custom-color-1 u-text-25"> Sampai dengan Semester I/2020 PT Sarimelati Kencana Tbk (PZZA) telah merealisasikan ekspansinya yaitu melakukan pembukaan outlet baru.</p>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-26"> Selengkapnya...</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-7">
                <div class="u-expanded-width u-radius-10 u-shape u-shape-round u-white u-shape-7"></div>
                <img class="u-expanded-width u-image u-image-default u-preserve-proportions u-image-7" src="images/news3.png" alt="" data-image-width="424" data-image-height="288">
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-default u-text-27"> 3 July 2020</p>
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-28"> PT Sarimelati Kencana (PZZA) berhasil menambah 3 outlet baru</p>
                <p class="u-custom-font u-custom-item u-font-lato u-text u-text-custom-color-1 u-text-29"> Sampai dengan Semester I/2020 PT Sarimelati Kencana Tbk (PZZA) telah merealisasikan ekspansinya yaitu melakukan pembukaan outlet baru.</p>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-30"> Selengkapnya...</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-8">
                <div class="u-expanded-width u-radius-10 u-shape u-shape-round u-white u-shape-8"></div>
                <img class="u-expanded-width u-image u-image-default u-preserve-proportions u-image-8" src="images/news3.png" alt="" data-image-width="424" data-image-height="288">
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-default u-text-31"> 3 July 2020</p>
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-32"> PT Sarimelati Kencana (PZZA) berhasil menambah 3 outlet baru</p>
                <p class="u-custom-font u-custom-item u-font-lato u-text u-text-custom-color-1 u-text-33"> Sampai dengan Semester I/2020 PT Sarimelati Kencana Tbk (PZZA) telah merealisasikan ekspansinya yaitu melakukan pembukaan outlet baru.</p>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-34"> Selengkapnya...</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-9">
                <div class="u-expanded-width u-radius-10 u-shape u-shape-round u-white u-shape-9"></div>
                <img class="u-expanded-width u-image u-image-default u-preserve-proportions u-image-9" src="images/news3.png" alt="" data-image-width="424" data-image-height="288">
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-default u-text-35"> 3 July 2020</p>
                <p class="u-custom-item u-text u-text-custom-color-1 u-text-36"> PT Sarimelati Kencana (PZZA) berhasil menambah 3 outlet baru</p>
                <p class="u-custom-font u-custom-item u-font-lato u-text u-text-custom-color-1 u-text-37"> Sampai dengan Semester I/2020 PT Sarimelati Kencana Tbk (PZZA) telah merealisasikan ekspansinya yaitu melakukan pembukaan outlet baru.</p>
                <p class="u-text u-text-custom-color-1 u-text-default u-text-38"> Selengkapnya...</p>
              </div>
            </div>
          </div>
        </div> -->
    </section> --}}
@endsection


@section('script')
    <script class="u-script" type="text/javascript" src="{{asset('source/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('source/nicepage.js')}}" defer=""></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(".btn-toggle").on("click", function() {
            $('.dropdown-menu').toggleClass('open');
        });
        $(".dropdown-menu li").on("click", function() {
            $('.btn-toggle').text($(this).text());
            $('.dropdown-menu').removeClass('open');
        });
    </script>
@endsection('script') 