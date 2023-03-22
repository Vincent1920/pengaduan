<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\masyarakat;
use App\Models\User;

class comment extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'body',
        'title',
        'image'
    ];
    
    public function User(){
    return $this->belongsTo(User::Class);
    }
    
}