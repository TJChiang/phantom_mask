<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mask extends Model
{
    use HasFactory;

    protected $table = 'masks';
    protected $fillable = [
        'pharmacy_id',
        'name',
        'price',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'created_at' => 'datetime:' . DateTimeInterface::ATOM,
        'updated_at' => 'datetime:' . DateTimeInterface::ATOM,
    ];

    public function pharmacy(): BelongsTo
    {
        return $this->belongsTo(Pharmacy::class, 'pharmacy_id', 'id');
    }
}
