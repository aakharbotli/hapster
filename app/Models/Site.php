<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name','company_id'];


    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function departments() {
        return $this->belongsToMany(Department::class);
    }

    
}
