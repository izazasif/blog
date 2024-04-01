<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $table = 'testimonials';
    protected $fillable = [
     'testimonial_logo','testimonial_titile','testimonial_company_name','testimonial_description','status','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
