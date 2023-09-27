<?php

namespace Database\Seeders;

use App\Packages\User\Domain\Model\Usuario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->seedUser();
    }

    public function seedUser(): void
    {
        Usuario::factory()->create([
            'name' => 'Test User',
            'email' => '',
        ]);
    }
}
