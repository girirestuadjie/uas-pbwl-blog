<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected $table = "tb_album";
    protected $primaryKey = "id";
    protected $fillable = ['nama', 'text', 'photo_id'];
    use HasFactory;
}
