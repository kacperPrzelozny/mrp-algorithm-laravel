<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ItemPeriod extends Model
{
    use HasFactory;

    protected $table = 'items_periods';

    protected $fillable = [
        'id',
        'item_id',
        'period_id',
        'gross_requirement',
        'projected_inventory',
        'planned_order_receipt',
        'planned_order_release',
        'created_at',
        'updated_at',
    ];

    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
