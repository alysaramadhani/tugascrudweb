@extends('layouts.main')

{{-- Section Title --}}
@section('title')
    Tambah Kelas
@endsection

{{-- Section Content --}}
@section('content')
    <div class="row">

        {{-- Title Page : Start --}}
        <div class="col-12">
            <h1 class="h1 mb-3 fw-bold">
                Tambah Kelas
            </h1>
        </div>
        {{-- Title Page : End --}}

        {{-- Form : Start --}}
        <form action="{{ route('kelas.update', $class->id) }}" method="post" enctype="multipart/form-data">
            @csrf

            {{-- Input Nama Kelas : Start --}}
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="mb-3">
                    <label for="name_kelas" class="form-label">Masukkan Nama Kelas</label>
                    <input 
                    type="text" 
                    class="form-control" 
                    id="name_kelas" 
                    placeholder="Masukkan Nama Kelas"
                    name="nama_kelas"
                    value="{{ $class->nama_kelas, old('nama_kelas') }}"
                    >
                </div>
            </div>
            {{-- Input Nama Kelas : End --}}

            {{-- Button Submit : Start --}}
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary fw-bold">
                        <i class="bi bi-pencil-square"></i>
                        Ubah
                    </button>
                </div>
            </div>
            {{-- Button Submit : End --}}
            

        </form>
        {{-- Form : End --}}

    </div>
@endsection
