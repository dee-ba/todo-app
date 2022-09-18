<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Ramsey\Uuid\Type\Decimal;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('items')->insert([
            'name' => 'Mocha',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
        ]);

        Item::create([
            'name' => 'Espresso Macchiato',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
        
        ]);
        Item::create([
            'name' => 'Cappaccino',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
           
        ]);
        Item::create([
            'name' => 'Mochaccino',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
           
        ]);
    }
}
