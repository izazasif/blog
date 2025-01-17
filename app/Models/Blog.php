<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = [
     'image','writer_name','blog_titile','blog_description','status','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
