<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'batch';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['exp_date', 'mfg_date', 'medication_name', 'batch_number', 'medication_id', 'user_id'];

    public function medication()
    {
        return $this->belongsTo('App\Medication');
    }

    public function scopePersonalize()
    {
        if (Auth::check()) {
            return self::where('user_id', Auth::user()->id);
        }
    }
}
