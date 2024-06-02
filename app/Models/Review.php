<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $appends = [
        'text',
        'author',
    ];

    protected $with = [
        'image',
    ];

    public function getTextAttribute()
    {
        return app()->isLocale('ar') ? $this->text_ar : $this->text_en;
    }

    public function getAuthorAttribute()
    {
        return app()->isLocale('ar') ? $this->author_ar : $this->author_en;
    }

    # relations 

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    # overrides
    public function delete()
    {
        $this->image()->delete();
        parent::delete();
    }
}
