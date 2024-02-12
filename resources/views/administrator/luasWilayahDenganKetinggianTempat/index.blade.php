@extends('layouts.backend')
@section('subTitle','Data Luas Wilayah Berdasarkan Ketinggian Tempat')
@section('page','Data Luas Wilayah Berdasarkan Ketinggian Tempat')
@section('subPage','Semua Data')
@section('user-login')
{{ Auth::user()->name }}
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Manajemen Data Luas Wilayah Berdasarkan Ketinggian Tempat</h3>
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
                            <th>Kelompok Data</th>
                            <th>Sumber Data</th>
                            <th>Deskripsi Singkat</th>
                            <th>Dokumen PDF</th>
                            <th>Dokumen Word</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @foreach ($data->details as $index => $detail)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $detail->ketinggian }}</td>
                                <td>{{ $detail->luas }}</td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                <a onclick="editData({{ $detail->id }})" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('luasWilayahDenganKetinggianTempat.delete',[$detail->id]) }}" method="POST" class="form">
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
            @include('administrator.luasWilayahDenganKetinggianTempat.partials.modal_add')
        </div>
        @include('administrator.luasWilayahDenganKetinggianTempat.partials.modal_edit')
    </div>
</div>
@endsection

@include('administrator.luasWilayahDenganKetinggianTempat.partials.js')
