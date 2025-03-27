@extends('layouts.app')

@section('title', 'Edit News {{$first->Title}}')

@section('third_party_stylesheets')
  <link href="{{ asset('css/news.css') }}" rel="stylesheet">
  <link href="{{asset('vendor/tagsinput/tagsinput.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" />
  <link href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
  <style type="text/css">
    .bootstrap-tagsinput .tag {
      margin-right: 2px;
      color: white !important;
      background-color: #0d6efd;
      padding: 0.2rem;
      width: 100%
    }

    .bootstrap-tagsinput  {
      width: 100%;
    }

    .fr-box.fr-basic .fr-element.fr-view {
      font-family: "Lato" !important;
    font-style: normal !important;
    font-weight: 400 !important;
    font-size: 21px !important;
    line-height: 130% !important;
    letter-spacing: 0.05em !important;
    color: #307430 !important;
}

    .news-card-content.card-default {
      margin-bottom: 25px;
    }
  </style>

@if ($errors->has('detail'))
<style>
    .tox.tox-tinymce {
        border-color: red !important;
    }
</style>
@endif
@endsection

@section('content')
  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <ol class="news breadcrumb float-sm-left">
            <li class="news breadcrumb-item"><a href="{{url('/news-insight')}}">News & Insight</a></li>
            <li class="news breadcrumb-item active">Update News</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  
  <div class="news container-fluid col-md-12">
    <form method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="news card card-default">
        <!-- Card 1 -->
        <div class="card card-default" style="margin: 15px 15px 15px 15px">
          <div class="news-card card-header">
            <h1>Edit News</h1>
          </div>
          <div class="news-card card-body">
            <div class="news-card-content card-default">
              <div class="row">
                <div class="news-create-image form-group col-md-6" style="height: 350px;">
                  <div class="news-input form-group">
                      <!-- <label for="selecttime">Image <span style="color:#d9534f">*</span></label> -->
                      <input type="file" name="image" id="image" accept="image/*" data-default-file="{{ $first->image_url }}" class="dropify" data-max-file-size="2M" data-height="333"  />
                  </div>
                </div>
                <div class="news-input-h col-md-6">
                  <div class="banner-input form-group">
                    <label for="selecttime">Title <span style="color:#d9534f">(*)</span></label>
                    <input type="text" name="title" class="form-control" id="title" maxlength="100" placeholder="Type title" autocomplete="off" value="{{$first->title}}" required>
                  </div>
                  <div class="news-input form-group">
                    <label for="selecttime">Category <span style="color:#d9534f">(*)</span></label>
                    <select name="category" class="form-control" placeholder="--Choose Category--" required>
                      @foreach($category as $cat)
                        <option value="{{$cat->id}}" {{($cat->id == $first->idC)? "selected" : "" }}>{{$cat->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="news-input form-group">
                    <label for="selecttime">Topic <span style="color:#d9534f">(*)</span></label>
                    <select name="topic" class="form-control" placeholder="--Choose Topic--" required>
                      @foreach($topic as $top)
                        <option value="{{$top->id}}" {{($top->id == $first->idT) ? "selected" : "" }}>{{$top->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="news-input form-group">
                    <label for="selecttime">Keywords</label>
                    <input type="text" name="hashtag" class="form-control" id="tagsinput" placeholder="Insert your keywords here" autocomplete="tags" value="{{$first->hashtag}}" data-role="tagsinput">
                  </div>
                </div>
              </div>
            </div>
            <div class="news-card-content card-default">
              <label for="selecttime">Publish Date <span style="color:#d9534f">*</span></label>
              <input type="text" id="releasedate" class="form-control @error('release_date') is-invalid @enderror" name="published_date" 
              placeholder="&#xf133; Select Date" value="{{ empty(old('published_date')) ? date('d-m-Y', strtotime($first->published_date)) : old('published_date') }}">
              <div class="form-control-icon">
                  
              </div>
              @error('release_date')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
          </div>
            <div class="news-card-content card-default">
              <label for="selecttime">Short Description <span style="color:#d9534f">(*)</span></label>
                <input type="text" name="shortDesc" class="form-control" id="shortDesc" maxlength="150" value="{{old('short_description', @$first->short_description)}}" autocomplete="shortDesc" required>
            </div>
            <div class="news-card-content card-default">
              <label for="selecttime">Description <span style="color:#d9534f">(*)</span></label>
              <textarea class="form-control" name="detail" id="dark">{{old('detail', @$first->detail)}}</textarea>
            </div>
            <div class="news-card-content card-default">
              <div class="news-input form-group">
                <label for="selecttime">Status <span style="color:#d9534f">(*)</span></label>
                <div class="banner-input" style="display: flex; position: relative; left: 14px;" required>
                  <div class="banner-input-radio col-1">
                    <input class="form-check-input" type="radio" name="status" value="1" {{($first->status=='1')? 'checked' : ""}}>
                    <label class="form-check-label">Publish</label>
                  </div>
                  <div class="banner-input-radio col-1">
                    <input class="form-check-input" type="radio" name="status" value="0" {{($first->status=='0')? 'checked' : ""}}>
                    <label class="form-check-label">Unpublish</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="card card-default" style="margin: 15px 15px 15px 15px">
          <div class="news-card card-header">
            <h1>SEO</h1>
          </div>
          <div class="news-card card-body">
            <div class="news-card-content card-default">
              <div class="row">
                <div class="col-md-12">
                  <div class="banner-input form-group">
                    <label for="selecttime">URL Slug<span style="color:#d9534f">(*)</span></label>
                    <input type="text" name="slug" class="form-control" id="slug" value="{{old('url_slug', @$first->url_slug)}}" autocomplete="slug" required>
                  </div>
                </div>
                <!-- <div class="col-md-12">
                  <div class="banner-input form-group">
                    <label for="selecttime">Canonical Tag<span style="color:#d9534f">(*)</span></label>
                    <input type="text" name="slug" class="form-control" id="slug" value="{{old('canonical_tag', @$first->canonical_tag)}}" autocomplete="slug" required>
                  </div>
                </div> -->
                <div class="col-md-12">
                  <div class="banner-input form-group">
                    <label for="selecttime">Alt Text Banner</label>
                    <input type="text" name="alt_text" class="form-control" id="metaTitle" autocomplete="off" value="{{old('title_tag', @$first->alt_text)}}">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="banner-input form-group">
                    <label for="selecttime">Title Tag</label>
                    <input type="text" name="metaTitle" class="form-control" id="metaTitle" autocomplete="off" value="{{old('title_tag', @$first->title_tag)}}">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="banner-input form-group">
                    <label for="selecttime">Meta Description</label>
                    <textarea rows="5" class="form-control" id="metaDesc" name="metaDesc">{{old('meta_description', @$first->meta_description)}}</textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Content Footer -->
        <div class="news-create card-footer">
          <div class="col-md-2 offset-10">
            <button type="submit" class="btn btn-block btn-lg float-right btn-success">Create News</button>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection

@section('third_party_scripts')
<script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous"></script>
  <script src="{{ asset('vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset('vendor/tagsinput/tagsinput.js')}}"></script>
  <script src="{{ asset('vendor/tinymce/plugins/code/plugin.min.js')}}"></script>
  {{-- <script src="{{ asset('js/summernote-image-attributes.js') }}"></script>  
  <script src="lang/[language-COUNTRY].js"></script> --}}
  <script>
      var document_base_url = "{{ env('APP_URL'); }}"
    if ($("#dark").length > 0) {
    tinymce.init({
        selector: "#dark",
        toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright numlist | link image | code | link', 
        plugins: 'image code lists link',
        menu: {
            format: {
                title: "Format",
                items: "bold italic underline strikethrough superscript subscript | formats | removeformat",
            },
        },
        height: 700,
        image_title: true,
        file_picker_types: "image",
        automatic_uploads: true,
        relative_urls: false,
        remove_script_host: true,
        document_base_url: "http://www.example.com/path1/",
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement("input");
            input.setAttribute("type", "file");
            input.setAttribute("accept", "image/*, image/webp");

            input.onchange = function () {
                var file = this.files[0];

                if (file.size < 500000) {
                    var data = new FormData();
                    data.append("image", file);
                    data.append("folder", folder);
                    data.append("savestorage", false);

                    $.ajax({
                        url: "/upload-image",
                        data: data,
                        contentType: false,
                        processData: false,
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                "content"
                            ),
                        },
                        success: function (url) {
                            console.log(url.url);
                            cb(url.url, { title: file.name });
                        },
                        error: function (resp) {
                            console.log(resp);
                        },
                    });
                } else {
                    Toastify({
                        text: "Maximum size 200Kb",
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: "center",
                        backgroundColor: "#dc3545",
                    }).showToast();
                }
            };

            input.click();
        },
    });
}

  </script>
  <script type="text/javascript">
  // $('#summernote').summernote({
  //   fontSizes: ['8', '9', '10', '11', '12', '14', '18', '21', '24', '36', '48'],
  //         toolbar: [
  //           ['style', ['style']],
  //           ['font', ['bold', 'italic', 'underline', 'clear']],
  //           ['fontsize', ['fontsize']],
  //           ['color', ['color']],
  //           ['para', ['ul', 'ol', 'paragraph']],
  //           ['table', ['table']],
  //           ['insert', ['link', 'picture', 'video']],
  //           ['view', ['fullscreen', 'codeview', 'help']],
  //         ],
  //         imageAttributes: {
  //         	icon: '<i class="note-icon-pencil"/>',
  //       	figureClass: 'figureClass',
  //       	figcaptionClass: 'captionClass',
  //       	captionText: 'Caption Goes Here.',
  //       	manageAspectRatio: true // true = Lock the Image Width/Height, Default to true
  //       },
  //       lang: 'en-US',
  //         popover: {
  //             image: [
  //               ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
  //               ['float', ['floatLeft', 'floatRight', 'floatCenter', 'floatNone']],
  //               ['remove', ['removeMedia']],
  //               ['custom', ['imageAttributes']]
  //             ],
  //             link: [
  //               ['link', ['linkDialogShow', 'unlink']]
  //             ],
  //             table: [
  //               ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
  //               ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
  //             ],
  //             air: [
  //               ['color', ['color']],
  //               ['font', ['bold', 'underline', 'clear']],
  //               ['para', ['ul', 'paragraph']],
  //               ['table', ['table']],
  //               ['insert', ['link', 'picture']]
  //             ]
  //         },
  //       height: 900,
        
  //   });

    // prevent "ENTER" key being pressed anywhere
    $(document).ready(function() {
      $(window).keydown(function(event){
        if(event.keyCode == 13) {
          event.preventDefault();
          return false;
        }
      });
    });

    // bootstrap tags input
    $(function () {
      $('input')
        .on('change', function (event) {
          var $element = $(event.target);
          var $container = $element.closest('.example');

          if (!$element.data('tagsinput')) return;

          var val = $element.val();
          if (val === null) val = 'null';
          var items = $element.tagsinput('items');

          $('code', $('pre.val', $container)).html(
            $.isArray(val)
              ? JSON.stringify(val)
              : '"' + val.replace('"', '\\"') + '"'
          );
          $('code', $('pre.items', $container)).html(
            JSON.stringify($element.tagsinput('items'))
          );
        })
        .trigger('change');
    });

    // file manager
    // $('#add').filemanager('image');
    // $('#add').filemanager('file');
  </script>
  <script>
        // dropify images
        var folder = 'news';
    $(document).ready(function(){
        $('.dropify').dropify({
        });
    });

    $("#releasedate").datepicker({
            format: "dd-mm-yyyy",
            autoclose: true,
    });
  </script>
@endsection