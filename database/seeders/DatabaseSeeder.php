<?php

namespace Database\Seeders;

use Database\Seeders\Produto\ProdutoSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProdutoSeeder::class,
        ]);
    }
}
