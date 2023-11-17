@extends('app')
@section('main')
    
  <div class="container">
        <div class="row justify-content-center">
            <!-- card -->
            <div class="card my-4 bg-primary-subtle bg-gradient border border-black">
                <div class="card-header my-3 bg-secondary bg-gradient">
                    Tambah Data Barang
                </div>
                <div class="card-body">
                    <form action="{{ route('barang.store') }}" method="post">
                    @csrf
                    <div class="row">

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nama barang</span>
                            <input type="text" class="form-control" placeholder="Nama barang" name="nama_barang">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Kategori Barang</label>
                            <select class="form-select" id="inputGroupSelect01" name="id_kategori">
                                <option selected>Pilih...</option>
                                @foreach ($kategori as $item)
                                     <option value="{{ $item->id }}">
                                        {{ $item->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect02">Nama Ruangan</label>
                            <select class="form-select" id="inputGroupSelect02" name="id_ruangan">
                                <option selected>Pilih...</option>
                                @foreach ($ruangan as $item)                                    
                                    <option value="{{ $item->id }}">
                                        {{ $item->nama_ruangan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect03">Stok/Satuan</label>
                            <input type="text" name="stok" class="form-control">
                            <select class="form-select" id="inputGroupSelect03" name="satuan">
                                <option selected>Pilih...</option>
                                <option value="unit">Unit</option>
                                <option value="kilogram">Kilogram</option>
                                <option value="butir">Butir</option>
                                <option value="liter">Liter</option>
                                <option value="lembar">Lembar</option>                                                 
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect04">Kondisi</label>
                            <select class="form-select" id="inputGroupSelect04" name="kondisi">
                                <option selected>Pilih...</option>
                                <option value="baik">Baik</option>
                                <option value="rusak">Rusak</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success">
                           <i class="bi bi-send"></i>Submit
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
                    Data Barang
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">Nomor Barang</th>               
                                <th scope="col">Nama Barang</th>               
                                <th scope="col">Tempat</th>                         
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $item)                                
                            <tr>
                                <td scope="row">{{ $item->nomor_barang }}</td>
                                <td scope="row">{{ $item->nama_barang }}</td>
                                <td scope="row">{{ $item->ruangan->nomor_ruangan }}</td>                               
                                <td>                                  
                                <form action="{{ route('barang.destroy', $item->id) }}" method="post">
                                        @csrf 
                                        @method('delete')                                 
                                    <a href="{{ route('barang.show', $item->id) }}" type="button" class="btn btn-primary">Detail</a>
                                        <button type="submit" class="btn btn-danger"  onclick="return confirm('apakah anda akan menghapus {{ $item->nama_barang }}')"><i class="bi bi-trash3"></i> Delete </button>
                                    <a href="{{ route('barang.edit', $item->id) }}" type="button" class="btn btn-warning"><i class="bi bi-pen"></i> Edit</a>                               
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