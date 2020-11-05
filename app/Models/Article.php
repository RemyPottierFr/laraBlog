<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
        'title',
        'description',
        'picture',
        'author_id'
    ];

    public function author()
    {
        return $this->hasOne('App\Models\User', 'id', 'author_id');
    }
}
