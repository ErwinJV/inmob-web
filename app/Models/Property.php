<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function images()
     {
      
      return $this->morphMany('App\Models\Image', 'imageable');
     
     }

     public function category()
     {
         
         return $this->belongsTo('App\Models\Category');
              
     }
     
}
