<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AboutUs extends Model
{
    use HasFactory;
    
    // About Us Models
    protected $table = 'ctn_about';
    protected $appends = ["image_url"];
    public $timestamps = false;
    public $incrementing = false;
    protected $dates = ['created_time', 'updated_time', 'deleted_time', 'published_date'];
    protected $fillable =[
        'mission1_txt', 'mission2_txt', 'mission3_txt', 'vision1_txt', 'vision2_txt', 'vision3_txt', 'quote_txt', 'url_slug', 'title_tag', 'canonical_tag', 'meta_description', 'meta_keyword', 'created_time', 'created_by', 'updated_time', 'updated_by', 'deleted_time', 'deleted_by'
    ];

    public function getImageUrlAttribute()
    {
        if (empty($this->image)) {
            return url('cms/images/samples/no-image.svg');
        } else {
            return Storage::url($this->image);
        }
    }
}

