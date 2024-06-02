<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $appends = ['publicPath'];

    public function getPublicPathAttribute()
    {
        if ( explode('/', $this->path)[1] != 'frontend-assets' )
        {
            return Storage::url($this->path);
        } else {
            return $this->path;
        }
    }

    # overrides 
    public function delete()
    {
        if ($this->path && Storage::exists($this->path)) 
        {
            Storage::exists($this->path);
        }

        parent::delete();
    }

}
