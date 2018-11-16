<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	   $this->call(DepartamentoTablaSeeder::class);
	   $this->call(EmpleadoTablaSeeder::class);
	   $this->call(ProyectoTablaSeeder::class);
	   $this->call(Empleado_ProyectoTablaSeeder::class);
    }
}
