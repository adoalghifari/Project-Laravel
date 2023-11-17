@extends('app')
@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <!-- show data -->
            <div class="card mt-3 bg-primary-subtle bg-gradient border border-black">
                <div class="card-header">
                    Data Ruangan 
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table class="table border border-black">
                        
                            <tr>
                                <th scope="col">Nama Ruangan</th>
                                <td scope="col">:</td>                    
                                <td scope="col">{{ $ruangan->nama_ruangan }}</td>
                            </tr>

                            <tr>
                                <th scope="col">Nomor Ruangan</th>
                                <td scope="col">:</td>                    
                                <td scope="col">{{ $ruangan->nomor_ruangan }}</td>
                            </tr>

                            <tr>
                                <th scope="col">Ukuran Ruangan</th>
                                <td scope="col">:</td>                    
                                <td scope="col">
                                    @if ($ruangan->ukuran == 'small')
                                    <span>Small</span>
                                    @elseif($ruangan->ukuran == 'medium')
                                    <span>Medium</span>
                                    @elseif($ruangan->ukuran == 'large')
                                    <span>Large</span>
                                    @endif
                                    
                                </td>
                            </tr>

                            <tr>
                                <th scope="col">PIC Ruangan</th>
                                <td scope="col">:</td>                    
                                <td scope="col"> {{ $ruangan->users->name }} </td>
                            </tr>

                        </table>
                        <a href="{{ url('ruangan') }}" type="button" class="btn btn-info">
                           <i class="bi bi-backspace"></i>Back
                        </a>
                    </div>

                </div>   
            </div>
            <!-- show data end -->

        </div>
    </div>
@endsection