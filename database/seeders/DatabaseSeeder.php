<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Iya30n\DynamicAcl\Models\Role;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Création de l'utilisateur administrateur
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('123456789')
        ]);

        // Création du rôle de super administrateur avec une permission spéciale
        $superAdminRole = Role::create([
            'name' => 'super_admin',
            'permissions' => serialize(['fullAccess' => 1]) // Attribuer la permission fullAccess
        ]);

        // Associer le rôle de super administrateur à l'utilisateur
        $user->roles()->attach($superAdminRole->id);
    }
}
