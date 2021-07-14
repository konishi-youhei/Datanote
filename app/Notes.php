<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    //
    public function members() {
        $this->hasOne('App\Members');
    }
    public function user() {
        return $this->belongsTo('App\User');
    }

    protected $table = 'notes';
    protected $fillable = [
        'date',
        'place',
        'opponent',
        'match_result_home',
        'match_result_away',
        'url',
        'impressions',
        'created_at',
        'updated_at',
        'comment'
    ];
}
