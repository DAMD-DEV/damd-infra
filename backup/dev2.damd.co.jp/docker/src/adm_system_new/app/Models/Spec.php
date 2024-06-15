<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Spec extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'maker_id',
        'car_id',
        'name',
        'code',
        'display'
    ];

    public function maker()
    {
        return $this->belongsTo('App\Models\Maker');
    }

    public function car()
    {
        return $this->belongsTo('App\Models\Car');
    }
}
