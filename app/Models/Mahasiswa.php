<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table ="mahasiswas";
    public $timestamps = false;
    protected $primaryKey = 'Nim'; //memanggil isi DB dengan primary key
    public $incrementing = false;

    /**
     * the attributes that are mass assignable. 
     * 
     * @var array
     */

    protected $fillable = [
        'Nim',
        'Nama',
        'Tanggal_Lahir',
        'kelas_id',
        'Jurusan',
        'No_Handphone',
        'Email',
    ];
    
};