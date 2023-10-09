<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlayderContent extends Model
{
    use HasFactory;
    protected $table = 'slayder_contents';
    protected $fillable = ['slayder_main_text', 'slayder_short_text', 'slayder_img', 'slayder_label' ];
}
