@extends('layouts.app')

@section('title', 'My Profile')

@section('content')
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="banner breadcrumb float-sm-left">
                        <li class="banner breadcrumb-item active"><a href="{{url('my-profile')}}">My Profile</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Content Body -->
    <div class="profile container-fluid">
        <form method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-3 container-fluid">
                    <div class="card">
                        <div class="card-img-top">
                            <div class="row user-photo justify-content-center ">
                                <img src="{{asset('img/assets/profile/profile.svg')}}">
                            </div>
                        </div>
                        <div class="card-body">
                            <a type="button" href="#" class="btn btn-success btn-block">Update</a>  
                        </div>
                    </div>
                </div>
                <div class="col-md-8 container-fluid">
                    <div class="card card-default">
                        <div class="card-header">
                            User Information
                        </div>
                        <div class="card-body">
                            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-auto col-sm-auto label-align" for="first-name">Name</label>
                                    <div class="col-md-auto col-sm-auto ">
                                        <input type="text" id="name" placeholder="Super Admin" disabled class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-auto col-sm-auto label-align" for="email">E-Mail</label>
                                    <div class="col-md-auto col-sm-auto ">
                                        <input type="text" id="email" name="email" placeholder="superadmin@sriboga.com" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-auto col-sm-auto label-align" for="role">Role</label>
                                    <div class="col-md-auto col-sm-auto ">
                                        <select type="dropdown" id="role" name="role" disabled class="form-control">
                                            <option>Super Admin</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('third_party_scripts')
<!-- small modal -->
{{-- <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="smallBody">
                <div>
                    <!-- the result to be displayed apply here -->
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <script>
    // display a modal (small modal)
    $(document).on('click', '#smallButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href
            , beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#smallModal').modal("show");
                $('#smallBody').html(result).show();
            }
            , complete: function() {
                $('#loader').hide();
            }
            , error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            }
            , timeout: 8000
        })
    });

</script> --}}
@endsection
