<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MailTemplate extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'status',
        'name',
        'title',
        'content'
    ];

}
