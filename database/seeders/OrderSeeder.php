<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    protected string $table = "news_order";
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table($this->table)->insert($this->getData());
    }

    public function getData(): array {

        $quantity = 10;
        $orders = [];

        for($i = 0; $i < $quantity; $i++) {
            $orders[] = [
                "name" => fake()->name(),
                "phone" => fake()->phoneNumber(),
                "image" => fake()->email(),
                "description" => fake()->text(100),
                "created_at" => now()
            ];
        }

        return $orders;
    }
}
