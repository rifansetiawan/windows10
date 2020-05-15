<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;



class Discussion extends Model
{
    public function author(){
        return $this -> belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function replies(){
        return $this -> hasMany(Reply::class);
     }
}
