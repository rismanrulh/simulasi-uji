<?php

namespace App\Http\Controllers\Admin;
use App\Models\Petugas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $petugas = Petugas::all()->count();

        // $masyarakat = masyrakat::all()->count();

        return view('admin.dashboard.index');
    }
}
