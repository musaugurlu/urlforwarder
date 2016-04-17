<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class URLModel extends Model
{
    protected $table = 'urls';
    
    protected $fillable = ['link','destination','enabled','expires','expires_group','exp_date','exp_click','total_hit'];

    protected $dates = ['exp_date'];
    
    public function setExpDateAttribute($date)
    {
        if (strlen($date))
        {
            $this->attributes['exp_date'] = \Carbon\Carbon::createFromFormat('m/d/Y H:i', $date);
        } else
        {
            $this->attributes['exp_date'] = null;
        }
    }
}
