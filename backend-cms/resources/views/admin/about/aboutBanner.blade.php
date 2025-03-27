@extends('layouts.app')

@section('third_party_stylesheets')
<link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endsection

@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <ol class="about breadcrumb float-sm-left">
                <li class="about breadcrumb-item"><a href="{{url('about-us')}}">About Us</a></li>
                <li class="about breadcrumb-item"><a href="{{url('about-us/update')}}">Update</a></li>
                <li class="about breadcrumb-item active">Add Banner</li>
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

  <div class="about container-fluid">
    <div class="about card card-default">

        <!-- Banner -->
        <div class="card card-default" style="margin: 15px 15px 15px 15px">
            <div class="about-banner card-header">
                <h1>
                    Add Banner
                </h1>
            </div>
            <!-- card header -->
            <div class="about-banner card-body">
              <div class="banner-card-content card-default">
                <form style="display: flex">
                    <div class="banner-create-image form-group col-md-6" style="height: 350px;">
                        <label for="exampleInputEmail1"></label>
                        <div class="uploadImages">
                            <div class="subUploads">
                                <i class="fa-solid fa-cloud-arrow-up">
                                </i>
                                <span>Click here to upload your image</span>
                            </div>
                            <input type="hidden" name="gambar" value="upload">
                        </div>
                    </div>
                    <div class="banner-input-h col-md-6" style="display: block">
                        <div class="banner-input form-group">
                            <label for="selecttime">Order <span style="color:#d9534f">(*)</span></label>
                            <select name="kategori" class="form-control">
                                <option value="">Auto</option>
                                    
                                        <option value="">1</option>
                                    
                            </select>
                        </div>
                        <div class="banner-input form-group">
                            <label for="selecttime">Title <span style="color:#d9534f">(*)</span></label>
                            <input type="text" name="judul" class="form-control" id="judul" placeholder="type title..." autocomplete="off" value="{{old('judul')}}">
                        </div>
                        <div class="banner-input form-group">
                            <label for="selecttime">Redirect URL <span style="color:#d9534f">(*)</span></label>
                            <input type="text" name="judul" class="form-control" id="judul" placeholder="type redirect url..." autocomplete="off" value="{{old('judul')}}">
                        </div>
                        <div class="banner-input form-group">
                            <label for="selecttime">Status <span style="color:#d9534f">(*)</span></label>
                            <div class="banner-input" style="display: flex; position: relative;
                            left: 14px;">
                                <div class="banner-input-radio col-4">
                                    <input class="form-check-input" type="radio" name="radio1">
                                    <label class="form-check-label">Publish</label>
                                </div>
                                <div class="banner-input-radio">
                                    <input class="form-check-input" type="radio" name="radio1">
                                    <label class="form-check-label">Unpublish</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                {{-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div> --}}
            </div>
            <div class="banner-create card-footer">
                <div class="col-md-2 offset-10">
                  <a type="button" href="#" class="btn btn-block btn-lg float-right" >Submit</a>
                </div>
            </div>
            </div>
            <!-- Card body -->
        </div>
        <!-- End Banner -->

    </div>
  </div>

  @endsection