<?php

namespace App\Repositories;

use App\Models\E2debatec3m1;
use App\Repositories\BaseRepository;

/**
 * Class E2debatec3m1Repository
 * @package App\Repositories
 * @version December 11, 2020, 7:09 pm UTC
*/

class E2debatec3m1Repository extends BaseRepository
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
        return E2debatec3m1::class;
    }
}
