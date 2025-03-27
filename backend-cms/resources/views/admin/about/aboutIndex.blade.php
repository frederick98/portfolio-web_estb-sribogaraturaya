@extends('layouts.app')

@section('title', 'About Us')

@section('third_party_stylesheets')
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="about breadcrumb float-sm-left">
                        <li class="about breadcrumb-item"><a href="{{url('/about-us')}}">About Us</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    @if(Session::has('status'))
        <div class="alert alert-success alert-dismissible fade show">
            {{Session::get('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(Session::has('deleted'))
        <div class="alert alert-danger alert-dismissible fade show">
            {{Session::get('deleted')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="about container-fluid">
        <div class="about card card-default">
            <div class="card card-default" style="margin: 15px 15px 15px 15px;">
                <div class="about-banner card-header">
                    <h1>Banner</h1>
                </div>
                <div class="about-banner card-body">
                    <div class="about-banner-header">
                        <div class="row">
                            <div class="col-sm-2">
                                <h1>Total data :
                                    <span>{{$totalBanner}} Data(s)</span>
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
                                <a type="button" href="{{url('about-us/add-banner')}}" class="banner btn-block btn-lg">Add</a>
                            </div>
                        </div>
                    </div>
                    <section class="content">
                        <div class="about-banner-body">
                            <div class="row">
                                @foreach($banner as $items)
                                    <div class="col-md-3">
                                        <div class="about-banner-body card card-widget widget-user">
                                            <div class="about-banner-body widget-user-header" style="background: url({{$items->image_url}}); background-size: 100%; "></div>
                                            <!-- <div class="about-banner-body widget-user-header" style="background: url('./img/assets/Banner/notfound-banner.png'); background-size: 100%; "></div> -->
                                            <div class="about-banner-body card-header">
                                                <h1>{{$items->name}}</h1>
                                                <h2>{{$items->created_time->format('d F Y h:m')}}</h2>
                                            </div>
                                            <div class="about-banner-body card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="about-s description-block">
                                                            <p>Status</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="about-r description-block">
                                                            <p>{{(($items->status) == 0)? 'Unpublished': 'Published'}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="__overlay">
                                                <div class="overlay__text">
                                                    <a type="button" data-value="{{$items->id}}" data-toggle="modal" data-target="#confirmModal" href="#"><i class="fas fa-trash-alt"></i></a>
                                                {{-- <a type="button" href="{{url('banner/edit-banner')}}" class="btn btn-outline-light">Update</a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form method="post" id="deleteForm">
                            {{csrf_field()}}
                            {{method_field("DELETE")}}
                            <div class="modal-header" style="background-color: #dc3545; color: #ffffff;">
                                <h5 class="modal-title modal-danger" id="exampleModalLabel">Delete Banner</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to delete this data? This process cannot be undone.</p>
                            </div>
                            <div class="modal-footer">
                                <a role="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</a>
                                <button class="btn btn-danger delBtn"  role="button" type="submit" name="delBtn">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <form method="post">
                {{csrf_field()}}
                <!-- Our Mission -->
                <div class="card card-default" style="margin: 15px 15px 15px 15px;">
                    <div class="about-mission card-header">
                        <h1>Our Mission</h1>
                    </div>
                    <div class="about-mission card-body">
                        <div class="about-mission-content">
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="about-mission-content-left">
                                        <img src="{{asset('./img/assets/about/s2-icon1.png')}}">
                                    </div>
                                </div>
                                <div class="col-md-11">
                                    <div class="banner-input form-group">
                                        <label class="about-label" for="selecttime">Mission 1 <span style="color:#d9534f">(*)</span></label>
                                        <input type="text" name="mission1_txt" class="form-control" id="mission1_txt" autocomplete="mission1_txt" value="{{$first->mission1_txt}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-mission-content">
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="about-mission-content-left">
                                        <img src="{{asset('./img/assets/about/s2-icon2.png')}}">
                                    </div>
                                </div>
                                <div class="col-md-11">
                                    <div class="banner-input form-group">
                                        <label for="selecttime">Mission 2 <span style="color:#d9534f">(*)</span></label>
                                        <input type="text" name="mission2_txt" class="form-control" id="mission2_txt" autocomplete="mission2_txt" value="{{$first->mission2_txt}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-mission-content">
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="about-mission-content-left">
                                        <img src="{{asset('./img/assets/about/s2-icon3.png')}}">
                                    </div>
                                </div>
                                <div class="col-md-11">
                                    <div class="banner-input form-group">
                                        <label for="selecttime">Mission 3 <span style="color:#d9534f">(*)</span></label>
                                        <input type="text" name="mission3_txt" class="form-control" id="mission3_txt" autocomplete="mission2_txt" value="{{$first->mission3_txt}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Our Values -->
                <div class="card card-default" style="margin: 15px 15px 15px 15px;">
                    <div class="about-value card-header">
                        <h1>Our Values</h1>
                    </div>
                    <div class="about-value card-body">
                        <div class="about-value-content-img">
                            <img src="{{asset('./img/assets/about/s3-img.webp')}}">
                        </div>
                        {{-- content img --}}
                        <div class="about-value-content-visi" style="margin-top: 30px">
                            <div class="about-mission-content">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="about-mission-content-left">
                                            <img src="{{asset('./img/assets/about/s3-icon1.png')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="banner-input form-group">
                                            <label for="selecttime">Vision 1 <span style="color:#d9534f">(*)</span></label>
                                            <input type="text" name="vision1_txt" class="form-control" id="vision1_txt" autocomplete="vision1_txt" value="{{$first->vision1_txt}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-mission-content">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="about-mission-content-left">
                                            <img src="{{asset('./img/assets/about/s3-icon2.png')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="banner-input form-group">
                                            <label for="selecttime">Vision 2 <span style="color:#d9534f">(*)</span></label>
                                            <input type="text" name="vision2_txt" class="form-control" id="vision2_txt" autocomplete="vision2_txt" value="{{$first->vision2_txt}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-mission-content">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="about-mission-content-left">
                                            <img src="{{asset('./img/assets/about/s3-icon3.png')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-11">
                                        <div class="banner-input form-group">
                                            <label for="selecttime">Vision 3 <span style="color:#d9534f">(*)</span></label>
                                            <input type="text" name="vision3_txt" class="form-control" id="vision3_txt" autocomplete="vision3_txt" value="{{$first->vision3_txt}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-mission-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="selecttime">Quote <span style="color:#d9534f">(*)</span></label>
                                            <textarea rows="5" class="form-control" id="quote_txt" name="quote_txt">{{$first->quote_txt}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEO -->
                <div class="card card-default" style="margin: 15px 15px 15px 15px">
                    <div class="about-seo card-header">
                        <h1>SEO</h1>
                    </div>
                    <div class="about-seo card-body">
                        <div class="about-seo-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="banner-input form-group">
                                        <label for="selecttime">URL Slug <span style="color:#d9534f">(*)</span></label>
                                        <input type="text" name="url" class="form-control" id="url" autocomplete="url" value="{{$first->url_slug}}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="banner-input form-group">
                                        <label for="selecttime">Title Tag <span style="color:#d9534f">(*)</span></label>
                                        <input type="text" name="metaTitle" class="form-control" id="metaTitle" autocomplete="metaTitle" value="{{$first->title_tag}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="banner-input form-group">
                                        <label for="selecttime">Meta Description <span style="color:#d9534f">(*)</span></label>
                                        <textarea rows="5" class="form-control" id="metaDesc" name="metaDesc">{{$first->meta_description}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- seo card card-default --}}
                <div class="card-body">
                    <div class="col-sm-2 float-right">
                        <button type="submit" class="banner btn-block btn-lg btn-success">Update</a>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection


@section('third_party_scripts')
    <script type="text/javascript">
        $( function() {
        $( "#sortable" ).sortable({
            opacity:0.5
        });
        } );

        // deletion modals
        $('#confirmModal').on('shown.bs.modal', function (e) {
            var btn = $(e.relatedTarget);
            $('#deleteForm').attr('action', '/about-us/delete-banner/' + btn.data('value'));
        });
    </script>
@endsection