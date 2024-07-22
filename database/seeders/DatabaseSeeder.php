<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Storage::deleteDirectory('products');

        Storage::makeDirectory('products');

        User::factory()->create(
            [
                'name' => 'Edgar Leonel Acevedo Cuevas',
                'email' => 'leoneltestarrosa@gmail.com',
                'password' => bcrypt('Juni1200'),
            ]
        );

        $this->call([
            FamilySeeder::class,
        ]);

        Product::factory(150)->create();
    }
}
