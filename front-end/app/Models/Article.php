<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    // Article Models
    protected $table = 'ctn_article';
    public $incrementing = false;
    protected $dates = ['created_time', 'updated_time', 'deleted_time', 'published_date'];
    protected $fillable =[
        'id', 'id_topic', 'id_category', 'alt_text', 'hashtag', 'image', 'title', 'short_description', 'detail', 'url_slug', 'title_tag', 'meta_description', 'meta_keyword', 'published_date', 'status', 'created_time', 'created_by', 'updated_time', 'updated_by', 'deleted_time', 'deleted_by'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function category() {
        return $this->belongsTo('App\Models\ArticleCategory');
    }
}
