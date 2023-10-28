<?php

namespace Database\Seeders;

use App\Models\MirobidProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MirobidProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MirobidProduct::create([
            'product_name'=>'NOTOQILMAGAN MATO',
            'pro_short_content'=>'must explain to you how all this mistaken idea of denouncing pleasure',
            'product_type'=>'Toqilmagan mato',
            'pro_banner_img'=>'product_img/vihGNeDac3vh6veyEJbqhYbfcIZkuWU1BnmcNbhP.png',
            'pro_content_img'=>'product_img/XzJZMjg7FMjdx3rMRzfZVNwFFLzUoVmN1qsGUYTk.jpg',
            'pro_label'=>'To\'quv texnologiyasidan foydalanmasdan ishlab chiqarilgan to\'quv bo\'lmagan
             material. Bu tolalar to\'qilmagan to\'plami bo\'lib, tikuvlar bilan kichik oraliqlarda mahkamlanadi'
        ]);
        MirobidProduct::create([
            'product_name'=>'VAFL MATO',
            'pro_short_content'=>'Vafli mato binolar va jihozlarni tozalash uchun ishlatiladigan boshqa paxta matolaridan sezilarli afzalliklarga ega.',
            'product_type'=>'Toqilmagan mato',
            'pro_banner_img'=>'product_img/jPJnkO9xuQZcDDrfSRwS1qIwBLaz5K2ruutsDHP0.png',
            'pro_content_img'=>'product_img/QUByL9SjhyWYGYQPNepIiwviia4c9iki0ClOlrRY.png',
            'pro_label'=>'To\'quv texnologiyasidan foydalanmasdan ishlab chiqarilgan to\'quv bo\'lmagan
             material. Bu tolalar to\'qilmagan to\'plami bo\'lib, tikuvlar bilan kichik oraliqlarda mahkamlanadi'
        ]);
            MirobidProduct::create([
                'product_name'=>'TERRI SOCHIKLAR',
                'pro_short_content'=>'Terri mato - bu tabiiy mato, uning yuzasi qoziqdan iborat. Qoziq bitta yoki ikkita bo\'lishi mumkin.',
                'product_type'=>'Toqilmagan mato',
                'pro_banner_img'=>'product_img/NyocbOLI12ki7BLIG6ELEWp5fWEVJ3Ws0b5r5dMv.png',
                'pro_content_img'=>'product_img/jzkRei9hS4nZJ0goFRtTPpLtobGDv0IjHWms4XXW.png',
                'pro_label'=>'To\'quv texnologiyasidan foydalanmasdan ishlab chiqarilgan to\'quv bo\'lmagan
                material. Bu tolalar to\'qilmagan to\'plami bo\'lib, tikuvlar bilan kichik oraliqlarda mahkamlanadi'
            ]);
    }
}
