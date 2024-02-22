<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketPriceWatch extends Model
{
    use HasFactory;
    protected $table = 'market_price_watch';

    // public function tags()
    // {
    //     return $this->belongsToMany(Tag::class);
    // }

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'posted_by');
    // }
}
