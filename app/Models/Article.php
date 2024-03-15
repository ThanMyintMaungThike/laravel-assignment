<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'context', 'excerpt', 'image'];

    public function articleImage() {
        return $this->hasMany(ArticleImage::class);
    }
}
