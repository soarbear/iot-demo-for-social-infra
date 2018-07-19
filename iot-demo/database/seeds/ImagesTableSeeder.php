<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->truncate();
  
        DB::table('images')->insert([
            [
                'description' => 'ビル#1写真#1',
                'file' => 'IMG_1238.jpg',
                'created_at' => '2015-08-16 00:11:00',
                'updated_at' => '2015-08-16 00:11:00',
            ],
            [
                'description' => 'ビル#2写真#2',
                'file' => 'IMG_1239.jpg',
                'created_at' => '2015-08-16 00:11:00',
                'updated_at' => '2015-08-16 00:11:00',
            ],
                        [
                'description' => 'ビル#3写真#3',
                'file' => 'IMG_1243.jpg',
                'created_at' => '2015-08-16 00:11:00',
                'updated_at' => '2015-08-16 00:11:00',
            ],
            [
                'description' => 'ビル#4写真#4',
                'file' => 'IMG_1370.jpg',
                'created_at' => '2015-08-16 00:11:00',
                'updated_at' => '2015-08-16 00:11:00',
            ],
            [
                'description' => 'ビル#5写真#5',
                'file' => 'IMGP0394.jpg',
                'created_at' => '2015-08-16 00:11:00',
                'updated_at' => '2015-08-16 00:11:00',
            ],
            [
                'description' => 'ビル#6写真#6',
                'file' => 'IMGP0413.jpg',
                'created_at' => '2015-08-16 00:11:00',
                'updated_at' => '2015-08-16 00:11:00',
            ],
        ]);
    }
}