<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		[
	            'name' => "Gretar",
	            'email' => "gretar95@gmail.com",
	            'password' => bcrypt('123456'),
	        ],
	        [
	            'name' => "Ari",
	            'email' => "ari@gmail.com",
	            'password' => bcrypt('123456'),
	        ]
        ]);

        DB::table('shoes')->insert([
        	[
	            'brand' => "nike",
	        	'size' => 42,
	        	'color' => "White",
	        	'price' => 5000,
	        	'user_id' => 1,
        	],
        	[
	            'brand' => "gucci",
	        	'size' => 40,
	        	'color' => "Green",
	        	'price' => 6000,
	        	'user_id' => 1,
        	],
        	[
	            'brand' => "Adidas",
	        	'size' => 44,
	        	'color' => "Black",
	        	'price' => 8000,
	        	'user_id' => 2,
        	],
        	[
	            'brand' => "Timberland",
	        	'size' => 43,
	        	'color' => "Yellow",
	        	'price' => 7000,
	        	'user_id' => 2,
        	]
        ]);
    }
}
