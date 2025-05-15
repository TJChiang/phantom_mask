<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pharmacy extends Model
{
    use HasFactory;

    protected $table = 'pharmacies';
    protected $fillable = [
        'name',
        'cash_balance',
    ];

    protected $casts = [
        'cash_balance' => 'decimal:2',
        'created_at' => 'datetime:' . DateTimeInterface::ATOM,
        'updated_at' => 'datetime:' . DateTimeInterface::ATOM,
    ];

    public function openings(): HasMany
    {
        return $this->hasMany(PharmacyOpening::class, 'pharmacy_id', 'id');
    }

    public function masks(): HasMany
    {
        return $this->hasMany(Mask::class, 'pharmacy_id', 'id');
    }
}
