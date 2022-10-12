@extends('dashboard.layout')

@section('isi')


    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah User</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
        </div>
        <div class="card-body">

            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="name" id="name" class="form-control (@error('name') is-invalid @enderror) ? @error('name') is-invalid @enderror : '' " value="{{ old('name', $user->name) }}" placeholder="Enter nama">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" id="email" class="form-control (@error('email') is-invalid @enderror) ? @error('email') is-invalid @enderror : '' " value="{{ old('email', $user->email) }}" placeholder="Enter email">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" id="password" class="form-control (@error('password') is-invalid @enderror) ? @error('password') is-invalid @enderror : '' " value="{{ old('password', $user->password) }}" placeholder="Password">
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-right">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
            
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->



@endSection