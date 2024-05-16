<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bom extends Model
{
    use HasFactory;

    protected $table = "bom";

    protected $fillable = [
        "id",
        "item_id",
        "component_id",
        "bom_multiplier",
        "created_at",
        "updated_at",
    ];

    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'item_id');
    }

    public function component(): BelongsTo
    {
        return $this->belongsTo(Item::class, "component_id");
    }
}
