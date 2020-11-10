<?php

namespace App\Repositories;

use App\Models\Lead;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LeadRepository
 * @package App\Repositories
 * @version February 25, 2019, 4:47 am UTC
 *
 * @method Lead findWithoutFail($id, $columns = ['*'])
 * @method Lead find($id, $columns = ['*'])
 * @method Lead first($columns = ['*'])
*/
class LeadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'room',
        'state',
        'advance_payment',
        'fee_month'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Lead::class;
    }
}
