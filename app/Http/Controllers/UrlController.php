<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UrlController extends Controller
{
    public function go($url)
    {
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
    
        return "Working on this :)";
    }
}
