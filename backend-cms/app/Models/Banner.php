<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'ctn_banner';
    protected $appends = ["image_url"];
    public $timestamps = false;
    public $incrementing = false;
    protected $dates = ['created_time', 'updated_time', 'deleted_time'];
    protected $fillable =[
        'name', 'image', 'url', 'status', 'created_time', 'created_by', 'updated_time', 'updated_by', 'deleted_time', 'deleted_by'
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
            // // http://localhost:8000/storage/banner/... ->> acara/...
            // $path = substr($link, $length);
            // return Storage::url($path);
            return Storage::url($this->image);
        }
    }
}
