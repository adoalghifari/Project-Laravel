@extends('app')
@section('main')
      <div class="container">
        
        <div class="row justify-content-center">
            <!-- card -->
            <div class="card mt-3 bg-dark-subtle border border-black shadow p-3 mb-5 bg-body-tertiary rounded">
                <div class="card-header">
                    Tambah Data PIC Ruangan 
                </div>
                <div class="card-body">
                    <form action="{{ route('user.update', $user->id) }}" method="post">
                        @csrf
                        @method('PUT')
                    <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nama Lengkap</span>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="name" value="{{ $user->name }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nama Panggilan</span>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Panggilan" name="username" value="{{ $user->username }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Email</span>
                            <input type="email" class="form-control" placeholder="@example.com" name="email" value="{{ $user->email }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Password</span>
                            <input type="password" class="form-control" placeholder="*****" name="password">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <a href="{{ url('user') }}" type="button" class="btn btn-info">
                            <i class="bi bi-backspace"></i></i> Back
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-send"></i> Submit
                        </button>
                    </div>

                    </div>
                    </form>
                </div>   
            </div>
            <!-- card end -->
        </div>
    </div>

@endsection