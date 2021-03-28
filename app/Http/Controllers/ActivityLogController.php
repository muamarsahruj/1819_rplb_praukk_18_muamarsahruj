<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    public function index()
    {
        $log = \App\Models\ActivityLog::all();
        return view('admin.activity-log.index', compact('log'));
    }
}
