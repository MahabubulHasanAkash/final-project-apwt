<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        // DB::table('roles')->insert([
        //     'name' => "Admin",
        // ]);
        // DB::table('roles')->insert([
        //     'name' => "Manager",
        // ]);
        // DB::table('roles')->insert([
        //     'name' => "Executive",
        // ]);

        // foreach (range(1, 150) as $index) {
        //     DB::table('analitycsuser')->insert([
        //         'name' => $faker->name,
        //         'email' => $faker->unique()->safeEmail,
        //         'address' => $faker->address,
        //         'image' => '1624914392.png',
        //         'phone' => $faker->tollFreePhoneNumber,
        //         'roles_id' => rand(1, 3),
        //         'password' => encrypt('password'),
        //         'created_at' => $faker->dateTimeBetween('-6 month', '+2 month')
        //     ]);
        // }

        foreach (range(1, 150) as $index) {
            DB::table('Compititor')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => encrypt('password'),
                'created_at' => $faker->dateTimeBetween('-6 month', '+2 month')
            ]);
        }
        foreach (range(1, 80) as $index) {
            DB::table('creatives')->insert([
                'name' => $faker->text($maxNbChars = 10),
                'description' => $faker->realText($maxNbChars = 100, $indexSize = 2),
                'url' => '1624719008.jpg',
                'price' => random_int(100, 999),
                'status' => rand(0, 1),
                'userid' => rand(1, 150),
                'created_at' => $faker->dateTimeBetween('-6 month', '+2 month')
            ]);
        }
        foreach (range(1, 80) as $index) {
            DB::table('sales')->insert([
                'name' => $faker->text($maxNbChars = 10),
                'unit' => random_int(5, 100),
                'total' => 100,
                'unit_price' => random_int(100, 999),
                'created_at' => $faker->dateTimeBetween('-6 month', '+2 month')
            ]);
        }
        // foreach (range(1, 80) as $index) {
        //     DB::table('inventories')->insert([
        //         'name' => $faker->text($maxNbChars = 10),
        //         'description' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        //         'category' => $faker->text($maxNbChars = 6),
        //         'quantity' => random_int(0, 999),
        //         'price' => random_int(100, 99999),
        //         'created_at' => $faker->dateTimeBetween('-6 month', '+2 month')
        //     ]);
        // }
    }
}
