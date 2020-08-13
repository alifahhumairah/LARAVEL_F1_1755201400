<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    
    protected $table = 'skripsi';
    protected $primaryKey = 'id';
    //Field yang hanya boleh diisi
    protected $fillable = ['id','nim','nama_mahasiswa','judul','tempat_penelitian','alamat'];

    //Field yang diabaikan isiannya
    protected $guarded = [];
    
    public function prodi()
   {
    return $this->hasOne('App\Prodi','kode_prodi','prodi');
   }
}