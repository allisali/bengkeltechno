@extends ('modules.admin.template.main')
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
                    <h4>Data Barang</h4>
                </div>
                <div class="card-body">
                    {{-- {{ $dataTable-> table()}} --}}
                    <table class="table table-bordered table-striped yajra-datatable" style="text-align: center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Kategori</th>
                                <th>Kategori</th>
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
          ajax: "{{ route('kategori.list') }}",
          columns: [
              {data: 'ID', name: 'Id'},
              {data: 'KODE_KATEGORI', className: 'dt-body-left', name: 'Kode Kategori'},
              {data: 'KATEGORI', className: 'dt-body-left', name: 'Kategori'},
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
