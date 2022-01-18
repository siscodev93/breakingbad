<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $guards = [];

    public $timestamps = false;

    public $primaryKey = 'char_id';

    protected $fillable = [
        'char_id',
        'name',
        'birthday',
        'img',
        'occupation',
        'status',
        'nickname',
        'appearance',
        'portrayed',
        'category',
        'better_call_saul_appearance',
    ];

    protected $casts = [
        'occupation' => 'array',
        'appearance' => 'array',
        'category' => 'array',
        'better_call_saul_appearance' => 'array',
    ];
}
