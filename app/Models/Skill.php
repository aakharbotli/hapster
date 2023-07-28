<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

   protected $fillable=['name','image'];

   public function departments(){
    return $this->belongsToMany(Department::class);
   }
   public function requests(){
        return $this->hasMany(Request::class);
   }
   
}
