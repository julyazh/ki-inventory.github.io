@include('layout.partials.jobform')
@extends('layout.main')

@section('content')
<div class="content">
    <div class="d-flex justify-content-between mx-5 mt-5">
        <div>
            <h5 class="fw-bold">
                <i class="fas fa-arrow-left me-2"></i>
                DAFTAR LOWONGAN KERJA
            </h5>
        </div>
        <div>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" active><a href="/lowongan/detail">Lowongan</a></li>
                    <li class="breadcrumb-item" active><a href="/lowongan/detail">Daftar Lowongan</a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="mx-5 mt-4">
    <p>Cari pekerjaan yang cocok dengan anda</p>
</div>
<div class="d-flex mt-2 px-5">
    <div class="w-75 me-4">
        <form action="" class="mt-1">
        <div class="form-group">
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" aria-label="search" placeholder="Cari Pekerjaan">
                <span class="input-group-text">
                    <i class="fas fa-magnifying-glass"></i>
                </span>
            </div>
        </div>
        </form>
        <x-jobcard></x-jobcard>
        <x-jobcard></x-jobcard>
        <x-jobcard></x-jobcard>
        <x-jobcard></x-jobcard>
        <div class="bg-light d-flex justify-content py-2" role="button">
            Lihat lowongan lainnya
        </div>
    </div>
    <div>
        <button class="rounded-pill px-5 py-3 bg-primary btn text-white" style="widht: 350px" data-bs-toggle="modal" data-bs-target="#formModal"><i class="fas fa-plus me-2"></i>TAMBAH LOWONGAN</button>
        <div class="mt-5 p-4 bg-light rounded">
            <h5 class="fw-bold">Filter</h5>
            <form action="" class="mt-3">
                <div class="mb-3">
                    <label for="relevansi" class="form-label">Urutkan Menurut</label>
                    <select name="" class="form-select">
                        <option selected>Relevansi</option>
                        <option value="1">one</option>
                        <option value="2">two</option>
                        <option value="3">three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="typePekerjaan" class="form-label">Tipe Pekerjaan</label>
                    <select class="form-select">
                        <option selected>Purna waktu</option>
                        <option value="1">one</option>
                        <option value="2">two</option>
                        <option value="3">three</option>
                    </select>
                </div>
                <div class="mb-3">    
                    <label for="area" class="form-label">Area</label>
                    <select class="form-select mb-3">
                        <option selected>Indonesia</option>
                        <option value="1">one</option>
                        <option value="2">two</option>
                        <option value="3">three</option>
                    </select>
                    <select class="form-select mb-3">
                        <option selected>Jawa Barat</option>
                        <option value="1">one</option>
                        <option value="2">two</option>
                        <option value="3">three</option>
                    </select>
                    <select class="form-select mb-3">
                        <option selected>Semua Area</option>
                        <option value="1">one</option>
                        <option value="2">two</option>
                        <option value="3">three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Kategori" class="form-label">
                        Kategori
                    </label>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="" values="" id="flexCheckChecked">
                        <label for="form-check-label" for="flexCheckChecked">Informasi Teknologi</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="" values="" id="flexCheckChecked">
                        <label for="form-check-label" for="flexCheckChecked">Desain & kreatif</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="" values="" id="flexCheckChecked">
                        <label for="form-check-label" for="flexCheckChecked">Penjualan & Pemasaran</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="" values="" id="flexCheckChecked">
                        <label for="form-check-label" for="flexCheckChecked">Akutansi & keuangan</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> 
@endsection