<?php

namespace App\Repositories;

use App\Models\Location;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LocationRepository
 * @package App\Repositories
 * @version January 12, 2019, 12:51 am UTC
 *
 * @method Location findWithoutFail($id, $columns = ['*'])
 * @method Location find($id, $columns = ['*'])
 * @method Location first($columns = ['*'])
*/
class LocationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'longitud',
        'latitud'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Location::class;
    }
}
