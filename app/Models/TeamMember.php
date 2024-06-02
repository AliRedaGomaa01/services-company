<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $appends = [
        'name' ,
        'job' ,
        'text' ,
    ];

    // Accessors

    public function getTextAttribute()
    {
        return app()->isLocale('ar') ? $this->text_ar : $this->text_en ;
    }
    
    public function getNameAttribute()
    {
        return app()->isLocale('ar') ? $this->name_ar : $this->name_en ;
    }
    
    public function getJobAttribute()
    {
        return app()->isLocale('ar') ? $this->job_ar : $this->job_en ;
    }

    # relations 

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
