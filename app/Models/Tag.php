<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';

    public function posts()
    {
        return $this->morphedByMany(Posts::class,'taggable');
    }

    public function videos()
    {
        return $this->morphedByMany(Video::class,'taggable');
    }
}
