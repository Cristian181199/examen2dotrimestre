<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'article_author');
    }

    public function monographs()
    {
        return $this->belongsToMany(Monograph::class, 'article_monograph', 'article_id', 'monograph_id')->withPivot('monograph_id');
    }
}
