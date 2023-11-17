@extends('app')

@section('main')
 <div class="container">
        <div class="row justify-content-center">     
            <!-- card -->
            <div class="card mt-3 bg-primary-subtle bg-gradient border border-black">
                <div class="card-header">
                    Ubah Data Ruangan 
                </div>
                <div class="card-body">
                    <form action="{{ route('ruangan.update', $ruangan->id) }}" method="post">
                        @csrf
                        @method('PUT')  
                    <div class="row">

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nama Ruangan</span>
                            <input type="text" class="form-control" placeholder="Nama Ruangan" name="nama_ruangan" value="{{ $ruangan->nama_ruangan }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Ukuran Ruangan</label>
                        <select class="form-select" id="inputGroupSelect01" name="ukuran">                        
                                <option selected>{{ $ruangan->ukuran }}</option>
                                <option value="small">Small</option>
                                <option value="medium">Medium</option>
                                <option value="large">Large</option>                           
                        </select>
                        </div>  
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect02">PIC Ruangan</label>
                        <select class="form-select" id="inputGroupSelect02" name="user_id">
                            <option selected value="{{ $ruangan->users->id }}">{{ $ruangan->users->name }}</option>
                            @foreach ($user as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>                                              
                            @endforeach
                        </select>
                        </div>  
                    </div>

                    <div class="col-md-6">
                        <a href="{{ url('ruangan') }}" type="button" class="btn btn-info">
                            <i class="bi bi-backspace"></i></i> Back
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-send"></i> Submit
                        </button>
                    </div>
                </div>  
                </form>
            </div>            
            <!-- card end -->

            <!-- show data -->
                
            <!-- show data end -->

        </div>
    </div>
@endsection

   


