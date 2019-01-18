<?php

namespace Mobile;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    
    protected $primaryKey = 'role_id';
    protected $table = 'roles';
    protected $fillable = [
        'name',
    ];
    public function users() {
        return $this->hasMany('Mobile\User', 'users', 'role_id', 'user_id');
    }
}   
