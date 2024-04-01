<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $table = 'careers';
    protected $fillable = [
     'job_title','category_name','slug','job_description','valid_till','status','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
