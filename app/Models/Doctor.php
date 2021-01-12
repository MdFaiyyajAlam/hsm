<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function patients()
    {
        return $this->hasMany('App\Models\Patient','id','doctor_id');
    }



}
