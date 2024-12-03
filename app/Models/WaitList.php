<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WaitList extends Model
{
    use HasFactory;
    public function list(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
