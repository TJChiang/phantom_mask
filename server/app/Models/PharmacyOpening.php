<?php

namespace App\Models;

use App\Enums\Weekday;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PharmacyOpening extends Model
{
    use HasFactory;

    protected $table = 'pharmacy_openings';
    protected $fillable = [
        'pharmacy_id',
        'weekday',
        'opening_time',
        'closing_time',
    ];

    protected $casts = [
        'weekday' => Weekday::class,
        'opening_time' => 'datetime:H:i:s',
        'closing_time' => 'datetime:H:i:s',
    ];

    public function pharmacy(): BelongsTo
    {
        return $this->belongsTo(Pharmacy::class, 'pharmacy_id', 'id');
    }
}
