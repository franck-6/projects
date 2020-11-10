<?php

namespace App\Repositories;

use App\Models\ImageFlat;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ImageFlatRepository
 * @package App\Repositories
 * @version January 12, 2019, 12:53 am UTC
 *
 * @method ImageFlat findWithoutFail($id, $columns = ['*'])
 * @method ImageFlat find($id, $columns = ['*'])
 * @method ImageFlat first($columns = ['*'])
*/
class ImageFlatRepository extends BaseRepository
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
        return ImageFlat::class;
    }
}
