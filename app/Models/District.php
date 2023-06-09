<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;


    public function province()
    {
        return $this->belongsTo(Province::class, config('vietnam-maps.columns.province_id'), 'id');
    }

    public function wards()
    {
        return $this->hasMany(Ward::class);
    }

    public function userAddress()
    {
        return $this->hasMany(UserAddresses::class);
    }
}
