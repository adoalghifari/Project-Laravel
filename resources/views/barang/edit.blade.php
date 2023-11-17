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
                    <form action="{{ route('barang.update', $barang->id) }}" method="post">
                        @csrf
                        @method('PUT')
                    <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nama barang</span>
                            <input type="text" class="form-control" placeholder="Nama barang" name="nama_barang" value="{{ $barang->nama_barang }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Kategori Barang</label>
                            <select class="form-select" id="inputGroupSelect01" name="id_kategori">
                                <option selected value="{{ $barang->kategori->id }}">{{ $barang->kategori->nama_kategori }}</option>
                                    @foreach ($kategori as $item)
                                         <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                    @endforeach                               
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect02">Nama Ruangan</label>
                            <select class="form-select" id="inputGroupSelect02" name="id_ruangan">                          
                                <option selected value="{{ $barang->ruangan->id }}">{{ $barang->ruangan->nama_ruangan }}</option>   
                                @foreach($ruangan as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_ruangan }}</option>   
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect03">Stok/Satuan</label>
                            <input type="text" name="stok" class="form-control">
                            <select class="form-select" id="inputGroupSelect03" name="satuan">
                                <option selected>{{ $barang->satuan }}</option>
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
                                <option selected>{{ $barang->kondisi }}</option>
                                <option value="baik">Baik</option>
                                <option value="rusak">Rusak</option>
                                <option value="tidak_layak">Tidak Layak</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                         <button type="submit" class="btn btn-success">
                            <i class="bi bi-send"></i> Submit
                        </button>
                    </div>
                    </div>
                        <a href="{{ url('barang') }}" type="button" class="btn btn-info">
                            <i class="bi bi-backspace"></i></i> Back
                        </a>
                </div>   
            </form>
            </div>
            <!-- card end -->

        </div>
    </div>

@endsection