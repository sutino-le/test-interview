@extends('dashboard.layout')

@section('isi')


    <!-- Default box -->
    <div class="card">
    <div class="card-header">
        <h3 class="card-title">Informasi User</h3>

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
        Selamat datang <strong>{{ auth()->user()->name }}</strong>.
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        
    </div>
    <!-- /.card-footer-->
    </div>
    <!-- /.card -->

@endSection