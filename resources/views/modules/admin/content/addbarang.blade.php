@extends('modules.admin.template.main')
@push('css')
<link rel="stylesheet" href="/assets/admin/vendor/chart.js/dist/Chart.min.css">
<link href="/assets/admin/vendor/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" />
<link href="/assets/admin/vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet" />
<link href="/assets/admin/vendor/select2/dist/css/select2.min.css" rel="stylesheet" />
<link href="/assets/admin/css/page/currency.css" rel="stylesheet" />
<link rel="stylesheet" href="/assets/admin/vendor/izitoast/dist/css/iziToast.min.css">
@endpush
@section('databarang')
<div class="title">
    Tambah Barang
</div>
<div class="content-wrapper">
    <div class="row same-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header mb-3">
                        <h4>Masukkan Data Barang</h4>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <strong>OMG!!!</strong> Kesalahan Terjadi Saat Proses Input. <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card-body">
                        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="kodebarang" class="form-label">Kode Barang</label>
                                        <input type="text" placeholder="Input Here" class="form-control" id="kodebarang"
                                            name="ID_BARANG">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="barang" class="form-label">Nama Barang</label>
                                        <input type="text" placeholder="Input Here" class="form-control" id="barang"
                                            name="BARANG">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="basicInput" class="form-label">Kategori Barang</label>
                                        <select name="KATEGORI" class="form-select">
                                            <option></option>
                                            @foreach ($kategori as $kategori)
                                            <option value="{{ $kategori->ID }}">{{ $kategori->KATEGORI }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="merk" class="form-label">Merk Barang</label>
                                        <input type="text" placeholder="Input Here" class="form-control" id="merk"
                                            name="MERK">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="hargabeli" class="form-label">Harga Beli</label>
                                        <input type="text" placeholder="Rp. 1,000,000.00" class="form-control"
                                            id="hargabeli" name="HARGA_BELI">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="basicInput" class="form-label">Harga Jual</label>
                                        <input type="text" placeholder="Rp. 1,000,000.00" class="form-control"
                                            id="basicInput" name="HARGA_JUAL">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="stok" class="form-label">Stok</label>
                                        <input type="text" placeholder="Input Here" class="form-control" id="stok"
                                            name="STOK">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="basicInput" class="form-label"> Uploud Gambar</label>
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" placeholder=""
                                                aria-label="Example text with button addon"
                                                aria-describedby="button-addon1" name="GAMBAR">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button type="submit" class="btn my-4 btn-outline-primary btn-md">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="/assets/admin/vendor/chart.js/dist/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="/assets/admin/js/page/index.js"></script>
<script src="/assets/admin/vendor/jquery/dist/jquery.min.js"></script>
<script src="/assets/admin/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assets/admin/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/admin/vendor/jquery/dist/jquery.min.js"></script>
<script src="/assets/admin/vendor/select2/dist/js/select2.min.js"></script>
<script src="/assets/admin/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="/assets/admin/vendor/izitoast/dist/js/iziToast.min.js"></script>
<script src="/assets/admin/js/page/alert.js"></script>
<script src="/assets/admin/js/page/currency.js"></script>
{{-- {{ $select->scripts() }} --}}
@endpush
