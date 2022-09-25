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
            'image' => 'https://images.unsplash.com/photo-1495147466023-ac5c588e2e94?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80',
            'name' => 'Eat nourishing food',
            'detail' => 'A well-balanced, healthy diet is at the core of well-being. You really are what you eat.',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
        ]);

        Item::create([
            'image' => 'https://images.unsplash.com/photo-1541781774459-bb2af2f05b55?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=860&q=80',
            'name' => 'Sleep seven to eight hours per night. ',
            'detail' => 'Prioritizing sleep is one of the best things you can do to set yourself up for a successful, energized day. Getting quality sleep is a healthy habit many people need to improve',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
        
        ]);
        Item::create([
            'image' => 'https://images.unsplash.com/photo-1599894019794-50339c9ad89c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1035&q=80',
            'name' => 'Keep company with good people',
            'detail' => 'Maximize the amount of time that you spend with people you enjoy being around. Connecting with others who radiate positivity and have similar interests will excite and energize you.',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
           
        ]);

        Item::create([
            'image' => 'https://images.unsplash.com/photo-1495020689067-958852a7765e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80',
            'name' => 'Avoid news overdose',
            'detail' => 'Consuming news is an important but unfortunately, the news too frequently is filled with stories of suffering. These stories can skew your view of the world and cause you to focus on your worst fears instead of recognizing the good that surrounds you.',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
           
        ]);

        Item::create([
            'image' => 'https://images.unsplash.com/photo-1590779033100-9f60a05a013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80',
            'name' => 'Get regular exercise',
            'detail' => 'Exercise relieves stress and tension, strengthens muscles and boosts endurance, and helps your body work more efficiently during other physical tasks or activities.',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
           
        ]);


        Item::create([
            'image' => 'https://images.unsplash.com/photo-1590779033100-9f60a05a013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=987&q=80',
            'name' => 'Do something meaningful each day',
            'detail' => 'Putting effort into the things that matter most to you will help you use and reserve your energy in ways that will bring out the best in you.',
            'created_at' => date('y-m-d'),	
		    'updated_at' => date('y-m-d')	
           
        ]);
    }
}
