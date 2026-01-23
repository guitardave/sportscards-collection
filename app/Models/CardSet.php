<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CardSet extends Model
{
    protected $fillable = [
        'year',
        'card_set_name',
        'sport',
    ];

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }
}
