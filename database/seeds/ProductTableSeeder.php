 <?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
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
				'name' 			=> 'Bicicleta de doble suspensión Ghost Riot LC 10 2016',
				'slug' 			=> 'Bicicleta-de-doble-suspensión-Ghost-Riot-LC-10-2016',
				'description' 	=> 'Una horquilla de 150mm con barras más gruesas y ajuste de amortiguador mejorado entrega una obediencia definitiva, y también ayuda a una cinemática perfectamente equilibrada.',
				'extract' 		=> 'Hemos mejorado el cuadro, agregado nuevas características e incluso ganado más premios. ¿Por qué? Hemos escuchado comentarios y unido lo mejor de la Riot y Riot LT en una definitiva bicicleta de trail.',
				'price' 		=> 5248.99,
				'image' 		=> 'http://www.carmabike.es/wp-content/uploads/2015/11/MY2016_SLAMR_X_10_LC_BLACK_RED_DARKRED_V_01.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],

			[
				'name' 			=> 'Bicicleta Nukeproof Mega 275 Pro 2017',
				'slug' 			=> 'Bicicleta-de-doble-suspensión-Nukeproof-Mega-275-Pro-2017',
				'description' 	=> 'La Mega 275 Pro cuenta con la mezcla perfecta de componentes para ser fiable en cualquier descenso, mientras que sigue siendo competente en los ascensos. Esta especificación de All Mountain está equipada para enfrentarse a cualquier cosa.',
				'extract' 		=> 'Para el 2017 la evolución continúa con la introducción de la Mega con la especificación más agresiva hasta el momento.',
				'price' 		=> 3399.99,
				'image' 		=> 'http://www.carmabike.es/wp-content/uploads/2015/11/MY2016_SLAMR_X_10_LC_BLACK_RED_DARKRED_V_01.png',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			
			
		);

		Product::insert($data);
    }
}
