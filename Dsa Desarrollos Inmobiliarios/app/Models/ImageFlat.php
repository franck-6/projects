<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ImageFlat
 * @package App\Models
 * @version January 12, 2019, 12:53 am UTC
 *
 * @property \App\Models\Building building
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection rooms
 * @property \Illuminate\Database\Eloquent\Collection userRoles
 * @property integer building_id
 * @property string name
 * @property string image
 * @property integer orden
 */
class ImageFlat extends Model
{
   // use SoftDeletes;

    public $table = 'img_flats';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    //protected $dates = ['deleted_at'];


    public $fillable = [
        'building_id',
        'name',
        'image',
        'orden'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'building_id' => 'integer',
        'name' => 'string',
        'image' => 'string',
        'orden' => 'integer'
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
}
