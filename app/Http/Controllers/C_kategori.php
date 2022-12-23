<?php

namespace App\Http\Controllers;

use App\Models\tb_barangs;
use App\Models\tb_kategoris;
use Illuminate\Http\Request;

class C_kategori extends Controller
{
    public function kategori()
    {
        return view('modules.admin.content.kategori');
    }

    public function addkategori()
    {
        return view('modules.admin.content.addkategori');
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = tb_kategoris::all();
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
