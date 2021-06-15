<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    /**
     * Userとの多対1の関係に関する記述
     */
    public function users(){
        return $this->hasMany('App\User');
    }
    /**
     * Adminとの多対1の関係に関する記述
     */
    public function admins(){
        return $this->hasMany('App\Models\Admin');
    }
}
