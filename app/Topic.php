<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'name',
        'desc',
        'user_id'
    ];

    /**
     * Temat ma swojego autora
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Temat ma wiele postów
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
