<?php

namespace App\Repositories;

use App\Models\RoomNumber;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RoomNumberRepository
 * @package App\Repositories
 * @version January 12, 2019, 12:48 am UTC
 *
 * @method RoomNumber findWithoutFail($id, $columns = ['*'])
 * @method RoomNumber find($id, $columns = ['*'])
 * @method RoomNumber first($columns = ['*'])
*/
class RoomNumberRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RoomNumber::class;
    }
}
