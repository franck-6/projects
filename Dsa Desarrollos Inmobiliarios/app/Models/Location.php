<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Location
 * @package App\Models
 * @version January 12, 2019, 12:51 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Building
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection rooms
 * @property \Illuminate\Database\Eloquent\Collection userRoles
 * @property string name
 * @property string longitud
 * @property string latitud
 */
class Location extends Model
{
    //use SoftDeletes;

    public $table = 'locations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'longitud',
        'latitud'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'longitud' => 'string',
        'latitud' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function buildings()
    {
        return $this->hasMany(\App\Models\Building::class);
    }
}
