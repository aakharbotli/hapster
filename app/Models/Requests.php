<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    use HasFactory;

    protected $fillable = [
    'user_id',
    'skill_id',
    'access_type',
    'from_date',
    'to_date',
    'is_access',
    ];

    public function skill(){
        return $this->belongsTo(Skill::class);
    }
    public function user(){

    }

}
