<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body', 'image_path', 'image_alt'];

    /**
     * Method for get article show path
     *
     * @return string
     */
    public function path()
    {
        return route('blog-show', $this);
    }
}
