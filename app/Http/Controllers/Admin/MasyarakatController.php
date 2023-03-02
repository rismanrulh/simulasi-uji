<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        return view('admin.masyarakat.index');

    }

    public function show($nik)
    {
        return view('admin.masyarakat.show');
    }
}
