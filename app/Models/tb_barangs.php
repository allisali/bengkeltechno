<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_barangs extends Model
{
    use HasFactory;
    protected $table = "tb_barangs";

    protected $fillable = [
        'ID',
        'BARANG',
        'ID_BARANG',
        'KATEGORI',
        'MERK',
        'HARGA_BELI',
        'HARGA_JUAL',
        'GAMBAR',
        'LAST_UPDATED',
        'CREATED_AT',
        'UPDATE_AT'
    ];


    public function kategori()
    {
        return $this->belongsTo(tb_kategoris::class, 'ID');
    }
}
