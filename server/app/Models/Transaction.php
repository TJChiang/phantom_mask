<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    protected $fillable = [
        'user_id',
        'pharmacy_id',
        'mask_id',
        'quantity',
        'price',
        'total_price',
        'note',
        'transaction_time',
    ];
    protected $casts = [
        'price' => 'decimal:2',
        'total_price' => 'decimal:2',
        'transaction_time' => 'datetime:' . DateTimeInterface::ATOM,
        'created_at' => 'datetime:' . DateTimeInterface::ATOM,
        'updated_at' => 'datetime:' . DateTimeInterface::ATOM,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function pharmacy(): BelongsTo
    {
        return $this->belongsTo(Pharmacy::class, 'pharmacy_id', 'id');
    }

    public function mask(): BelongsTo
    {
        return $this->belongsTo(Mask::class, 'mask_id', 'id');
    }
}
