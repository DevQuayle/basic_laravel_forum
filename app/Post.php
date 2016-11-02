<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'text','user_id','topic_id'
    ];

    /**
     * Post ma swojego autora
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
