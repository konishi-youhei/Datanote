<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    public function Notes() {
        return $this->belongsTo('App\Notes');
    }
    //
    protected $table = 'members';
    protected $fillable = [
        'member1',
        'member2',
        'member3',
        'member4',
        'member5',
        'member6',
        'member7',
        'member8',
        'member9',
        'member10',
        'member11',
        'member12',
        'member13',
        'member14',
        'member15',
        'member16',
        'member17',
        'member18',
        'note_id',
    ];
}
