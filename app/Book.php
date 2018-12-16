<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'ISBN';
    protected $fillable = [
        'ISBN', 'title', 'first_name', 'last_name', 'genre_id', 'publisher_id'
    ];
}
