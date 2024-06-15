<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfile extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'kana',
        'tel',
        'zip',
        'address1',
        'address2',
        'newsletter',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
