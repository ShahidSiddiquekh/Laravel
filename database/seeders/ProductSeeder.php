<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Change "Fascades" to "Facades"

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'LG mobile',
            "price" => "200",
            "description" => "A smartphone with 4GB RAM and much more features",
            "category" => "mobile",
            "gallery" => "https://m.media-amazon.com/images/I/61eWYz4G0yL._AC_SL1000_.jpg",
            [
                'name' => 'Nokia mobile',
            "price" => "200",
            "description" => "A smartphone with 4GB RAM and much more features",
            "category" => "mobile",
            "gallery" => "https://advancetelecom.com.pk/wp-content/uploads/2021/02/Nokia-106-2023-689x726.png",
            ],
            [
            'name' => 'Galaxy mobile',
            "price" => "200",
            "description" => "A smartphone with 4GB RAM and much more features",
            "category" => "mobile",
            "gallery" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqwQiH4yD2CRiTKqcSFbJbreXoxphci20O5w&s",
            ],
            [
                'name' => 'Infinx mobile',
                "price" => "200",
                "description" => "A smartphone with 4GB RAM and much more features",
                "category" => "mobile",
                "gallery" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyHBDZzDgdpKFqpZkCcgf5gqF46jvjTNfc1g&s",
                ],
        ]);
    }
}
