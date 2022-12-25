<?php

namespace App\Models;

use App\Models\Traits\BelongsToCompany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spu extends Model
{
    use HasFactory;
    use BelongsToCompany;

    protected $guarded = [];

}
