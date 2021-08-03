<?php

namespace Database\Seeders;

use App\Models\amenazas;
use App\Models\debilidades;
use App\Models\Fortaleza;
use App\Models\oportunidades;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin1 = Role::create(['name'=>'Administrador']);
        $user1 = Role::create(['name'=>'Usuario']);
        //$agregar_eliminar = Permission::create(['name'=>'agregar eliminar'])->assignRole($user1);
        
        $user1_admin = User::create([
            'name'=> 'Direccion1',
            'Nombre_Direccion' => 'Dirrección de Tecnología y Sistemas de Información',
            'email'=> 'Dirreccion1@gmail.com',
            'password'=> bcrypt('1234567'),

        ]);

        $user2_user = User::create([
            'name'=> 'Direccion2',
            'Nombre_Direccion' => 'Dirrección de Planificación y Presupuesto Institucional',
            'email'=> 'Dirreccion2@gmail.com',
            'password'=> bcrypt('1234567'),

        ]);
        $user1_admin->assignRole($user1);
        $user2_user->assignRole($user1);

        $admin_clau= User::create([
            'name'=> 'Claudia',
            'Apellido'=> 'Perez',
            'email'=> 'Claudia2@gmail.com',
            'password'=> bcrypt('1234567'),
        ]);
        $admin_clau->assignRole($admin1);

        Fortaleza::create([
            'description'=>'Buen ambiente laboral',
        ]);

        Fortaleza::create([
            'description'=>'Proactividad en la gestión',
        ]);

        Fortaleza::create([
            'description'=>'Conocimiento del mercado',
        ]);

        Fortaleza::create([
            'description'=>'Grandes recursos financieros',
        ]);

        oportunidades::create([
            'description'=>'Regulación a favor',
        ]);

        oportunidades::create([
            'description'=>'Competencia débil',
        ]);

        oportunidades::create([
            'description'=>'Mercado mal atendido',
        ]);

        oportunidades::create([
            'description'=>'Necesidad del producto',
        ]);

        debilidades::create([
            'description'=>'Salarios bajos',
        ]);

        debilidades::create([
            'description'=>'Equipamiento viejo',
        ]);

        debilidades::create([
            'description'=>'Falta de capacitación',
        ]);

        debilidades::create([
            'description'=>'Problemas con la calidad',
        ]);

        amenazas::create([
            'description'=>'Conflictos gremiales',
        ]);

        
        amenazas::create([
            'description'=>'Regulación desfavorable',
        ]);

        
        amenazas::create([
            'description'=>'Cambios en la legislación',
        ]);

        
        amenazas::create([
            'description'=>'Competencia muy agresiva',
        ]);
        

        

    }
}
