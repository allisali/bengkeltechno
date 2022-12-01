<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_kategoris extends Model
{
    use HasFactory;
    protected $table = "tb_kategoris";

    public function barang()
    {
        return $this->hasMany(tb_barangs::class, 'ID', 'ID_BARANG');
    }
}
