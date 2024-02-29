@extends('templete.index')

@section('title', 'Customers')

@section('content')

<div class="container my-4">
    <div class="row">
        <div class="row-12">
            
            <form action="/customer/save" method="POST">
                @csrf
                @isset($data)
                <input type="hidden" name="old_kode" value="{{ @$data->id }}">
                @endisset
                    <div class="mb-3">
                        <label for="kunci" class="form-label">id</label>
                        <input type="text" class="form-control" id="kunci" name="kunci" value={{ @$data->id }}>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="kunci" name="nama" value={{ @$data->nama }}>
                    </div>

                    <div class="mb-3">
                        <label for="adrs" class="form-label">Address</label>
                        <input type="text" class="form-control" id="kunci" name="adrs" value={{ @$data->adrs }}>
                    </div>

                     <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <input type="number" class="form-control" id="kunci" name="status" value={{ @$data->status }}>
                    </div>

                     <div class="mb-3">
                        <label for="gender"class="form-label">Gender</label>
                        <input type="number" class="form-control" id="kunci" name="gender" value={{ @$data->gender }}>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
              
        </div>
    </div>
</div>
    
@endsection