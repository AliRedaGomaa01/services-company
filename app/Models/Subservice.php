<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subservice extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $appends = [
        'title' ,
        'description' ,
    ];

    public function getTitleAttribute()
    {
        return app()->isLocale('ar') ? $this->title_ar : $this->title_en ;
    }

    public function getDescriptionAttribute()
    {
        return app()->isLocale('ar') ? $this->description_ar : $this->description_en ;
    }

    # relations 

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
    
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    

    
}
