<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kain extends Model
{
    use HasFactory;
    protected $table = 'kains';
    protected $primaryKey = 'id_kain';
    public $incrementing = true;
    protected $fillable = ['nama_kain', 'harga', 'stok'];
    public $timestamps = false;
}
