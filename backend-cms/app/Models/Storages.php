<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Storages extends Model
{
    use HasFactory;
    protected $table = "storages";
    protected $appends = ["url_path"];

    public function getUrlPathAttribute()
    {
        if (empty($this->path)) {
            return url('cms/images/samples/no-image.svg');
        } else {
            return Storage::url($this->path);
        }
    }

    public static function storedToDb($path, $option)
    {
        $model = new Storages();
        $maxorder = $model->where('option', '=', $option)->max('order');

        $model->option = $option;
        $model->path = $path;
        $model->order = $maxorder + 1;
        $model->save();
        return $model->id;
    }
}
