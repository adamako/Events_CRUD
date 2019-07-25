<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;



class Event extends BaseModel
{
    use Sluggable;

    public $timestamps=false;
    public function sluggable(): array
    {
        return[
            'slug'=>[
                'source'=>'title'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
