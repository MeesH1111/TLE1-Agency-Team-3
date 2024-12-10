<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Waitlist extends Model
{

    protected $fillable = [
        'user_id',
        'vacancy_id'
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function vacancies(): HasMany
    {
        return $this->hasMany(Vacancy::class);
    }
}
