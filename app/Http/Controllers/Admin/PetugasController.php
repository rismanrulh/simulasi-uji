<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        return view('admin.petugas.index');
    }

    public function create()
    {
        return view('admin.petugas.create');
    }

    public function store(Request $request)
    {
        # code...
    }

    public function edit($id_petugas)
    {
        return view('admin.petugas.edit');
    }

    public function update(Request $request, $id_petugas)
    {
        # code...
    }

    public function destroy($id_petugas)
    {
        # code...
    }
}
