<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RoomNumber
 * @package App\Models
 * @version January 12, 2019, 12:48 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection rooms
 * @property \Illuminate\Database\Eloquent\Collection userRoles
 * @property string name
 */
class RoomNumber extends Model
{
   // use SoftDeletes;

    public $table = 'room_numbers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


   // protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function buildings()
    {
        return $this->belongsToMany(\App\Models\Building::class, 'rooms');
    }
}
