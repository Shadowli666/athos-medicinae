<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medic extends Model
{
    /**
     * The table associated with the model
     * 
     * @var string
     */
    protected $table = 'medics';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */

    public $timestamps = true;

    protected $fillable = [
        'name',
        'last_name',
        'ci',
        'email',
        'phone',
        'created_at',
        'updated_at'
    ];
}
