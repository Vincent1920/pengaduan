<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\comment;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // comment::create([
        //     'comment'=>'bob',
        // ]);
        DB::table('comment')->insert([
        [
            'comment'=>'Quis velit et sit excepteur nostrud culpa enim.'
        ],
        [
            'comment'=>'Quis velit et sit excepteur nostrud culpa enim.'
        ]

        ]);
    }
}
