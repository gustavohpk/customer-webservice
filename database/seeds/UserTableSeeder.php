<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'username' => 'admin123',
            'name' => 'Administrador Geral',
            'admin' => true,
            'password' => bcrypt('admin123')
        ]);
        // factory(App\User::class, 2)->create();
    }
}
