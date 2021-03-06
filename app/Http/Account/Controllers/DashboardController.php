<?php

namespace Rims\Http\Account\Controllers;

use Illuminate\Http\Request;
use Rims\App\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Show the user's application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.dashboard.index');
    }
}
