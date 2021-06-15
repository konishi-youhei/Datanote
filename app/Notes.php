<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    //
    public function members() {
        $this->hasOne('App\Members');
    }
}
