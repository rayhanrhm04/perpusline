<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
class DashboardController extends Controller
{

    public function __construct()
    {

    }

    public function index(): View|Factory
    {
        return view ('backEnd.dashboard.index');
    }

    public function show($slug): View|Factory|RedirectResponse
    {
        return view('backEnd.explore.show');
    }
}
