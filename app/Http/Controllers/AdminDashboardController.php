<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function page()
    {
        return view('admin.index'); // Pastikan Anda memiliki view ini
    }
}
