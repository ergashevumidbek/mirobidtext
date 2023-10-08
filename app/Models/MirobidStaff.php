<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MirobidStaff extends Model
{
    use HasFactory;
    protected $table = 'mirobid_staff';
    protected $fillable = ['staff_name', 'staff_surname', 'staff_profission', 'staff_img', 'staff_bio'];
}
