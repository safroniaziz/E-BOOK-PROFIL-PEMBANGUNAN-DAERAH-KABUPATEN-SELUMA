@extends('layouts.backend')
@section('subTitle','Detail Data Sektoral')
@section('page','Detail Data Sektoral')
@section('subPage','Semua Data')
@section('user-login')
{{ Auth::user()->name }}
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Detail Data Sektoral</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-primary btn-sm btn-flat" data-toggle="modal" data-target="#modalTambah">
                        <i class="fa fa-plus"></i>&nbsp;Tambah Data
                    </button>
                </div>
            </div>
            <div class="alert alert-danger" style="text-transform:uppercase">
                Detail Data : {{ $kelompokDataSektoral->kelompok_data }}
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
                <table class="table table-striped table-bordered" id="table" style="width:100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ketinggian (MDPL)</th>
                            <th>Luas (Ha)</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelompokDetails as $index => $kelompokDetail)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $kelompokDetail->ketinggian }}</td>
                                <td>{{ $kelompokDetail->luas }}</td>
                                <td>
                                    <table>
                                        <tr>
                                            <td>
                                                <a onclick="editData({{ $kelompokDetail->id }})" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('kelompokDataSektoral.delete',[$kelompokDetail->id]) }}" method="POST" class="form">
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
            @include('administrator.kelompokDetail.partials.modal_add')
        </div>
        @include('administrator.kelompokDetail.partials.modal_edit')
    </div>
</div>
@endsection

@include('administrator.kelompokDetail.partials.js')
