
$(function () {

    var table = $('.yajra-datatable').DataTable({
        processing: false,
        serverSide: true,
        responsive: true,
        ajax: "{{ route('databarang.list') }}",
        columns: [
            { data: 'ID', name: 'Id' },
            { data: 'BARANG', className: 'dt-body-left', name: 'barang' },
            { data: 'MERK', className: 'dt-body-left', name: 'merk' },
            { data: 'KATEGORI', className: 'dt-body-left', name: 'kategori' },
            { data: 'MERK', className: 'dt-body-left', name: 'merk' },
            { data: 'STOK', className: 'dt-body-left', name: 'stok' },
            { data: 'HARGA_BELI', render: $.fn.dataTable.render.number(',', '.', 2, 'Rp. '), className: 'dt-body-left', name: 'harga_beli' },
            { data: 'HARGA_JUAL', render: $.fn.dataTable.render.number(',', '.', 2, 'Rp. '), className: 'dt-body-left', name: 'harga_jual' },
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },
        ]
    });

});
