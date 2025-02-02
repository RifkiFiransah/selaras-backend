<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function mitra_index(){
        return view('pages.dashboard', [
            'title' => 'Dashboard Mitra',
        ]);
    }
}
