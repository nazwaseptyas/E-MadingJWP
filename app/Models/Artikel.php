<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'judul',
        'penulis',
        'isi_artikel',
        'tgl_artikel',
        'gambar',
        'status',
    ];

    protected $table = 'artikels'; 
    protected $primaryKey = 'id_artikel';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}