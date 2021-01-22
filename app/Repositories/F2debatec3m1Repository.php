<?php

namespace App\Repositories;

use App\Models\F2debatec3m1;
use App\Repositories\BaseRepository;

/**
 * Class F2debatec3m1Repository
 * @package App\Repositories
 * @version December 10, 2020, 5:21 pm UTC
*/

class F2debatec3m1Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'debate'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return F2debatec3m1::class;
    }
}
