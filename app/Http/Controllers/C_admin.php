<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_barangs;
use Yajra\DataTables\DataTables;
use DataTable;

class C_admin extends Controller
{
    public function index()
    {
        return view('modules.admin.content.index');
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = tb_barangs::join('tb_kategoris', 'tb_barangs.KATEGORI', '=', 'tb_kategoris.ID')
                ->select(['tb_barangs.ID', 'tb_barangs.ID_BARANG', 'tb_barangs.BARANG', 'tb_kategoris.KATEGORI', 'tb_barangs.MERK', 'tb_barangs.STOK', 'tb_barangs.HARGA_BELI', 'tb_barangs.HARGA_JUAL',]);
            return DataTables()::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="/home" class="detail btn btn-info btn-sm">Detail</a> <a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a> ';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
