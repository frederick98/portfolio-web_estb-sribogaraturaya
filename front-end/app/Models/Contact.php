<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'inquiry_contact';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'name', 'email', 'phone', 'message', 'created_time', 'created_by'
    ];
}
