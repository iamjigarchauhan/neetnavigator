<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Charts\TransactionChart;
use App\Helpers\IndiCore;
use Rap2hpoutre\FastExcel\FastExcel;
use App\User;

class DashboardController extends Controller
{
    public function index(Request $request){           
        return view('backend.dashboard',compact('request'));
    }

}
