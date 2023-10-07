<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatestNew extends Model
{
    use HasFactory;
    protected $fillable = ['news_title', 'news_short_content', 'banner_img', 'news_img_1', 'news_img_2', 'main_content'];
}
