<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['author', 'title', 'slug', 'message'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function rules()
    {
        return [
            'author'  => 'required|min:3',
            'title'   => 'required',
            'message' => 'required',
        ];
    }
}
