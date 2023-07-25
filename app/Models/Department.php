<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable =['parent_id','name','description'];
    

    public function site(){
        return $this->belongsTo(Site::class);
    }

    public function parent(){
        return $this->belongsTo(Department::class,'parent_id');
    }
    public function children(){
        return $this->hasMany(Department::class,'parent_id');
    }

}
