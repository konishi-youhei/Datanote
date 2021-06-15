<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    /**
     * Userとの1対多の関係に関する記述
     */
    public function users(){
        return $this->hasMany('App\User');
    }
    /**
     * Adminとの1対多の関係に関する記述
     */
    public function admins(){
        return $this->hasMany('App\Models\Admin');
    }
}
