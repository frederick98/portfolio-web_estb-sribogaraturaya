@extends('layouts.app')

@section('title', 'Our Stories')

@section('third_party_stylesheets')
    <link href="{{ asset('css/banner.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="banner container-fluid">
        <!-- Content Header -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="banner breadcrumb float-sm-left">
                            <li class="banner breadcrumb-item"><a href="{{url('stories')}}">Our Stories</a></li>
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

        <!-- Main content -->
        <section class="content">
            <div class="header container-fluid">
                <div class="card card-default">
                    <!-- <form action="enhanced-results.html"> -->
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-2">
                                <h1>Total data:
                                    <span>{{$totalPic}} Data(s)</span>
                                </h1>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-banner form-group">
                                    <div class="banner input-group input-group-lg">
                                        <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here" value="">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-lg btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <a type="button" href="#" class="banner btn-block btn-lg" hidden>Export</a>
                            </div>
                            <div class="col-md-2">
                                <a type="button" href="{{url('stories/create')}}" class="banner btn-block btn-lg">Add</a>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-2 offset-md-2">
                                <div class="banner-sort form-group">
                                    {{-- <h1>Order By:</h1> --}}
                                    <select class="banner select2" style="width: 100%; height: 35px;">
                                        <option selected>Status</option>
                                        <option>Date</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    <!-- </form> -->
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($picture as $items)
                                <div class="col-md-4">
                                    <!-- Widget: user widget style 2 -->
                                    <div class="ui-state-default banner card card-widget widget-user">
                                        <!-- Add the bg color to the header using any of the bg-* classes -->
                                        <div class="widget-user-header"
                                            style="background: url({{$items->image_url}}); background-size: 100%; ">
                                        </div>
                                        <div class="banner card-header">
                                            <h1>{{$items->name}}</h1>
                                            <h2>{{$items->created_time->format('d F Y h:m')}}</h2>
                                        </div>
                                        <div class="banner card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="banner-s description-block">
                                                        <p>Status</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="banner-r description-block">
                                                        <p>{{(($items->status) == 0)? 'Unpublished': 'Published'}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__overlay">
                                            <div class="overlay__text">
                                                <a type="button" data-value="{{$items->id}}" data-toggle="modal" data-target="#confirmModal" href="#"><i class="fas fa-trash-alt"></i></a>
                                                <a type="button" href="{{url('stories/edit', [$items->id])}}" class="btn btn-outline-light">Update</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form method="post" id="deleteForm">
                        {{csrf_field()}}
                        {{method_field("DELETE")}}
                        <div class="modal-header" style="background-color: #dc3545; color: #ffffff;">
                            <h5 class="modal-title modal-danger" id="exampleModalLabel">Delete Business</h5>
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
    </div>
@endsection

@section('third_party_scripts')
<script>
    $( function() {
      $( "#sortable" ).sortable({
          opacity:0.5
      });
    } );
</script>

<script>
    // deletion modals
    $('#confirmModal').on('shown.bs.modal', function (e) {
        var btn = $(e.relatedTarget);
        $('#deleteForm').attr('action', '/stories/delete/' + btn.data('value'));
    });
</script>
@endsection
