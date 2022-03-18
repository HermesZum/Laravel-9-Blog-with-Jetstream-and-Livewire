<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\ControllerMiddlewareOptions;

class HomeController extends Controller
{

    /**
     * Only authenticates users have access except for the index page
     *
     * @return ControllerMiddlewareOptions middleware is being returned.
     */
    public function _construct()
    {
        return $this->middleware('auth')->except(['index']);
    }

    /**
     * This function returns the view 'home/index'
     *
     * @return Application|Factory|View view.
     */
    public function index()
    {
        return view('home.index');
    }
}
