<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name'];

    public function sites(){
        return $this->hasMany(Site::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

}
