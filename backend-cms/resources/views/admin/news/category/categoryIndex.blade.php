@extends('layouts.app')

@section('title', 'News Category')

@section('third_party_stylesheets')
    <link href="{{ asset('css/masterData.css') }}" rel="stylesheet">
@endsection

@section('scripts_head')
    <!-- datatables css/js -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="news breadcrumb float-sm-left">
                        <li class="news breadcrumb-item"><a href="{{url('/news-insight/category')}}">Master Data Category</a></li>
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
                            <span>{{$totalCategory}} Data(s)</span>
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
                    </div>
                    <div class="col-md-2">
                        <!-- <a type="button" href="{{url('/news-insight/topic')}}" class="news btn-block btn-lg">Topic</a> -->
                        <a type="button" data-toggle="modal" data-target="#createModal" href="#" class="news btn-block btn-lg">Add</a>
                    </div>
                </div>
            </div>
            <div class="news-body card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="tableList" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                                <thead>
                                    <tr>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">Category Name</th>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column descending" aria-sort="ascending">Status</th>
                                        <!-- <th class="sorting" tabindex="0" aria-controls="example2" >Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($category as $items)
                                        <tr class="">
                                            <td class="" tabindex="0">{{$items->name}}</td>
                                            <td class="sorting_1">{{(($items->status)==1 ? 'Active' : 'Non Active') }}</td>
                                            <td>
                                                <button type="button" data-target="#editModal" href="#" class="btn btn-primary editBtn" data-id="{{$items->id}}" value="{{$items->id}}" data-item-id="{{$items->id}}" id="editBtn">Update</button>
                                                <a type="button" data-value="{{$items->id}}" data-toggle="modal" data-target="#confirmModal" href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Rendering engine</th>
                                        <th rowspan="1" colspan="1">Browser</th>
                                        <th rowspan="1" colspan="1">Platform(s)</th>
                                        <th rowspan="1" colspan="1">Engine version</th>
                                        <th rowspan="1" colspan="1">CSS grade</th>
                                    </tr>
                                </tfoot> -->
                            </table>
                            <!-- <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                                <thead>
                                    <tr>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">Rendering engine</th>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column descending" aria-sort="ascending">Browser</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Engine version</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">CSS grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td class="dtr-control" tabindex="0">Other browsers</td>
                                        <td class="sorting_1">All others</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>U</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="dtr-control" tabindex="0">Trident</td>
                                        <td class="sorting_1">AOL browser (AOL desktop)</td>
                                        <td>Win XP</td>
                                        <td>6</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="dtr-control" tabindex="0">Gecko</td>
                                        <td class="sorting_1">Camino 1.0</td>
                                        <td>OSX.2+</td>
                                        <td>1.8</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="dtr-control" tabindex="0">Gecko</td>
                                        <td class="sorting_1">Camino 1.5</td>
                                        <td>OSX.3+</td>
                                        <td>1.8</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="dtr-control" tabindex="0">Misc</td>
                                        <td class="sorting_1">Dillo 0.8</td>
                                        <td>Embedded devices</td>
                                        <td>-</td>
                                        <td>X</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="dtr-control" tabindex="0">Gecko</td>
                                        <td class="sorting_1">Epiphany 2.20</td>
                                        <td>Gnome</td>
                                        <td>1.8</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="dtr-control" tabindex="0">Gecko</td>
                                        <td class="sorting_1">Firefox 1.0</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td>1.7</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="dtr-control" tabindex="0">Gecko</td>
                                        <td class="sorting_1">Firefox 1.5</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td>1.8</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="odd">
                                        <td class="dtr-control" tabindex="0">Gecko</td>
                                        <td class="sorting_1">Firefox 2.0</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td>1.8</td>
                                        <td>A</td>
                                    </tr>
                                    <tr class="even">
                                        <td class="dtr-control" tabindex="0">Gecko</td>
                                        <td class="sorting_1">Firefox 3.0</td>
                                        <td>Win 2k+ / OSX.3+</td>
                                        <td>1.9</td>
                                        <td>A</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Rendering engine</th>
                                        <th rowspan="1" colspan="1">Browser</th>
                                        <th rowspan="1" colspan="1">Platform(s)</th>
                                        <th rowspan="1" colspan="1">Engine version</th>
                                        <th rowspan="1" colspan="1">CSS grade</th>
                                    </tr>
                                </tfoot>
                            </table> -->
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="example2_previous">
                                        <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                    </li>
                                    <li class="paginate_button page-item active">
                                        <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                    </li>
                                    <li class="paginate_button page-item next" id="example2_next">
                                        <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Create Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="post" id="createForm" action="/news-insight/category/create">
                    {{csrf_field()}}
                    <div class="modal-header" style="color: #307430;">
                        <h5 class="modal-title modal-default" id="exampleModalLabel">Create Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="title">Title <span style="color:#d9534f">(*)</span></label>
                                    <input type="text" name="name" class="form-control" maxlength="100" placeholder="Type title" autocomplete="on" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Status <span style="color:#d9534f">(*)</span></label>
                                    <div class="row form-check" style="display: flex; position: relative; left: 14px;" required>
                                        <div class="col-md-4 banner-input-radio">
                                            <input class="form-check-input" type="radio" name="status" value="1">
                                            <label class="form-check-label">Active</label>
                                        </div>
                                        <div class="col-md-4 banner-input-radio ">
                                            <input class="form-check-input" type="radio" name="status" value="0">
                                            <label class="form-check-label">Non Active</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success createBtn"  role="button" type="submit" name="createBtn" id="createBtn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal -->
    <div class="modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="post" id="editForm" action="{{url('/news-insight/category/edit')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @method('PUT')
                    <div class="modal-header" style="color: #307430;">
                        <h5 class="modal-title modal-default" id="exampleModalLabel">Update Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="idKategori" id="idKategori">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="title">Title <span style="color:#d9534f">(*)</span></label>
                                    <input type="text" name="name" class="form-control" id="editName" maxlength="100" placeholder="Type title" autocomplete="on" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>Status <span style="color:#d9534f">(*)</span></label>
                                    <div class="row form-check" style="display: flex; position: relative; left: 14px;" required>
                                        <div class="col-md-4 banner-input-radio">
                                            <input class="form-check-input" type="radio" name="status" id="status" value="1">
                                            <label class="form-check-label">Active</label>
                                        </div>
                                        <div class="col-md-4 banner-input-radio ">
                                            <input class="form-check-input" type="radio" name="status" id="status" value="0">
                                            <label class="form-check-label">Non Active</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success createBtn"  role="button" type="submit" name="createBtn" id="createBtn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="post" id="deleteForm" action="/news-insight/category/delete">
                    {{csrf_field()}}
                    {{method_field("DELETE")}}
                    <div class="modal-header" style="background-color: #dc3545; color: #ffffff;">
                        <h5 class="modal-title modal-danger" id="exampleModalLabel">Delete Category</h5>
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
<!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script> -->

<script>
    // deletion modals
    $('#confirmModal').on('shown.bs.modal', function (e) {
        var btn = $(e.relatedTarget);
        $('#deleteForm').attr('action', '/news-insight/category/delete/' + btn.data('value'));
    });

    $(document).ready(function () {
        // create modal trigger
        $('#addModal').click(function(e){
            e.preventDefault();
            $('#createModal').modal();
        });

        // edit modal trigger
        $(document).on('click', '.editBtn', function() {
            var id = $(this).val();
            // console.log('id=:"' + id);
            $('#editModal').modal('show');

            $.ajax({
                type: "GET",
                url: "/news-insight/category/edit/" + id,
                success: function (response) {
                    // console.log("response: " + JSON.stringify(response));
                    $('#editName').val(response.data.name);
                    if(response.data.status == 1){
                        var value = 1;
                        $("input[name=status][value=" + value + "]").attr('checked', 'checked');
                    } else{
                        var value = 0;
                        $("input[name=status][value=" + value + "]").attr('checked', 'checked');
                    }
                    $('#idKategori').val(response.data.id);
                }
            });
        });
    }); 
</script>
@endsection