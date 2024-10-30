@extends('layouts.master')
@section('title', 'Form Edit User')
@section('content')

<div class="content-wrapper">
    <div class="section-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Form Edit User</h2>
                            <a href="/user" class="btn btn-warning">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/user/{{ $user->id }}/update" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        id="name"
                                        aria-describedby="helpId"
                                        placeholder="masukan nama"
                                        value="{{ old('name', $user->name ) }}"
                                    />
                                    @error('name')
                                    <small id="helpId" class="form-text text-muted">{{ $message}}</small>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <form action="">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Email</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="email"
                                                id="email"
                                                aria-describedby="helpId"
                                                placeholder="masukan email"
                                                value="{{ old('email', $user->email ) }}"

                                            />
                                    @error('email')
                                    <small id="helpId" class="form-text text-muted">{{ $message}}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Level</label>
                                    <select name="level" value="{{ old('level')}}" id="level" class="form-control">                                   id="level" class="form-control">
                                        <option value=""selected>pilih Level</option>   

                                        <option value="admin" {{ $user->level == 'admin' ? 'selected' : '' }}>admin</option>
                                        <option value="pengguna" {{ $user->level == 'pengguna' ? 'selected' : '' }}>pengguna</option>
                                    </select>
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Tambah Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection