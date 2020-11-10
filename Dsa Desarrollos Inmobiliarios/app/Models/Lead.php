<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Lead
 * @package App\Models
 * @version February 25, 2019, 4:47 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection rooms
 * @property \Illuminate\Database\Eloquent\Collection userRoles
 * @property string room
 * @property string state
 * @property string advance_payment
 * @property string fee_month
 */
class Lead extends Model
{
    //use SoftDeletes;

    public $table = 'leads';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];


    public $fillable = [
        'room',
        'state',
        'advance_payment',
        'fee_month'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'room' => 'string',
        'state' => 'string',
        'advance_payment' => 'string',
        'fee_month' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
