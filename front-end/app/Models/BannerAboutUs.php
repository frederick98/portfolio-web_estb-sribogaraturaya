<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerAboutUs extends Model
{
    use HasFactory;
    
    protected $table = 'ctn_banner_about';
    protected $dates = ['created_time', 'updated_time', 'deleted_time'];
}
