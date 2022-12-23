@extends('modules.admin.template.main')
@push('css')
<link rel="stylesheet" href="/assets/admin/vendor/chart.js/dist/Chart.min.css">
<link href="/assets/admin/vendor/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" />
<link href="/assets/admin/vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet" />
@endpush
@section('databarang')
<div class="title">
    Dashboard
</div>
<div class="content-wrapper">
    <div class="row same-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Kategori</h4>
                </div>
                <div class="card-body">

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
{{-- {{ $dataTable->scripts() }} --}}

@endpush
