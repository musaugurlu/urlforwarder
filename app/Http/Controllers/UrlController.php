<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\URLModel;
use Carbon\Carbon;

class UrlController extends Controller
{
    public function go($url)
    {
        //check if url is registered
        $dbcheck = URLModel::where('link', '=', $url);
        $dblink = $dbcheck->first();
        $datenow = Carbon::now();
        if ($dbcheck->count() > 0) {
            //if registered, check if it is enabled
            if($dblink->enabled)
            {
                //if it is enabled, check if it is not expired
                if($dblink->expires)
                {
                    //check if it is expired
                    if((($dblink->expires_group == "Date") && ($dblink->exp_date < $datenow)) || (($dblink->expires_group == "Hit") && ($dblink->exp_click <= $dblink->total_hit)))
                    {
                        return "Expired!";
                    }
                }
                
                ++$dblink->total_hit;
                $dblink->save();
                return redirect($dblink->destination);
                
            } else {
                return "not enabled";
            }
        } else {
            //if not, throw 404
            return "404 - Not Found";
        }
            
        //check if url is registered    
            //if registered, check if it is enabled
                //if it is enabled, check if it is not expired
                    //if it is not expired, 
                        //add +1 to urls counter in db
                        //add ip to visitors db with the url
                        //redirect to url
                    //if it is expired, 
                        //check setting, if log expired urls visitor is enabled, add ip to visitors db with the url
                        //show expiration message
                //if it is not enabled,
                    //check settings, if disabled, urls log is enabled, add ip to visitors db with url
                    //show 404 page
            //if unregistered,
                //check settings, if unregistered urls log is enabled, add ip to visitors db with url
        //if not, throw 404
    }
}
