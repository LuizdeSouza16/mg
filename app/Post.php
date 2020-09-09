<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['post', 'title', 'resume', 'id_tag'];

    protected $guarded = ['id'];

    public $timestamps = true;
}
