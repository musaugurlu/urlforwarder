<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
        View::share('user', Auth::user());
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }
    
    public function urllist()
    {
        $data = [ //Data from DB
            'data' => 'data'
            ];
        return view('admin.urls')->with($data);
    }
    
    public function create()
    {
        
        return view('admin.new');
    }
    
    public function logs()
    {
        //
    }
    
    public function store()
    {
        return "<p>Will Work On it</p><br /><a href='javascript:history.back()'>Go Back</a>";
    }
}
