<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable=['role_id','title'];
    public function permissions(){
        return $this->belongsToMany(Permission::class,'permission_role');
    }
    public function haspermission($permission){
        return $this->permissions()
            ->where('id',$permission->id)
            ->exists();
    }
}
