<?php

namespace App\Repositories;

use App\Models\LeadParameters;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LeadParametersRepository
 * @package App\Repositories
 * @version April 20, 2019, 9:08 pm UTC
 *
 * @method LeadParameters findWithoutFail($id, $columns = ['*'])
 * @method LeadParameters find($id, $columns = ['*'])
 * @method LeadParameters first($columns = ['*'])
*/
class LeadParametersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'advancedpayment_firstoption',
        'advancedpayment_secondoption',
        'advancedpayment_thirdoption',
        'feemonth_firstoption',
        'feemonth_secondoption',
        'feemonth_thirdoption'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return LeadParameters::class;
    }
}
