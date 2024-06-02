<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $appends = [
        'title' ,
        'description' ,
    ];

    protected $with = [
        'image' ,
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

    public function subservices()
    {
        return $this->hasMany(SubService::class);
    }

    # overrides

    public function delete()
    {
        $this->subservices()->delete();
        $this->image()->delete();
        parent::delete();
    }

}
