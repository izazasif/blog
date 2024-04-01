<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsroom extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'newsrooms';
    protected $fillable = [
     'banner','image','newsroom_title','newsroom_description','status','user_id'
    ];

    public function setFilenamesAttribute($value)
    {
        $this->attributes['image'] = json_encode($value);
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
