<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_content extends Model
{
	protected $fillable = ['title', 'text', 'alias'];
    //
}
