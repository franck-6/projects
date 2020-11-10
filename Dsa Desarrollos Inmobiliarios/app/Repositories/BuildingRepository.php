<?php

namespace App\Repositories;

use App\Models\Building;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BuildingRepository
 * @package App\Repositories
 * @version January 11, 2019, 11:47 pm UTC
 *
 * @method Building findWithoutFail($id, $columns = ['*'])
 * @method Building find($id, $columns = ['*'])
 * @method Building first($columns = ['*'])
*/
class BuildingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Building::class;
    }
}
