@extends('adminlte::page')
@section('title', 'Master Tabel Pangkat') @section('content_header')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/home">Home</a></li>
        <li class="breadcrumb-item">
            <a href="/mst-pangkat">Master tabel Pangkat</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Lihat Ditail</li>
    </ol>
</nav>
@stop @section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">
                            <h3>Lihat Datail Pangkat</h3>
                        </span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('mst-pangkat.edit', $mstPangkat->id) }}">Ubah</a>
                        <a class="btn btn-warning"
                            href="{{ route('mst-pangkat.index', $mstPangkat->id) }}">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <td><strong>Nama Pangkat</strong></td>
                            <td>{{ $mstPangkat->nama_pangkat }}</td>
                        </tr>
                        <tr>
                            <td><strong>Pangkat Golongan</strong></td>
                            <td>{{ $mstPangkat->pangkat_gol }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
