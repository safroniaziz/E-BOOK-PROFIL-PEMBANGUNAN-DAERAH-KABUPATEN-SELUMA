@extends('layouts.backend')
@section('subTitle','Data Pengaturan Kolom')
@section('page','Data Pengaturan Kolom')
@section('subPage','Semua Data')
@section('user-login')
{{ Auth::user()->name }}
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Pengaturan Kolom</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-primary btn-sm btn-flat" data-toggle="modal" data-target="#modalTambah">
                        <i class="fa fa-plus"></i>&nbsp;Tambah Data
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
                <table class="table table-striped table-bordered" id="table" style="width:100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Header</th>
                            <th>Nama Kolom</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengaturanKoloms as $index => $pengaturanKolom)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $pengaturanKolom->nama_header }}</td>
                                <td>{{ $pengaturanKolom->nama_kolom }}</td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                <a onclick="editData({{ $pengaturanKolom->id }})" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('pengaturanKolom.delete',[$pengaturanKolom->id]) }}" method="POST" class="form">
                                                    {{ csrf_field() }} {{ method_field('DELETE') }}

                                                    <button type="submit" class="btn btn-danger btn-sm btn-flat show_confirm btnSubmit"><i class="fa fa-trash"></i>&nbsp; Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('administrator.pengaturanKolom.partials.modal_add')
        </div>
        @include('administrator.pengaturanKolom.partials.modal_edit')
    </div>
</div>
@endsection

@include('administrator.pengaturanKolom.partials.js')
