<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Car;
use \App\Models\Brand;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = User::factory()->create([
            'name' => 'Jhon Doe',
            'email' => 'JhonD@gmail.com',
        ]);

        $brand = Brand::factory()->create([
            'name' => 'Nissan',
        ]);

        Brand::factory()->create([
            'name' => 'Toyota',
        ]);

        Car::factory(15)->create([
            'user' => $user->id,
            'brand' => $brand->id
        ]);

        Car::create([
            'name' => 'Seat',
            'user' => 1,
            'brand' => 1,
            'year' => '2010',
            'model' => 'Ibiza Style',
            'price' => '210 000',
        ]);  

        Car::create([
            'name' => 'Mazda',
            'user' => 1,
            'brand' => 1,
            'year' => '2015',
            'model' => 'Mazda 3',
            'price' => '250 000',
        ]);  

        Car::create([
            'name' => 'Ford',
            'user' => 1,
            'brand' => 2,
            'year' => '1966',
            'model' => 'Mustang',
            'price' => '480 000',
        ]);
    }
}
