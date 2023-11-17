@extends('app')
@section('main')
      <div class="container">
        <div class="row justify-content-center">
            <!-- card -->
            <div class="card my-4 bg-primary-subtle bg-gradient border border-black">
                <div class="card-header my-3 bg-secondary bg-gradient">
                    Tambah Data kategori
                </div>
                <div class="card-body">
                       <form action="{{ route('kategori.store') }}" method="post">
                        @csrf
                    
                    <div class="row">                     
                    <div class="col-md-10">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nama Kategori</span>
                            <input type="text" class="form-control" placeholder="Nama Kategori" name="nama_kategori">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-send"></i> Submit
                        </button>
                    </div>
                    </div>
                    </form>
                </div>   
            </div>
            <!-- card end -->

            <!-- show data -->
            <div class="card mt-3 bg-primary-subtle bg-gradient border border-black">
                <div class="card-header my-3 bg-secondary bg-gradient">
                    Data Kategori 
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">Nama Kategori</th>               
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $item )                                
                            <tr>
                                <td scope="row">{{ $item->nama_kategori }}</td>
                                <td>  
                                    <form action="{{ route('kategori.destroy', $item->id) }}" method="post">
                                        @csrf 
                                        @method('delete')                                                        
                                    <button type="submit" class="btn btn-danger"  onclick="return confirm('apakah anda akan menghapus {{ $item->nama_kategori }}')"><i class="bi bi-trash3"></i> Delete </button>
                                    <a href="{{ route('kategori.edit', $item->id) }}" type="button" class="btn btn-warning"><i class="bi bi-pen"></i> Edit</a>                               
                                    </form>
                                </td>
                            </tr>   
                            @endforeach                    
                        </tbody>
                        </table>
                    </div>
                </div>   
            </div>
            <!-- show data end -->

        </div>
    </div>
@endsection