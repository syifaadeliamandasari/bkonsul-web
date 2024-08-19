<?php

// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth'); // Protect the dashboard
    // }



    public function index()
    {
        // Fetch any required data for the dashboard view
        $siswa_count = 2035;
        $priority_count = 3;
        $jurnal_count = 1;

        // Return the dashboard view with data
        return view('Dashboard.dashboard', compact('siswa_count', 'priority_count', 'jurnal_count'));
    }
}



