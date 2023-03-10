<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\destination;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('admin'),
            'role'=>'Admin'
        ]);

        category::create([
            'name'=>'Local'
        ]);
        category::create([
            'name'=>'Foreign Countries'
        ]);

        destination::create([
            'category_id'=>1,
            'name'=>'Geopark Ciletuh Beach',
            'address'=>'WG9C+X95, Unnamed Road, Kertajaya, Simpenan, Sukabumi Regency, West Java 43361',
            'locationlink'=>'https://www.google.co.id/maps/place/Geopark+Ciletuh/@-7.0801035,106.5165049,17z/data=!3m1!4b1!4m6!3m5!1s0x2e429e3ae37cebc7:0x1e1ecb58b8099423!8m2!3d-7.0801035!4d106.5209896!16s%2Fg%2F11hcd6qwp9',
            'description'=>'Geopark Ciletuh memiliki bentuk menyerupai tapal kuda (amphitheater) dengan diameter sekitar 15 kilometer yang menghadap ke Teluk Ciletuh. Dengan area yang berada dalam naungan UNESCO. Begitu luas, jumlah obyek wisata di Geopark Ciletuh pun sangat banyak, mencapai 70 obyek wisata.',
            'image'=>'img/ciletuh.jpg'
        ]);

        destination::create([
            'category_id'=>2,
            'name'=>'Pyramid',
            'address'=>'Al Haram, Giza Governorate 3512201, Mesir',
            'locationlink'=>'https://www.google.co.id/maps/place/Pyramids+Gardens,+Al+Haram,+Jizah,+Mesir/@29.9680929,31.0826395,14z/data=!3m1!4b1!4m6!3m5!1s0x14584feb830d4c3b:0xf4c7238eac24d083!8m2!3d29.9711917!4d31.1013439!16s%2Fg%2F1hhk8yj1l',
            'description'=>'Piramida Mesir adalah sebutan untuk sebuah bangunan berbentuk segitiga di Mesir yang merupakan piramida kuno berbentuk dengan struktur dari batu. Pada bulan November tahun 2008, diperkirakan bahwa terdapat 138 atau 118 jumlah piramida Mesir yang telah teridentifikasi.',
            'image'=>'img/mesir.jpg'
        ]);

        destination::create([
            'category_id'=>2,
            'name'=>'Suspension Bridge',
            'address'=>'Jl. Kadudampit, Gede Pangrango, Kec. Kadudampit, Kabupaten Sukabumi, Jawa Barat 43153',
            'locationlink'=>'https://www.google.co.id/maps/place/Jembatan+Gantung+Situ+Gunung+555/@-6.8357771,106.926393,17z/data=!3m1!4b1!4m6!3m5!1s0x2e684bff88709631:0xda8bc9883c2b2279!8m2!3d-6.8357771!4d106.9285817!16s%2Fg%2F11t6prjzc1',
            'description'=>'Mengutip dari situs resmi Situ Gunung Bridge, jembatan gantung Situ Gunung ini merupakan jembatan gantung terpanjang di Asia Tenggara. Membentang di atas 243 meter, lebar 1,8 meter, dan ketinggan 121 meter, tempat wisata ini berlokasi di Taman Wisata Situ Gunung, Sukabumi, Jawa Barat.',
            'image'=>'img/jembatan.jpg'
        ]);

        destination::create([
            'category_id'=>2,
            'name'=>'Effiel Tower',
            'address'=>'Champ de Mars, 5 Av. Anatole France, 75007 Paris, France',
            'locationlink'=>'https://www.google.com/maps/place/Eiffel+Tower/@48.85837,2.2899966,17z/data=!3m2!4b1!5s0x47e66fe1ee0293a1:0x213fe992eb6cca0c!4m5!3m4!1s0x47e66e2964e34e2d:0x8ddca9ee380ef7e0!8m2!3d48.8583701!4d2.2944813',
            'description'=>'Menara Eiffel (bahasa Perancis: La tour Eiffel) adalah bangunan yang paling menonjol di kota Paris dan dikenal di dunia sebagai simbol negara Perancis. Namanya diambil dari nama perancangnya, Alexandre Gustave Eiffel dan sejak dibangun pada 1889 sampai 1930 adalah bangunan tertinggi di dunia. Sebagai tempat wisata dan ikon Paris serta Perancis, menara ini dikunjungi oleh sekitar 5,5 juta turis.',
            'image'=>'img/asd.jpg'
        ]);

    }
}
