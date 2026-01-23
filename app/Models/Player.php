<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Player extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
    ];

    public function cardList(): HasMany
    {
        return $this->hasMany(Card::class);
    }
}
