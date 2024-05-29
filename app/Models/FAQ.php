<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FAQ extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    protected $appends = [
        'question' ,
        'answer' ,
    ];

    // Accessors

    public function getAnswerAttribute()
    {
        return app()->isLocale('ar') ? $this->answer_ar : $this->answer_en ;
    }
    
    public function getQuestionAttribute()
    {
        return app()->isLocale('ar') ? $this->question_ar : $this->question_en ;
    }
}
