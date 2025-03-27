<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Achievement extends Model
{
    use HasFactory;
    protected $table = 'ctn_achievement';
    protected $appends = ["image_url"];
    public $timestamps = false;
    public $incrementing = false;
    protected $dates = ['created_time', 'updated_time', 'deleted_time'];
    protected $fillable =[
        'organization', 'image', 'reward', 'alt_text', 'status', 'created_time', 'created_by', 'updated_time', 'updated_by', 'deleted_time', 'deleted_by'
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
