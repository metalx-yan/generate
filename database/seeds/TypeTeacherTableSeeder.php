<?php

use Illuminate\Database\Seeder;
use App\Models\TypeTeacher;

class TypeTeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = [
        	'jurusan',
        	'umum'
        ];

        foreach ($type as $types) {
        	TypeTeacher::create([
        		'name' => $types,
                'slug' => str_slug($types)
        	]);
        }
    }
}
