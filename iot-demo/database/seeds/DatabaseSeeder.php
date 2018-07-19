<?php

use App\User;
use App\Building;
use App\House;
use App\Mansion;
use App\Image;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        $this->call(UsersTableSeeder::class);  // 追加
        $this->call(BuildingsTableSeeder::class);
        $this->call(HousesTableSeeder::class);
        $this->call(MansionsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
       
        Model::reguard();
    }
    
}

// 追加
class UsersTableSeeder extends Seeder
{
 
    public function run()
    {
        DB::table('users')->delete();
 
        User::create([
            'name' => 'YANAGI tateo',
            'email' => 'yanagi@soarcloud.com',
            'password' => bcrypt('yanagi')
        ]);
    }
}
 
class BuildingsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('buildings')->delete();
 
        $user = User::all()->first();
        $faker = Faker::create('ja_JP');
 
        for ($i = 0; $i < 32; $i++) {
            $building = new Building([
                'project_name' => $faker->city(),
                'user_name' => 'YANAGI Tateo',
                'status' => '点検対象',
                'b_data4' => 'data4',
                'b_data5' => 'data5',
                'b_data6' => 'data6',
                'b_data7' => 'data7',
                'b_data8' => 'data8',
                'b_data9' => 'data9',
                'user_name0' => 'data10',
                'user_name1' => 'data11',
                'user_name2' => 'data12',
                'user_name3' => 'data13',
                'user_name4' => 'data14',
                'user_name5' => 'data15',
                'user_name6' => 'data16',
                'user_name7' => 'data17',
                'user_name8' => 'data18',
                'user_name9' => 'data19',  
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            $user->buildings()->save($building);  // $userと関連付けて $buildingを保存
        }
    }
}
class HousesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('houses')->delete();
 
        $user = User::all()->first();
        $faker = Faker::create('en_US');
 
        for ($i = 0; $i < 32; $i++) {
            $house = new House([
                'project_name' => $faker->city(),
                'user_name' => 'YANAGI Tateo',
                'status' => '点検対象',
                'h_data4' => 'data4',
                'h_data5' => 'data5',
                'h_data6' => 'data6',
                'h_data7' => 'data7',
                'h_data8' => 'data8',
                'h_data9' => 'data9',
                'user_name0' => 'data10',
                'user_name1' => 'data11',
                'user_name2' => 'data12',
                'user_name3' => 'data13',
                'user_name4' => 'data14',
                'user_name5' => 'data15',
                'user_name6' => 'data16',
                'user_name7' => 'data17',
                'user_name8' => 'data18',
                'user_name9' => 'data19',  
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            $user->houses()->save($house);  // $userと関連付けて $buildingを保存
        }
    }
}

class MansionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('mansions')->delete();
 
        $user = User::all()->first();
        $faker = Faker::create('en_US');
 
        for ($i = 0; $i < 32; $i++) {
            $mansion = new Mansion([
                'project_name' => $faker->city(),
                'user_name' => 'YANAGI Tateo',
                'status' => '点検対象',
                'm_data4' => 'data4',
                'm_data5' => 'data5',
                'm_data6' => 'data6',
                'm_data7' => 'data7',
                'm_data8' => 'data8',
                'm_data9' => 'data9',
                'user_name0' => 'data10',
                'user_name1' => 'data11',
                'user_name2' => 'data12',
                'user_name3' => 'data13',
                'user_name4' => 'data14',
                'user_name5' => 'data15',
                'user_name6' => 'data16',
                'user_name7' => 'data17',
                'user_name8' => 'data18',
                'user_name9' => 'data19',  
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            $user->mansions()->save($mansion);  // $userと関連付けて $buildingを保存
        }
    }
}

class ImagesTableSeeder extends Seeder
{
 
    public function run()
    {
        DB::table('images')->delete();
 
        $building = Building::all()->first();
        $faker = Faker::create('ja_JP');
 
        for ($i = 1; $i < 13; $i++) {
            // Article::create([
            //  'title' => $faker->sentence(),
            //  'body' => $faker->paragraph(),
            //  'published_at' => CarbonCarbon::today(),
            // ]);
            //$building = Building::find($i);

            // 変更
            $image = new Image([
                'description' => $faker->sentence(),
                'file' => 'IMG_1370.JPG',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            $building->images()->save($image);  // $userと関連付けて $articleを保存
            $building->increment('image_count');// 追加
        }
    }
}