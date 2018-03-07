<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    protected $fillable = [
        'MarketCurrency',
        'BaseCurrency',
        'MarketCurrencyLong',
        'BaseCurrencyLong',
        'MinTradeSize',
        'MarketName',
        'rate'
    ];
}
