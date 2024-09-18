<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = ['price_level_id', 'feature'];

    public function priceLevel()
    {
        return $this->belongsTo(PriceLevel::class);
    }
}
