<?php

namespace App\Models\Traits;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * @mixin Model
 */
trait BelongsToCompany
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
