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
            'detail' => 'The classic iced coffee drink rich, full-bodied espresso combined with milk and ice, then topped with whipped cream.',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
        ]);

        Item::create([
            'name' => 'Espresso Macchiato',
            'detail' => 'Steamed milk and foam, with just about half a shot of espresso. This beverage is excellent for coffee lovers who love the espresso flavour!',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
        
        ]);
        Item::create([
            'name' => 'Cappaccino',
            'detail' => 'Espresso, expertly blended with steamed, frothy milk. We love a creamy cappuccino topped with a sprinkling of cocoa powder',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
           
        ]);
        Item::create([
            'name' => 'Mochaccino',
            'detail' => 'Hybrid between a mocha and a cappuccino made with chocolate sauce. Perfect for the chocoholic who likes a foamy mocha!',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
           
        ]);
    }
}
