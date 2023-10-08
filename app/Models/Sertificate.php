<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertificate extends Model
{
    use HasFactory;
    protected $table = 'sertificates';
    protected $fillable = ['gost_name', 'gost_banner_img', 'gost_label'];
}
