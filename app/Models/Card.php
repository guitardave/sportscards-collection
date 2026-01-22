<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Card extends Model
{
    protected $fillable = [
        'player_id',
        'card_set_id',
        'subset_info',
        'card_num',
    ];

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }

    public function cardSet(): BelongsTo
    {
        return $this->belongsTo(CardSet::class);
    }
}
