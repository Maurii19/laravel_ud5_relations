<?php

use Illuminate\Database\Seeder;

class EmpleadoTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		for ($i=0; $i < 10; $i++) { 
        		DB::table('empleados')->insert([
        		'nombre' => str_random(5),
        		'apellido1' => str_random(6),
        		'apellido2' => str_random(6),
        		'email' => str_random(6),
        		'telefono' => random_int(9, 9),
                'departamento_id' => random_int(1, 10)
                
        	]);
        	}
    }
}
