<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;
    protected $table="lowongans";
    protected $fillable = [
        'kode_lowongan', 'deskripsi','post_by','status'
    ];
}
