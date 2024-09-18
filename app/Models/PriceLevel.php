<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceLevel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price'];

    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}
