<?php

namespace App\Models;

use Eloquent as Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LeadParameters
 * @package App\Models
 * @version April 20, 2019, 9:08 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection rooms
 * @property \Illuminate\Database\Eloquent\Collection userRoles
 * @property integer advancedpayment_firstoption
 * @property integer advancedpayment_secondoption
 * @property integer advancedpayment_thirdoption
 * @property integer feemonth_firstoption
 * @property integer feemonth_secondoption
 * @property integer feemonth_thirdoption
 */
class LeadParameters extends Model
{
   // use SoftDeletes;

    public $table = 'lead_parameters';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];


    public $fillable = [
        'advancedpayment_firstoption',
        'advancedpayment_secondoption',
        'advancedpayment_thirdoption',
        'feemonth_firstoption',
        'feemonth_secondoption',
        'feemonth_thirdoption'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'advancedpayment_firstoption' => 'integer',
        'advancedpayment_secondoption' => 'integer',
        'advancedpayment_thirdoption' => 'integer',
        'feemonth_firstoption' => 'integer',
        'feemonth_secondoption' => 'integer',
        'feemonth_thirdoption' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
