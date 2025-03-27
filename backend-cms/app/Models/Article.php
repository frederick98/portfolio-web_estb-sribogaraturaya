<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    // Article Models
    protected $table = 'ctn_article';
    protected $appends = ["image_url"];
    public $timestamps = false;
    public $incrementing = false;
    protected $dates = ['created_time', 'updated_time', 'deleted_time', 'published_date'];
    protected $fillable =[
        'id_topic', 'id_category', 'image', 'alt_text', 'hashtag', 'title', 'short_description', 'detail', 'url_slug', 'title_tag', 'canonical_tag', 'meta_description', 'meta_keyword', 'published_date', 'status', 'created_time', 'created_by', 'updated_time', 'updated_by', 'deleted_time', 'deleted_by'
    ];

    public function getImageUrlAttribute()
    {
        if (empty($this->image)) {
            return url('cms/images/samples/no-image.svg');
        } else {
            // $link = $this->image;
            // $addrLength = Str::length(env('APP_URL'));
            // $prefLength = Str::length('/storage/');
            // $length = $addrLength + $prefLength;
            // // http://localhost:8000/storage/news/... ->> acara/...
            // $path = substr($link, $length);
            // return Storage::url($path);
            return Storage::url($this->image);
        }
    }
}
