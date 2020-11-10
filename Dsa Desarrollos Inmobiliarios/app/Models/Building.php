<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Building
 * @package App\Models
 * @version January 11, 2019, 11:47 pm UTC
 *
 * @property \App\Models\Location location
 * @property \Illuminate\Database\Eloquent\Collection GalleryBuilding
 * @property \Illuminate\Database\Eloquent\Collection ImgFlat
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection rooms
 * @property \Illuminate\Database\Eloquent\Collection userRoles
 * @property string name
 * @property string description
 * @property string state
 * @property integer price
 * @property string quality_memory
 * @property string mode_payment
 * @property string observations
 * @property string pool
 * @property string garage
 * @property string outstanding
 * @property integer ubication_id
 */
class Building extends Model
{
    //use SoftDeletes;

    public $table = 'buildings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


   // protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
        'state',
        'price',
        'quality_memory',
        'mode_payment',
        'observations',
        'pool',
        'garage',
        'outstanding',
        'ubication_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'state' => 'string',
        'price' => 'integer',
        'quality_memory' => 'string',
        'mode_payment' => 'string',
        'observations' => 'string',
        'pool' => 'string',
        'garage' => 'string',
        'outstanding' => 'string',
        'ubication_id' => 'integer'
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
    public function location()
    {
        return $this->belongsTo(\App\Models\Location::class,'ubication_id');
    }
    public function ubicationId()
    {
        return $this->belongsTo(\App\Models\Location::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function galleryBuildings()
    {
        return $this->hasMany(\App\Models\GalleryBuilding::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function imgFlats()
    {
        return $this->hasMany(\App\Models\ImgFlat::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function roomNumbers()
    {
        return $this->belongsToMany(\App\Models\RoomNumber::class, 'rooms');
    }
}
