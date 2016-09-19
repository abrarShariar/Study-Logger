<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    //model for 'links' table
    protected $table = 'links';
    //mass assignment
    protected $fillable = ['url', 'title', 'description', 'tag'];
    //guarded
    protected $guarded = ['id'];

}
