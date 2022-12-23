<?php

namespace App\Http\Controllers;

use App\Models\tb_barangs;
use App\Models\tb_kategoris;
use Illuminate\Http\Request;

class C_barang extends Controller
{
    public function databarang()
    {
        return view('modules.admin.content.databarang');
    }

    public function addbarang()
    {
        return view('modules.admin.content.addbarang', [
            'kategori' => tb_kategoris::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_BARANG' => 'required',
            'BARANG' => 'required',
            'KATEGORI' => 'required',
            'MERK' => 'required',
            'STOK' => 'REQUIRED',
            'HARGA_BELI' => 'required',
            'HARGA_JUAL' => 'required',
            'GAMBAR' => 'required|image|mimes:jpeg,pmg,jpg,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('GAMBAR')) {
            $destinationPath = 'assets/images/index/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['GAMBAR'] = $profileImage;
        }
        tb_barangs::create($input);

        return redirect()->route('databarang')
            ->with('Succes', 'Barang Berhasil Ditambahkan.');
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = tb_barangs::join('tb_kategoris', 'tb_barangs.KATEGORI', '=', 'tb_kategoris.ID')
                ->select(['tb_barangs.ID', 'tb_barangs.ID_BARANG', 'tb_barangs.BARANG', 'tb_kategoris.KATEGORI', 'tb_barangs.MERK', 'tb_barangs.STOK', 'tb_barangs.HARGA_BELI', 'tb_barangs.HARGA_JUAL',]);
            return DataTables()::of($data)
                ->addIndexColumn()
                ->addColumn('action', function () {
                    $actionBtn = '<a href="/home" class="detail btn btn-info btn-sm">Detail</a> <a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a> ';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
