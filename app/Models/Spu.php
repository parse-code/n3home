<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spu extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function specs()
    {
        return $this->hasMany(Sku::class);
    }
}
