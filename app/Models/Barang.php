<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'image', 'kondisi_sebelum', 'jumlah_sebelum','Kondisi_sesudah','jumlah_sesudah','keterangan'
    ];
}
