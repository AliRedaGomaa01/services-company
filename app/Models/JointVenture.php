<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JointVenture extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $appends = [
        'title' ,
        'description' ,
    ];

    // Accessors

    public function getDescriptionAttribute()
    {
        return app()->isLocale('ar') ? $this->description_ar : $this->description_en ;
    }
    
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
