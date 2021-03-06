<?php

namespace App\Models;

use App\Models\Base\SelfModel;
use App\Traits\Searchable;

/**
 * @property integer $id_skj
 * @property string $nama_jabatan
 * @property string $kelompok_jabatan
 * @property string $urusan_pemerintah
 * @property string $kode_jabatan
 * @property string $id_opd
 * @property string $url_berkas
 * @property string $created_at
 * @property string $updated_at
 */
class SKJ extends SelfModel
{
    use Searchable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tbl_skj';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_jabatan', 'kelompok_jabatan', 'urusan_pemerintah', 'kode_jabatan','id_opd','url_berkas', 'created_at', 'updated_at'];

    /**
     * The attributes that are searchable.
     *
     * @var array
     */
    public $searchable = ['nama_jabatan', 'kelompok_jabatan', 'urusan_pemerintah', 'kode_jabatan','id_opd', 'url_berkas', 'created_at', 'updated_at'];


    /*public function getJenisSuratAttribute()
    {
        return $this->belongsTo(JenisSurat::class,
            'id_jenis_surat',
            'id_jenis_surat')->first('nama_jenis_surat')->nama_jenis_surat;
    }

    public $appends = ['jenis_surat'];*/


}
