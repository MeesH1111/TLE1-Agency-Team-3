<?php

namespace App\Models;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Category extends Model
{


    public function vacancies(): HasMany
    {
        return $this->hasMany(Vacancy::class);
    }

    protected $fillable = [
        'category_name',
        'color'];


}
