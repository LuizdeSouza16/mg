<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['post', 'title', 'resume', 'id_tag', 'post_img'];

    protected $guarded = ['id'];

    public $timestamps = true;

    public function tag() {
        return $this->belongsTo(Tag::class, 'id_tag');
    }
}
