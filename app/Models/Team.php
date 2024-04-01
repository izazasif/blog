<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';
    protected $fillable = [
     'image','members_name','members_designation','members_description','status','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
