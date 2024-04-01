<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;
    protected $table = 'applies';
    protected $fillable = [
     'f_name','l_name','email','phone_number','cv_file','job_id',
    ];

    public function career()
    {
        return $this->belongsTo('App\Models\Career','job_id');
    }
}
