<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MirobidProduct extends Model
{
    use HasFactory;
    protected $table = 'mirobid_products';
    protected $fillable = [
        'product_name',
        'pro_short_content',
        'product_type',
        'pro_banner_img',
        'pro_content_img_1',
        'pro_content_img_2',
        'pro_content_img_3',
        'pro_content_img_4',
        'pro_label',
        'spetsification'
    ];
}
