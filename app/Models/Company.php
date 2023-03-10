<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'company_users')->withPivot('role');
    }

    public function products()
    {
        return $this->hasMany(Spu::class);
    }
}
