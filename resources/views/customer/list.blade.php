@extends('templete.index')

@section('title', 'Home')

@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Homme</a></li>
              <li class="breadcrumb-item active">Data Customer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

          @if (session('mess'))
           <div class="card card-default">
            <div class="card-header">
            <h3 class="card-title">{{ session('mess') }}<h3>

             <div class="card-tools">
             <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
              </button>
              </div>
               </div>
                </div>
                @endif

            <div class="card">
            <div class="card-header">
            <h3 class="card-title">Data Customer<h3>
            </div>
             
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Jenis Kelamin</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>

                   @foreach ($data as $item)
               <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->address }}</td>
                  <td>{{ $item->gender == 1 ? 'Laki-laki' : 'Perempuan' }}</td>
                   <td>{{ $item->status == 1 ? 'Aktif' : 'Tidak Aktif'}}</td>
                  <td>
                    <a href="/customers/{{ $item->id }}">
                          <button type="button" class="btn btn-warning btn-sm">
                          <i class="far fa-edit"></i></button>
                    </a>
                          
                      <form action="/customers/{{ $item->id }}" method="POST"
                      style="display: inline-block">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm">
                           <i class="far fa-trash-alt"></i></button>
                      </form>
                  </td>
               </tr>
            @endforeach
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection