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
            'image' => 'https://images.unsplash.com/photo-1589396575653-c09c794ff6a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
            'name' => 'Mocha',
            'detail' => 'The classic iced coffee drink rich, full-bodied espresso combined with milk and ice, then topped with whipped cream.',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
        ]);

        Item::create([
            'image' => 'https://images.unsplash.com/photo-1485808191679-5f86510681a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
            'name' => 'Espresso Macchiato',
            'detail' => 'Steamed milk and foam, with just about half a shot of espresso. This beverage is excellent for coffee lovers who love the espresso flavour!',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
        
        ]);
        Item::create([
            'image' => 'https://images.unsplash.com/photo-1517256064527-09c73fc73e38?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
            'name' => 'Cappaccino',
            'detail' => 'Espresso, expertly blended with steamed, frothy milk. We love a creamy cappuccino topped with a sprinkling of cocoa powder',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
           
        ]);

        Item::create([
            'image' => 'https://images.unsplash.com/photo-1621221814631-e8bfdabd5ca4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80',
            'name' => 'Mochaccino',
            'detail' => 'Hybrid between a mocha and a cappuccino made with chocolate sauce. Perfect for the chocoholic who likes a foamy mocha!',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
           
        ]);

        Item::create([
            'image' => 'https://images.unsplash.com/photo-1580661869408-55ab23f2ca6e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1935&q=80',
            'name' => 'Americano',
            'detail' => 'Our famously intense Espresso softened with water. Drink it straight up or add a splash of milk. You’ll love it either way.',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
           
        ]);


        Item::create([
            'image' => 'https://images.unsplash.com/photo-1620360290038-71942f99fa96?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
            'name' => 'Frappe-licious',
            'detail' => 'A creamy indulgent drink with a taste of Vanilla, served over crushed ice!',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
           
        ]);

        Item::create([
            'image' => 'https://images.unsplash.com/photo-1541167760496-1628856ab772?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1337&q=80',
            'name' => 'Latte',
            'detail' => 'The perfect combination of our aromatic Espresso and creamy steamed milk that just makes any day special.',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
           
        ]);
    }
}
