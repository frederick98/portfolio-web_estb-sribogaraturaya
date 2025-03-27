<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleTopic extends Model
{
    use HasFactory;
    
    // ArticleTopic Models
    protected $table = 'm_topic';
    public $incrementing = false;
    public $timestamps = false;
    protected $dates = ['created_time', 'updated_time', 'deleted_time', 'published_date'];
    protected $fillable =[
        'name', 'status', 'created_time', 'created_by', 'updated_time', 'updated_by', 'deleted_time', 'deleted_by'
    ];

    public function articles() {
        return $this->hasMany('App\Models\Article');
    }
}
