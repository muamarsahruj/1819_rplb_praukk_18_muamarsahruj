<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    public function index()
    {
        //
        $logactivity = \App\Models\ActivityLog::all();
        return view('bank.activity-log.index', compact('logactivity'));
    }
}
