@extends('app')
@section('main')
    <div class="container">
        <div class="row justify-content-center">    
            <!-- show data -->
            <div class="card mt-3 bg-primary-subtle bg-gradient border border-black">
                <div class="card-header my-3 bg-secondary bg-gradient">
                    Data Barang
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table ">
                      
                            <tr>
                                <th scope="col">Nomor Barang</th>               
                                <td scope="col">:</td>               
                                <td scope="col">{{ $barang->nomor_barang }}</td>                         
                            </tr>

                            <tr>
                                <th scope="col">Nama Barang</th>               
                                <td scope="col">:</td>               
                                <td scope="col">{{ $barang->nama_barang }}</td>                         
                            </tr>
                            
                            <tr>
                                <th scope="col">Kategori</th>               
                                <td scope="col">:</td>               
                                <td scope="col">{{ $barang->kategori->nama_kategori}}</td>                         
                            </tr>

                            <tr>
                                <th scope="col">Nama Ruangan</th>               
                                <td scope="col">:</td>               
                                <td scope="col">{{ $barang->ruangan->nama_ruangan }}</td>                         
                            </tr>        
                            
                            <tr>
                                <th scope="col">Kondisi</th>               
                                <td scope="col">:</td>               
                                <td scope="col">
                                {{ $barang->kondisi }}
                                </td>                         
                            </tr>

                            <tr>
                                <th scope="col">Stok/Satuan</th>               
                                <td scope="col">:</td>               
                                <td scope="col">
                                  {{ $barang->stok }} {{ $barang->satuan }}
                                   
                                </td>                         
                            </tr>
                       
                        </table>
                        <a href="{{ url('barang') }}" type="button" class="btn btn-info">
                           <i class="bi bi-backspace"></i> Back
                        </a>
                    </div>

                </div>   
            </div>
        </div>
    </div>
@endsection