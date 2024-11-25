@extends('layouts.admin', ['title' => 'Kelola Pelamar'])
@section('content')
<h1>Halaman Kelola Perusahaan</h1>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Data Pelamar</h3>
                        <p class="text-subtitle text-muted">For user to check they list</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Pelamar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Simple Datatable
                    </div>
                    <div class="row mb-3 mt-3">
                        <div class="col-md-6">

                            <a href="#" class="btn btn-primary btn-sm">Tambah Pelamar</a>

                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Tgl Lahir</th>
                                    <th>Email</th>
                                    <th>Jenis Kelamin</th>
                                    <th>kompetensi</th>
                                    <th>Sertifikat</th>
                                    <th>cd</th>
                                    <th>Tanggal Verikasi</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                           <tbody>
                                @foreach ($kpelamar as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->tgl_lahir }}</td>
                                    <td>{{ $item->alamat_sekarang}}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->kompetensi}}</td>
                                    <td>{{ $item->sertifikat}}</td>
                                    <td>{{ $item->cv}}</td>
                                    <td>{{ $item->tanggal_verifikasi}}</td>
                                    <td>
                                        <a href="{{ $item->id }}/edit" class="btn btn-warning btn-sm ml-2">EDIT</a>
                                        <form action="{{ $item->id }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm ml-2"
                                                onclick="return confirm('Yakin ingin menghapus data?')">HAsssPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $kpelamar->links() !!}
                    </div>
                </div>

            </section>
        </div>
    </div>

        @endsection
