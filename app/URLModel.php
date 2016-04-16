<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class URLModel extends Model
{
    protected $table = 'urls';
    
    protected $fillable = ['link','destination','enabled','expires']; //need to add more
}
