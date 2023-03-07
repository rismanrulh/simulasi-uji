<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PetugasController extends Controller
{
    public function index()
    {

        $petugas = Petugas::all();
        return view('admin.petugas.index', ['petugas'=> $petugas]);
    }

    public function create()
    {   
        return view('admin.petugas.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        
        // $validate = Validator::make($data, [
        //     'nama_petugas'=>['required', 'string', 'max:225'],
        //     'username'=>['required', 'string', 'unique:petugas'],
        //     'password'=>['required', 'string', 'min:6'],
        //     'telp'=>['required'],
        //     'level'=>['required', 'in:admin,petugas'],
        // ]);

        // if($validate->fails()){
        //     return redirect()->back()->withErrors($validate);
        // }

        // $username = Petugas::where('username', $data['username'])->first();

        // if ($username) {
        //     return redirect()->back()->with(['username' => 'Username sudah digunakan']);
        // }

        // Petugas::create([
        //     'nama_petugas' => $data['nama_petugas'],
        //     'username' => $data['username'],
        //     'password' => Hash::make($data['password']),
        //     'telp' => $data['telp'],
        //     'level' => $data['level'],
        // ]);

        // return redirect()->route('petugas.index'); 

        $validateData = $request->validate([
            'nama_petugas' => 'required',
            'username' => 'required',
            'password' => 'required',
            'telp' => 'required',
            'level' => 'required',
        ]); 

        $validateData['password'] = bcrypt($validateData['password']);
        // dd($validateData['role']);
        // die;

        Petugas::create($validateData);

        return redirect()->route('petugas.index')->with('success','Berhasil Menyimpan !');
    
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
