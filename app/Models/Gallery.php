<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $appends = [
        'title' ,
    ];

    // Accessors
    
    public function getTitleAttribute()
    {
        return app()->isLocale('ar') ? $this->title_ar : $this->title_en ;
    }

    # relations 

    public function image()
    {
        return $this->hasOne(Image::class);
    }
}
