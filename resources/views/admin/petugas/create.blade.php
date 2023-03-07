@extends('layouts.admin')
@section('title', 'Form Tambah Petugas')

@section('css')
    <style>
        .text-primary:hover {
            text-decoration: underline;
        }

        .text-grey{
            color: #6c757d;
        }

        .text-grey:hover {
            color: #6c757d;
        }
    </style>
@endsection

@section('header')
    <a href="{{ route('petugas.index')}}" class="text-primary">Data Petugas</a>
    <a href="#" class="text-grey"></a>
    <a href="#" class="text-grey">Form Tambah Petugas</a>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-6 col-12">
        <div class="card">
            <div class="card-header">
                Form Tambah Petugas
            </div>
            <div class="card-body">
                <form action="{{ route('petugas.store')}}" method="POST">
                @csrf  
                <div class="form-group">
                    <label for="nama_petugas">Nama Petugas</label>
                    <input type="text" nama="nama_petugas" id="namaPetugas" class="form-contol"  required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" nama="username" id="username" class="form-contol"  required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" nama="password" id="password" class="form-contol"  required>
                </div>
                <div class="form-group">
                    <label for="telp">No Telp</label>
                    <input type="number" nama="telp" id="telp" class="form-contol"  required>
                </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <div class="input-group mt-3">
                        <select name="level" id="level" class="custom-select">
                            <option value="petugas"selected>Pilih Level (Default Petugas)</option>
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" style="width: 100%">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection