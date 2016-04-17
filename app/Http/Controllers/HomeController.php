<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use View;
use App\URLModel;
use Session;

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
        $urls = URLModel::orderBy('created_at', 'desc')->take(10)->get();
        $box1data = URLModel::all()->count();
        $box2data = URLModel::where('enabled', '=', 'on')->count();
        return view('admin.index')
                                    ->with('urls', $urls)
                                    ->with('b1data', $box1data)
                                    ->with('b2data', $box2data);
    }
    
    public function urllist()
    {
        $urls = URLModel::all();

        return view('admin.urls')->with('urls', $urls);
    }
    
    public function create()
    {
        
        return view('admin.new');
    }
    
    public function logs()
    {
        //
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'link' => 'required|min:3|alpha_dash|unique:urls|max:32',
            'destination' => 'required|min:6|url',
            'exp-date' => 'date',
            'exp-click' => 'integer'
            ]);
        URLModel::create($request->all());
        
        Session::flash('snotify', 'URL Successfully Created!');
        return redirect('admin/urls');
    }
}
