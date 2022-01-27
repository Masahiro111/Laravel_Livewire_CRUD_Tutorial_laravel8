<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert(
            [
                'name' => 'PHP',
                'slug' => 'PHP slug',
            ],
            [
                'name' => 'Laravel',
                'slug' => 'Laravel slug',
            ],
            [
                'name' => 'Livewire',
                'slug' => 'Livewire slug',
            ],
        );
    }
}
