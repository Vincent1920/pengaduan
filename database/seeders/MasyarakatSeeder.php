<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\masyarakat;
use App\Models\Admin;
use App\Models\comment;
use App\Models\User;


class MasyarakatSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     DB::table('comment')->insert([
    //         // 'masyarakat_id'=>'1',
    //         'comment'=> 'Quis velit et sit excepteur nostrud culpa enim.'
    //        ]);
           
        // DB::table('Admin')->insert([
        //     [
        //         'name_admin'=> 'admin1',
        //         'email' => 'admin1@gmail.com',
        //         'password'=>Hash::make('123456'),
        //         // 'comment_admin'=>'Magna veniam labore magna cillum sint exercitation nostrud est adipisicing sunt aute amet excepteur cupidatat.',
        //     ],
        //     [
        //         'name_admin'=> 'admin2',
        //         'email' => 'admin2@gmail.com',
        //         'password'=>Hash::make('123456'),
        //         // 'comment_admin'=>'Magna veniam labore magna cillum sint exercitation nostrud est adipisicing sunt aute amet excepteur cupidatat.',

        //     ]
        // ]);
        DB::table('comment')->insert([
            'user_id'=>'103',
                // 'name'=> 'Johne1',
                // 'nik'=>'12222222222111111',
                // 'username'=>'Johnt1',
                // 'email' => 'bo1b1@gmail.com',
                // 'password'=>Hash::make('123456'),
                  'body'=>'Magna veniam labore magna cillum sint exercitation nostrud est adipisicing sunt aute amet excepteur cupidatat.',
                 'title'=>'Tempor eu ex minim elit id fugiat excepteur et eiusmod dolore do.',
                 'image'=>'12212'
            ]);
        //  DB::table('users')->insert([
        //     'id'=>'100',
        //      'name'=> 'Johne',
        //     'nik'=>'12222222222111111',
        //      'username'=>'Johnt',
        //      'email' => 'bob1@gmail.com',
        //      'password'=>Hash::make('123456'),
        //     //   'body'=>'Magna veniam labore magna cillum sint exercitation nostrud est adipisicing sunt aute amet excepteur cupidatat.',
        //     //  'title'=>'Tempor eu ex minim elit id fugiat excepteur et eiusmod dolore do.'
        // ]);
        // DB::table('nama_tabel')->insert([
        //     [
        //         'kolom1' => 'Nilai 1',
        //         'kolom2' => 'Nilai 2',
        //     ],
        //     [
        //         'kolom1' => 'Nilai 3',
        //         'kolom2' => 'Nilai 4',
        //     ],
        // ]);
        // $user1 = masyarakat::create([
        //     'name' => 'John Doe',
        //     'username'=>'John Doe',
        //     'email' => 'johndoe@example.com',
        //     'password'=>Hash::make('123456')

        // ]);
        
    }
}
