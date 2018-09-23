<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'curriculum',
        ]);

        Role::create([
            'name' => 'major',
        ]);

        User::create([
            'name' => 'Wakasek Kurikulum',
            'username' => 'kurikulum',
            'email' => 'kurikulum@smkn4.sch.id',
            'password' => Hash::make('kurikulum'),
            'role_id' => 1
        ]);

        User::create([
            'name' => 'Teknik Mesin',
            'username' => 'mesin',
            'email' => 'mesin@smkn4.sch.id',
            'password' => Hash::make('mesin'),
            'role_id' => 2
        ]);

        User::create([
            'name' => 'Teknik Gambar',
            'username' => 'gambar',
            'email' => 'gambar@smkn4.sch.id',
            'password' => Hash::make('gambar'),
            'role_id' => 2
        ]);


    }
}
