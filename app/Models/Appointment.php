<?php

namespace App\Models;

use App\Models\Traits\BelongsToCompany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    use BelongsToCompany;

    protected $guarded = [];

    public function spu()
    {
        return $this->belongsTo(Spu::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
