<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\masyarakat;
use App\Models\comment;
use App\Models\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */


    
    public function run(): void
    {
        
       
    
        DB::table('Users')->insert([
            'id'=>'100',
            'name'=> 'Jodhne Doe',
            'username'=>'Jssohnt Doe',
            'email' => ' bobws@gmail.com',
            'password'=>Hash::make('123456'),

        ]);
        // DB::table('Users')->insert([
        //     'body'=>'Mollit ex qui anim reprehenderit culpa.',
        //     'title'=>'Incididunt occaecat eiusmod labore aliquip deserunt sit velit cupidatat veniam amet nostrud do amet.',

        // ]);
        

    }
}
