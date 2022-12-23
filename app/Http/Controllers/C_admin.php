<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_barangs;
use App\Models\tb_kategoris;
use Yajra\DataTables\DataTables;
use DataTable;

class C_admin extends Controller
{
    public function index()
    {
        return view('modules.admin.content.index');
    }


    public function transaksi()
    {
        return view('modules.admin.content.transaksi');
    }

    public function laporan()
    {
        return view('modules.admin.content.laporan');
    }

    public function user()
    {
        return view('modules.admin.content.user');
    }

    public function setting()
    {
        return view('modules.admin.content.setting');
    }

    public function cms()
    {
        return view('modules.admin.content.cms');
    }
}
