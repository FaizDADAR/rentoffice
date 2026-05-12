<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OfficeSpace extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'address',
        'city_id',
        'is_open',
        'is_full_booked',
        'price',
        'duration',
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function bookingTransactions(): HasMany
    {
        return $this->hasMany(BookingTransaction::class);
    }
}
