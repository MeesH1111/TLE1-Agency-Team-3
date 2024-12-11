<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function vacancies(): HasMany
    {
        return $this->hasMany(Vacancy::class, 'company_id');
    }
}
