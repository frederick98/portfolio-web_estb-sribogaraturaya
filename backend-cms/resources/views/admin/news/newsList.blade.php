@extends('layouts.app')

@section('title', 'News & Insights')

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
                        <li class="news breadcrumb-item"><a href="{{url('/news-insight')}}">News & Insight</a></li>
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

    <div class="news container-fluid">
        <div class="news card card-default" style="margin: 15px 15px 15px 15px;">
            <!-- Header News Insight -->
            <!-- <div class="news card card-default" style="margin: 15px 15px 15px 15px;"> -->
            <div class="news-header card-header">
                <div class="row">
                    <div class="col-sm-2">
                        <h1>Total data :
                            <span>{{$totalArticle}} Data(s)</span>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-banner form-group">
                            <div class="banner input-group input-group-sm">
                                <input type="search" class="form-control form-control-sm" placeholder="search with title" value="">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-sm btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="input-news form-group" style="display: flex;">
                            <div class="news-sort form-group col-md-3">
                                {{-- <h1>Order By:</h1> --}}
                                <select class="news select2" style="width: 100%; height: 35px;">
                                    <option selected>Category</option>
                                    <option>Date</option>
                                </select>
                            </div>
                            <div class="news-sort form-group col-md-3">
                                {{-- <h1>Order By:</h1> --}}
                                <select class="news select2" style="width: 100%; height: 35px;">
                                    <option selected>Topic</option>
                                    <option>Date</option>
                                </select>
                            </div>
                            <div class="news-sort form-group col-md-3">
                                {{-- <h1>Order By:</h1> --}}
                                <select class="news select2" style="width: 100%; height: 35px;">
                                    <option selected>Status</option>
                                    <option>Date</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a type="button" href="{{url('/news-insight/category')}}" class="news btn-block btn-lg">Category</a>
                        <a type="button" href="{{url('news-insight/layout')}}" class="news-layout btn-block btn-lg" style="display:none">Page Layout</a>
                    </div>
                    <div class="col-md-2">
                        <a type="button" href="{{url('/news-insight/topic')}}" class="news btn-block btn-lg">Topic</a>
                        <a type="button" href="{{url('news-insight/create')}}" class="news btn-block btn-lg">Add</a>
                    </div>
                </div>
            </div>
            <div class="news-body card-body">
                <!-- row 1 -->
                <div class="row">
                    @foreach($article as $items)
                        <div class="col-md-4">
                            <!-- Widget: user widget style 2 -->
                            <div class="news-banner-body card card-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="news-banner-body widget-user-header"
                                    style="background: url('{{$items->image_url}}'); background-size: 100%; background-repeat: no-repeat">
                                </div>
                                <div class="news-banner-body card-header">
                                    <h1>{{($items->title)}}</h1>
                                    <h2>{{$items->published_date->format('d F Y h:m')}}</h2>
                                </div>
                                <div class="news-banner-body card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="news-s description-block">
                                                <p>Status</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="news-r description-block">
                                                <p>{{(($items->status) == 0)? 'Unpublished': 'Published'}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="__overlay">
                                    <div class="overlay__text">
                                        <a type="button" data-value="{{$items->id}}" data-toggle="modal" data-target="#confirmModal" href="#"><i class="fas fa-trash-alt"></i></a>
                                        <a type="button" href="{{url('/news-insight/edit', [$items->id])}}" class="btn btn-outline-light">Update</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
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
@endsection

@section('third_party_scripts')
<script>
    // deletion modals
    $('#confirmModal').on('shown.bs.modal', function (e) {
        var btn = $(e.relatedTarget);
        $('#deleteForm').attr('action', '/news-insight/delete/' + btn.data('value'));
    });
</script>
@endsection