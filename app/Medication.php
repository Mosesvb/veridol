<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'medication';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'quantity', 'ailment'];

    public function restaurant()
    {
        return $this->belongsTo('App\User');
    }

    public function batch()
    {
        return $this->hasMany('App\Batch');
    }

    public function scopePersonalize()
    {
        if (Auth::check()) {
            return self::where('user_id', Auth::user()->id);
        }
    }
}
