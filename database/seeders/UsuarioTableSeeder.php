<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'Nombres'  =>'Andres Fabian',
            'apellidos'=>'Muñoz Arevalo',
            'correo'    =>'andresfabianarevalo@hotmail.com',
            'telefono' =>'3133729276'


        ]);

    }
}
