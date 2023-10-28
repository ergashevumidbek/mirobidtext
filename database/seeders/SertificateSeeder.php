<?php

namespace Database\Seeders;

use App\Models\Sertificate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sertificate::create([
            'gost_name'=>'Guvohnoma',
            'gost_banner_img'=>'sertificates/zqtw4zRu8UQKATfwzshndOiDwUmvuGuujJFKFfsq.jpg',
            'gost_label'=>'it aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempor
            a incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi c'
        ]);
        Sertificate::create([
            'gost_name'=>'Ekologik sertifikat',
            'gost_banner_img'=>'sertificates/itEWavbBnSwoAu9BRbN24IBtM86y668jQNX6vpsp.jpg',
            'gost_label'=>'it aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempor
            a incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi c'
        ]);
        Sertificate::create([
            'gost_name'=>'Muvofiqlik sertifikati',
            'gost_banner_img'=>'sertificates/PJ7nKX2nfhf0gRjCY5WCZDVKcXsbcM0XOeyqCtfy.jpg',
            'gost_label'=>'it aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempor
            a incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi c'
        ]);
    }
}
