<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemSize extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'item_id',
        'height',
        'width',
        'depth',
        'weight',
        'b_height',
        'b_width',
        'b_depth',
        't_weight'
    ];

    public function item()
    {
        return $this->belongsTo('App\Models\Item');
    }
}
