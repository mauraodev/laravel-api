<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobsController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $jobs = Job::with('company')->get();
        return response()->json($jobs);
    }

    public function show($id)
    {
        $job = Job::with('company')->find($id);

        if(!$job) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($job);
    }
}
