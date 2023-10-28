<?php

namespace Database\Seeders;

use App\Models\LatestNew;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LatestNewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LatestNew::create([
            'news_title'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem',
            'news_short_content'=>'accusantium doloremque laudantium, totam rem aperiam, eaque ipsa',
            'banner_img'=>'news_img/ULSByl1QJb7tvVVWa0MLii8HzL4PKUTgqR8hOxwx.jpg',
            'news_img_1'=>'news_img/oKbnwqT2KycJPYu79ZZxEgUkbt8sx9w3BQxMHBg7.jpg',
            'news_img_2'=>'news_img/J5uewH7289LD6JqL4LZnXBm0X0oPGmfEKRlmLWhQ.jpg',
            'main_content'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
            adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.'
        ]);
        LatestNew::create([
            'news_title'=>'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam',
            'news_short_content'=>'nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum',
            'banner_img'=>'news_img/w5VmrZoQemnHIYm8YkuiZ3nAzyTRiNprFqc8fG6a.jpg',
            'news_img_1'=>'news_img/oiQbbEWzjCnwcqHt5lFHVJ72VbQ2QaL5lyYLFrAv.jpg',
            'news_img_2'=>'news_img/42xEiSovB6H1bCGniwSoHpoWKxkRfp18H8Bw8pHK.jpg',
            'main_content'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
            adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.'
        ]);
        LatestNew::create([
            'news_title'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem',
            'news_short_content'=>'accusantium doloremque laudantium, totam rem aperiam, eaque ipsa',
            'banner_img'=>'news_img/FelOXaWbBXnSQTSawQghBkLb1esC17jgov8zCKQt.jpg',
            'news_img_1'=>'news_img/qZbIcnqhF7BLYT2GoJfID67LxP32cxXSy3WPmRox.jpg',
            'news_img_2'=>'news_img/fsSzgCLXQfkss4T0K3omHlXq7XIzGyxtDulkHHza.jpg',
            'main_content'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
            adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.'
        ]);
    }
}
