<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Room
 * @package App\Models
 * @version January 12, 2019, 12:46 am UTC
 *
 * @property \App\Models\Building building
 * @property \App\Models\RoomNumber roomNumber
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection userRoles
 * @property integer building_id
 * @property string description
 */
class Room extends Model
{
    //use SoftDeletes;

    public $table = 'rooms';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];


    public $fillable = [
        'building_id',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'room_number_id' => 'integer',
        'building_id' => 'integer',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function building()
    {
        return $this->belongsTo(\App\Models\Building::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function roomNumber()
    {
        return $this->belongsTo(\App\Models\RoomNumber::class, 'room_number_id');
    }
}
