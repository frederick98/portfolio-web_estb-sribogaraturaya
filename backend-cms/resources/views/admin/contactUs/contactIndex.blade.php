@extends('layouts.app')

@section('title', 'Contacts Inquiry')

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
                            <span>{{$totalContact}} Data(s)</span>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-banner form-group">
                            <div class="banner input-group input-group-sm">
                                <input type="search" class="form-control form-control-sm" placeholder="search with name" value="">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-sm btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="input-news form-group" style="display: flex;">
                            <div class="input-group">
                                <input type="text" id="reservation" class="form-control float-left">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <!-- <div class="news-sort form-group col-md-3">
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
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a type="button" href="{{url('/contact-us/export')}}" class="news btn-block btn-lg">Export</a>
                        <a type="button" href="{{url('/contact-us/page-layout')}}" class="news-layout btn-block btn-lg">Page Layout</a>
                    </div>
                    <div class="col-md-2">
                        <!-- <a type="button" href="#" class="news btn-block btn-lg">Add</a> -->
                    </div>
                </div>
            </div>
            <div class="news-body card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
                            </div> -->
                            <div class="card-body">
                                <table id="contactTable" class="table responsive table-bordered table-striped">
                                    <thead class="thead-success" style="background-color: green;color: white;">
                                        <tr>
                                            <th>Date Time</th>
                                            <th>Name</th>
                                            <th>Phone No.</th>
                                            <th>E-Mail</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($contact as $con)
                                            <tr>
                                                <td>{{($con->created_time->format('d F Y h:m:s'))}}</td>
                                                <td>{{($con->name)}}</td>
                                                <td>{{($con->phone)}}</td>
                                                <td>{{($con->email)}}</td>
                                                <td>{{($con->message)}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts_head')    
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/latest/css/bootstrap.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
    <!-- <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script> -->
@endsection

@section('third_party_scripts')
    <script>
        $(function () {
            $("#contactTable").DataTable({
                responsive: true,
                lengthChange: false,
                autoWidth: false,
                buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
            })
            .buttons()
            .container()
            .appendTo("#example1_wrapper .col-md-6:eq(0)");
            
            $("#example2").DataTable({
            paging: true,
            lengthChange: false,
            searching: false,
            ordering: true,
            info: true,
            autoWidth: false,
            responsive: true,
            });
        });
        
        //Date range picker
        $('#reservation').daterangepicker()
    </script>
@endsection