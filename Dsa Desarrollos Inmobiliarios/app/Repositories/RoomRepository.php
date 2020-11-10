<?php

namespace App\Repositories;

use App\Models\Room;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RoomRepository
 * @package App\Repositories
 * @version January 12, 2019, 12:46 am UTC
 *
 * @method Room findWithoutFail($id, $columns = ['*'])
 * @method Room find($id, $columns = ['*'])
 * @method Room first($columns = ['*'])
*/
class RoomRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'building_id',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Room::class;
    }
}
