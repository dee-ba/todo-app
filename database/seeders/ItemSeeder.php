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
            'image' => 'https://images.unsplash.com/photo-1589396575653-c09c794ff6a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
           
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
        ]);

        Item::create([
            'name' => 'Espresso Macchiato',
            'detail' => 'Steamed milk and foam, with just about half a shot of espresso. This beverage is excellent for coffee lovers who love the espresso flavour!',
            'image' => 'https://images.unsplash.com/photo-1485808191679-5f86510681a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
       
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
        
        ]);
        Item::create([
            'name' => 'Cappaccino',
            'detail' => 'Espresso, expertly blended with steamed, frothy milk. We love a creamy cappuccino topped with a sprinkling of cocoa powder',
            'image' => 'https://images.unsplash.com/photo-1517256064527-09c73fc73e38?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
           
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
           
        ]);
        Item::create([
            'name' => 'Mochaccino',
            'detail' => 'Hybrid between a mocha and a cappuccino made with chocolate sauce. Perfect for the chocoholic who likes a foamy mocha!',
            'image' => 'https://images.unsplash.com/photo-1589396575653-c09c794ff6a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
         
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
           
        ]);
    }
}
