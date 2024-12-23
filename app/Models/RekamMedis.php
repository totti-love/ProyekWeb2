<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [ 'id'];

    public function pasien(){
        return $this->belongsTo(Pasien::class, 'pasien_id', 'id');
    }

    public function dokter(){
        return $this->belongsTo(Dokter::class, 'dokter_id', 'id');
    }

    public function obat(){
        return $this->belongsTo(Kunjungan::class, 'obat_id', 'id');
    }
}