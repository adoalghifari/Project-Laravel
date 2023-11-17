@extends('app')
@section('main')
      <div class="container">
        <div class="row justify-content-center">
            <!-- card -->
            <div class="card my-4 bg-primary-subtle bg-gradient border border-black">
                <div class="card-header my-3 bg-secondary bg-gradient">
                    Ubah Data kategori
                </div>
                <div class="card-body">
                    <form action="{{ route('kategori.update', $kategori->id) }}" method="post">
                        @csrf
                        @method('PUT') 
                    <div class="row">
                    <div class="col-md-10">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nama Kategori</span>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Kategori" name="nama_kategori">
                        </div>
                    </div>

                    <div class="col-md-2">
                       <button type="submit" class="btn btn-success">
                            <i class="bi bi-send"></i> Submit
                        </button>
                    </div>                    
                    </div>
                        <a href="{{ url('kategori') }}" type="button" class="btn btn-info">
                            <i class="bi bi-backspace"></i></i> Back
                        </a>
                </div>  
                </form> 
            </div>
            <!-- card end -->

        </div>
    </div>
@endsection