<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Post extends Model
{
    use Rateable;
}
