<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $roles = [
            'SuperAdmin',
            'adminstrator',
            'prorab',
            'injiner',
            'cement_zavod',
            'esik_zavod',
            'tasiwshi_texnika',
            'stroy_texnika',
            'magazin',
        ];

        foreach ($roles as $role_name) {
            $role=Role::create(['name' => $role_name]);
        }
        
        User::create([
            'name'=>'SuperMuperAdmin',
            'phone'=>'990611470',
            'password'=>Hash::make('admin')
        ])->assignRole('SuperAdmin');

    }
}
