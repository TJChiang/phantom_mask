<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
