<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Period extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'number',
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function itemPeriods(): HasMany
    {
        return $this->hasMany(ItemPeriod::class);
    }
}
