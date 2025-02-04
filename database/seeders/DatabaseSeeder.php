<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $roles=[
            ['name'=>'Admin'],
            ['name'=>'Operator'],
            ['name'=>'Finance']
        ];
        foreach($roles as $role){
            Role::upsert(
                $role,
                ['name'],
                ['name']
            );

        }
        User::upsert([
            'name'=>'admin',
            'role_id'=>1,
            'email'=>'admin@vero.uz',
            'password'=>Hash::make('123456789')
            ],
            ['name'],
            ['name']
        );
    }
}
