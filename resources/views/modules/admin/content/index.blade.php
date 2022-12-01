@extends('modules.admin.template.main')
@push('css')
    <link rel="stylesheet" href="/assets/admin/vendor/chart.js/dist/Chart.min.css">
    <link href="/assets/admin/vendor/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="/assets/admin/vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet" />

@endpush
@section('index')
    <div class="title">
        Dashboard
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Responsive</h4>
                    </div>
                    <div class="card-body">
                        <p class="form-text mb-2">Datatables also provide responsive table</p>
                        {{-- {{ $dataTable->table() }} --}}
                        <table class="table table-bordered table-striped yajra-datatable" >
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Barang</th>
                                    <th>Barang</th>
                                    <th>Kategori</th>
                                    <th>Merk</th>
                                    <th>Stok</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
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
<script type="text/javascript">
    $(function () {

      var table = $('.yajra-datatable').DataTable({
          processing: false,
          serverSide: true,
          responsive: true,
          ajax: "{{ route('admin.list') }}",
          columns: [
              {data: 'ID', name: 'Id'},
              {data: 'BARANG', name: 'barang'},
              {data: 'MERK', name: 'merk'},
              {data: 'KATEGORI', name: 'kategori'},
              {data: 'MERK', name: 'merk'},
              {data: 'STOK', name: 'stok'},
              {data: 'HARGA_BELI', name: 'harga_beli'},
              {data: 'HARGA_JUAL', name: 'harga_jual'},
              {
                  data: 'action',
                  name: 'action',
                  orderable: true,
                  searchable: true
              },
          ]
      });

    });
  </script>
@endpush
