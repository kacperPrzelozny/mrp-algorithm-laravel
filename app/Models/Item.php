<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'lot_size',
        'lead_time',
        'inventory',
        'created_at',
        'updated_at',
    ];

    public function itemPeriods(): HasMany
    {
        return $this->hasMany(ItemPeriod::class);
    }

    public function bom(): HasMany
    {
        return $this->hasMany(Bom::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
