<?php

namespace App\Repositories;

use App\Models\GalleryBuilding;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GalleryBuildingRepository
 * @package App\Repositories
 * @version January 12, 2019, 12:54 am UTC
 *
 * @method GalleryBuilding findWithoutFail($id, $columns = ['*'])
 * @method GalleryBuilding find($id, $columns = ['*'])
 * @method GalleryBuilding first($columns = ['*'])
*/
class GalleryBuildingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'building_id',
        'name',
        'image',
        'orden'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return GalleryBuilding::class;
    }
}
