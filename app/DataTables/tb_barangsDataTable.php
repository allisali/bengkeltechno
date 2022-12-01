<?php

namespace App\DataTables;

use App\Models\tb_barangs;
use App\Models\tb_kategoris;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class tb_barangsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('Id barang', 'tb_barangs.ID_BARANG')
            ->addColumn('Barang', 'tb_barangs.BARANG')
            ->addColumn('Kategori', 'tb_barangs.KATEGORI')
            ->addColumn('Merk', 'tb_barangs.Merk')
            ->addColumn('Stok', 'tb_barangs.Stok')
            ->addColumn('Harga Beli', 'tb_barangs.HARGA_BELI')
            ->addColumn('Harga Jual', 'tb_barangs.HARGA_JUAL')
            // ->addColumn('Gambar', 'tb_barangs.GAMBAR')
            ->addColumn('action', function ($row) {
                return '<button type="button" class="btn mb-2 btn-primary btn-sm">Primary</button>';
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\tb_barangs $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(tb_barangs $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('tb_barangs-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->selectStyleSingle();
    }


    public function getColumns()
    {
        return [
            Column::make('DT_RowIndex')->title('No')->orderable(false),
            Column::make('ID_BARANG'),
            Column::make('BARANG'),
            Column::make('KATEGORI'),
            Column::make('MERK'),
            Column::make('STOK'),
            Column::make('HARGA_BELI'),
            Column::make('HARGA_JUAL'),
            // Column::make('GAMBAR'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'tb_barangs_' . date('YmdHis');
    }
}
