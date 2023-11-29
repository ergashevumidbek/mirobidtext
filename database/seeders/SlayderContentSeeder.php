<?php

namespace Database\Seeders;

use App\Models\SlayderContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlayderContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SlayderContent::create([
            'slayder_main_text'=>'explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you',
            'slayder_short_text'=>'МЫ ГОТОВЫ ПРЕДЛОЖИТЬ ВАМ КАЧЕСТВЕННУЮ ПРОДУКЦИЮ',
            'slayder_img'=>'slide_img/KaVMbPyvN1xLja0kmEa4ndoA3v3E79xDwYgmiUPi.jpg',
            'slayder_label'=>'ystem, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are
             extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man w'
        ]);
        SlayderContent::create([
            'slayder_main_text'=>'explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you',
            'slayder_short_text'=>'СЕГОДНЯ ПРЕДПРИЯТИЕ ВЫПОЛНЯЕТ ПОТРЕБНОСТИ КРУПНЫХ ПРЕДПРИЯТИЙ СТРАН РФ И СНГ..',
            'slayder_img'=>'slide_img/abTcZil7kcMXqC3IwtcbvXNRZMkjY251X5kTV8Vx.jpg',
            'slayder_label'=>'ystem, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are
             extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man w'
        ]);
    }
}
