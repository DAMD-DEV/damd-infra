<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'maker_id',
        'car_id',
        'spec_id',
        'category_id',
        'shipping_id',
        'code',
        'year_from',
        'year_to',
        'applied',
        'price',
        'invoice_price',
        'cost',
        'm_cost',
        'paint_cost',
        'no_paint',
        'paint_only',
        'no_mount',
        'no_damd',
        'no_home',
        'no_stop',
        'sender',
        'loan',
        'factory_id',
        'composition',
        'accessories',
        'colors',
        'options',
        'multiple',
        'template_ids',
        'others',
        'display'
    ];

    public function size()
    {
        return $this->hasOne('App\Models\ItemSize');
    }
}
