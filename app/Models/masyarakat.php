<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\comment;
use Database\Seeders\MasyarakatSeeder;
// use HasFactory;
class masyarakat extends Model
{
    public $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];
    public function comment(){

        return $this->hashMany(comment::class,'id_masyarakat');
    }
}
