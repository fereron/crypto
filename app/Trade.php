<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    protected $fillable = ['market_id', 'price', 'value'];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }

    public function market()
    {
        return $this->belongsTo(Market::class);
    }
}
