<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $gurded = ['id'];
    public static $rules = [
        'news_id' => 'required',
        'edited_at' => 'required',
    ];
}
