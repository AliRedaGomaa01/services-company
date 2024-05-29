<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $appends = [
        'value' ,
    ];

    public function getValueAttribute()
    {
        return $this->value_default ?? ( app()->isLocale('ar' ) ? $this->value_ar : $this->value_en );      
    }

    # relations 

    public function image()
    {
        return $this->hasOne(Image::class);
    }

}
