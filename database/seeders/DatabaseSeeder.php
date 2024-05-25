<?php

namespace Database\Seeders;

use App\Models\File;
use App\Models\Folder;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Folder::truncate();
        File::truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Folder::factory(3)->create(); // 1, 2, 3
        File::factory(4)->create(); // 1, 2, 3, 4

        Folder::factory(3)->parent(1)->create(); // 4, 5, 6
        Folder::factory(2)->parent(2)->create(); // 7, 8
        Folder::factory(4)->parent(3)->create(); // 9, 10, 11, 12

        Folder::factory(1)->parent(4)->create(); // 13
        Folder::factory(1)->parent(5)->create(); // 14
        Folder::factory(1)->parent(6)->create(); // 15

        File::factory(2)->folder(1)->create();
        File::factory(2)->folder(2)->create();
        File::factory(2)->folder(3)->create();
        File::factory(2)->folder(4)->create();
        File::factory(2)->folder(5)->create();
        File::factory(2)->folder(6)->create();
        File::factory(4)->folder(13)->create();
        File::factory(8)->folder(14)->create();
        File::factory(10)->folder(15)->create();
    }
}
