<!-- SEO -->
<section>
    <div class="card card-default" style="margin: 15px 15px 15px 15px">
        <div class="card-header">
            <h1 id="seo-title">SEO</h1>
        </div>
        <div class="card-body">
            <div class="seo-content" id="seo-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-input form-group">
                            <label for="selecttime">URL Slug <span style="color:#d9534f">(*)</span></label>
                            <input type="text" name="url_slug" class="form-control" id="url_slug" autocomplete="url_slug" value="{{old('url_slug', @$first->url_slug)}}" readonly>
                        </div>
                    </div>
                    <!-- <div class="col-md-12">
                    <div class="banner-input form-group">
                        <label for="selecttime">Canonical Tag<span style="color:#d9534f">(*)</span></label>
                        <input type="text" name="canonical_tag" class="form-control" id="canonical_tag" value="{{old('canonical_tag', @$first->canonical_tag)}}" autocomplete="canonical_tag" required>
                    </div>
                    </div> -->
                    <div class="col-md-12">
                        <div class="banner-input form-group">
                            <label for="selecttime">Title Tag <span style="color:#d9534f">(*)</span></label>
                            <input type="text" name="title_tag" class="form-control" id="title_tag" autocomplete="title_tag" value="{{old('title_tag', @$first->title_tag)}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="banner-input form-group">
                            <label for="selecttime">Meta Description <span style="color:#d9534f">(*)</span></label>
                            <textarea rows="5" class="form-control" id="metaDesc" name="meta_description">{{old('meta_description', @$first->meta_description)}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        #seo-title{  
            font-family: "Open Sans";
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 32px;
            align-items: center;
            letter-spacing: 0.5px;
            color: #307430;
        }
    </style>
</section>

<script>
</script>
