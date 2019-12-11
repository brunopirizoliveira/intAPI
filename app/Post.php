<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    public $timespaces = false;
    public $fillable   = ['usuario', 'avatar', 'foto'];

}
