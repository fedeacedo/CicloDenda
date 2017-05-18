<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'name' => 'MTB', 
				'slug' => 'mtb', 
				'description' => 'Categoría de bicis de montaña BTT', 
				'color' => '#08A000'
			],
			[
				'name' => 'ROAD', 
				'slug' => 'road', 
				'description' => 'Categoría de bicis de carretera', 
				'color' => '#1EA1FC'
			]
		);

		Category::insert($data);
    }
}
