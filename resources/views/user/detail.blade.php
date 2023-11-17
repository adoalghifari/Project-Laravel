@extends('app')
@section('main')
 
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
 <div class="container">
        <a href="{{ url('user') }}" type="button" class="btn btn-info mt-2">
            <i class="bi bi-backspace"></i> Back
        </a>
        <div class="row justify-content-center">
            
            <!-- show data user -->
            <div class="card mt-3 bg-primary-subtle border border-black">
                
                <div class="card-header">
                    Tambah Data PIC Ruangan 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-secondary border border-black">

                            <tr>
                                <th scope="col">Nama Lengkap</th>
                                <td scope="col">:</td>                    
                                <td scope="col">{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Nama Panggilan</th>
                                <td scope="col">:</td>                    
                                <td scope="col">{{ $user->username }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Email</th>
                                <td scope="col">:</td>                    
                                <td scope="col">{{ $user->email }}</td>
                            </tr>

                        </table>
                    </div>

                </div>   
            </div>
            <!-- show data user end -->

            <!-- show data room -->
              <div class="card mt-3 bg-primary-subtle border border-black shadow p-3 mb-5 bg-body-tertiary rounded">
                <div class="card-header">
                    Detail Room
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table border border-black">

                            <tr>
                                <th scope="col">Nama Ruangan</th>                   
                                <th scope="col">Nomor Ruangan</th>
                            </tr>

                            <tr>
                                <td scope="col">Ruangan LAB RPL</td>                 
                                <td scope="col">Ruangan 623</td>
                            </tr>                           
                            
                        </table>
                        
                    </div>
                </div>   
            </div>
            <!-- show data room end -->

        </div>
    </div>
    @endsection