<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RequiredItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'item_id',
        'due_period_id',
        'required_amount',
        'created_at',
        'updated_at',
    ];

    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'item_id');
    }

    public function duePeriod(): BelongsTo
    {
        return $this->belongsTo(Period::class, 'due_period_id');
    }
}
