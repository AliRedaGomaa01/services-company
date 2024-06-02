<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['image'];

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
