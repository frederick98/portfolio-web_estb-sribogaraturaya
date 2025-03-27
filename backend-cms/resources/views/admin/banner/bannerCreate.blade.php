@extends('layouts.app')

@section('title', 'Add Banner')

@section('third_party_stylesheets')
  <link href="{{ asset('css/banner.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" />
@endsection

@section('content')
  <div class="banner container-fluid">
    <!-- Content Header -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <ol class="banner breadcrumb float-sm-left">
                  <li class="banner breadcrumb-item"><a href="{{url('banner')}}">Banner</a></li>
                  <li class="banner breadcrumb-item active">Add Banner</li>
                </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="content"> -->
    <div class="container-fluid">
      <form method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="card card-default">
          <div class="banner-create card-header">
            <h3 class="card-title offset-4">Add Banner</h3>
            {{-- <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div> --}}
          </div>
          <div class="card-body">
            <div class="banner-card-content card-body">
              <div class="row">
                <div class="banner-create-image form-group col-md-6" style="height: 350px;">
                  <!-- <label for="exampleInputEmail1"></label>
                  <div class="uploadImages input-group">
                    <span class="input-group-btn">
                      <a id="add" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                      </a>
                    </span>
                    <input hidden id="thumbnail" class="form-control" type="text" name="image">
                  </div>
                  <div id="holder" style="margin-top:15px;max-height:100px;"></div> -->
                      <!-- <label for="selecttime">Image <span style="color:#d9534f">*</span></label> -->
                      <input type="file" name="image"  accept="image/*" class="dropify"  data-max-file-size="2M" data-height="333"  />
                </div>
                <div class="banner-input-h col-md-6" style="display: block">
                  <div class="banner-input form-group">
                    <label for="selecttime">Order <span style="color:#d9534f">(*)</span></label>
                    <select name="kategori" class="form-control" disabled>
                      <option value="">Auto</option>
                      <option value="">1</option>
                    </select>
                  </div>
                  <div class="banner-input form-group">
                    <label for="selecttime">Title <span style="color:#d9534f">(*)</span></label>
                    <input type="text" name="name" class="form-control" id="name" maxlength="100" placeholder="type title..." autocomplete="off" value="{{old('name')}}" required>
                  </div>
                  <div class="banner-input form-group">
                    <label for="selecttime">Redirect URL <span style="color:#d9534f">(*)</span></label>
                    <input type="url" name="url" class="form-control" maxlength="100" id="url" placeholder="type redirect url..." autocomplete="off" value="{{old('url')}}" required>
                  </div>
                  <div class="banner-input form-group">
                    <label for="selecttime">Status <span style="color:#d9534f">(*)</span></label>
                    <div class="banner-input" style="display: flex; position: relative; left: 14px;" required>
                      <div class="banner-input-radio col-2">
                        <input class="form-check-input" type="radio" name="status" value="1">
                        <label class="form-check-label">Publish</label>
                      </div>
                      <div class="banner-input-radio col-2">
                        <input class="form-check-input" type="radio" name="status" value="0">
                        <label class="form-check-label">Unpublish</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="banner-create card-footer">
            <div class="col-md-2 offset-10">
              <button type="submit" class="btn btn-block btn-lg float-right btn-success">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('third_party_scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous"></script>
  <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
  <script type="text/javascript">
      $(document).ready(function() {
          // prevent "ENTER" key being pressed anywhere
          $(window).keydown(function(event){
              if(event.keyCode == 13) {
                  event.preventDefault();
                  return false;
              }
          });

          // dropify images
          var folder = 'banner';
          $(document).ready(function(){
              $('.dropify').dropify({
              });
          });

          // automatically add prefix to url
          $("#url").change(function() {
              if (!/^https*:\/\//.test(this.value)) {
                  this.value = "https://" + this.value;
              }
          });
      });
      
      // file manager
      $('#add').filemanager('image');
      $('#add').filemanager('file');
  </script>
@endsection