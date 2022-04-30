<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Dcat\Admin\Traits\HasDateTimeFormatter;

class twomail extends Model
{

    use HasFactory,HasDateTimeFormatter;

    protected $table = 'twomail';

    protected $fillable = [
        'text',
        'email'
    ];

    protected $casts = [
        'on_true' => 'boolean',
    ];
}
